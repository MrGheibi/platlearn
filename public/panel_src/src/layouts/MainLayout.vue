<template>
  <q-layout v-if="show" view="lHh Lpr lFf">
    <q-header class="b-content b-shadow bg-grey-1 text-grey-8">
      <q-toolbar>
        <q-btn
          flat
          dense
          round
          icon="menu"
          aria-label="Menu"
          @click="leftDrawerOpen = !leftDrawerOpen"
        />

        <q-toolbar-title class="user-name">
          {{user.name}}
        </q-toolbar-title>

        <q-space/>

        <div class="q-gutter-sm row items-center no-wrap">
          <q-toggle
            v-model="dark"
            checked-icon="mdi-theme-light-dark"
            :label="dark? 'شب' : 'روز'"
            color="green"
            unchecked-icon="mdi-theme-light-dark"
          />

          <q-btn round dense flat :icon="$q.fullscreen.isActive ? 'fullscreen_exit' : 'fullscreen'"
                 @click="$q.fullscreen.toggle()"
                 v-if="$q.screen.gt.sm">
            <q-tooltip>تمام صفحه</q-tooltip>
          </q-btn>
          <q-btn @click="logout" dense flat color="danger" icon="logout">
            <q-tooltip>خروج</q-tooltip>
          </q-btn>
          <q-btn round flat>
            <q-avatar size="26px">
              <img src="https://cdn.quasar.dev/img/boy-avatar.png">
            </q-avatar>
            <q-tooltip>Account</q-tooltip>
          </q-btn>

        </div>
      </q-toolbar>
    </q-header>

    <q-drawer
      :width="260"
      v-model="leftDrawerOpen"
      show-if-above
      content-class="bg-grey-1 scroller"
    >
      <q-list>
        <div class="flex flex-center">
          <!--     user profile image or company logo   -->
          <img
            class="shadow-3 profile-img"
            alt="Blazar logo"
            src="~assets/platlearn.svg"
            width="155"
          >

          <!--
          <span class="profile-text">
              User Name
          </span>
          -->
        </div>

        <q-separator inset="true" class="q-my-sm q-mb-md"/>
        <SideBar></SideBar>
      </q-list>
    </q-drawer>

    <q-page-container>
      <router-view/>
    </q-page-container>
  </q-layout>
</template>

<script>
import SideBar from 'components/SideBar'
import crypto from 'crypto'

export default {
  name: 'MyLayout',
  components: {
    SideBar
  },
  data () {
    return {
      leftDrawerOpen: false,
      search: '',
      user: [],
      dark: false,
      show: false
    }
  },
  beforeMount () {
    this.setTokenValid()
  },
  methods: {
    hasher (type, data) {
      return crypto.createHash(type).update(data).digest('hex')
    },
    hashMaker (data) {
      const hash1 = this.hasher('sha1', data)
      const hash2 = this.hasher('rmd160', hash1)
      const hash3 = this.hasher('sha384', hash2)
      return this.hasher('md5', hash3)
    },
    setTokenValid () {
      const queryToken = this.$route.query.token
      const queryStatus = Boolean(this.$route.query.status)
      const checkNotStorage = localStorage.token === undefined || localStorage.token === ''
      const checkNotQueryToken = !queryToken || queryToken.length < 82 || !queryStatus

      history.replaceState(null, '', location.href.split('?')[0])

      if (!checkNotQueryToken) {
        this.setAxiosHeaderAuth(queryToken)
        this.checkLogin()
      } else if (!checkNotStorage) {
        this.setAxiosHeaderAuth(localStorage.token)
        this.checkLogin()
      }
    },
    checkLogin () {
      const app = this
      this.$axios.post(process.env.api + 'api/auth/islogin').then(response => {
        if (response.data.status === true) {
          // set Response in var res
          const res = response.data.dataResponse.original

          localStorage.token = res.token
          localStorage.platlearn = app.hashMaker(res.user.level)
          app.setAxiosHeaderAuth(res.token)
          app.$store.commit('panel/setUser', res.user)
          app.user = res.user
          app.show = true
        } else {
          app.redirectToLoginPage()
        }
      })
    },
    redirectToLoginPage () {
      window.location.href = process.env.api + 'signin'
    },
    setAxiosHeaderAuth (token) {
      this.$axios.defaults.headers.common.Authorization = 'Bearer' + ' ' + token
    },
    logout () {
      const app = this
      this.$q.dialog({
        title: 'هشدار',
        message: 'آیا میخواهید از پنل خارج شوید ؟',
        ok: {
          push: true
        },
        cancel: {
          push: true,
          color: 'negative'
        },
        persistent: true
      }).onOk(() => {
        app.$axios.post(process.env.api + 'api/auth/logout').then(function (response) {
          localStorage.removeItem('token')
          app.$axios.defaults.headers.common.Authorization = ''
          window.location.href = process.env.api + '?typeRequest=logout'
        })
      })
    },
    showNotif (message, icon = 'mdi-checkbox-marked-circle-outline', color = 'green') {
      this.$q.notify({
        message: message,
        icon: icon,
        color: color,
        position: 'bottom-right',
        progress: true
      })
    }

  }
}
</script>

<style lang="sass">
.YL
  &__toolbar-input-container
    min-width: 100px
    width: 55%

  &__toolbar-input-btn
    border-radius: 0
    border-style: solid
    border-width: 1px 1px 1px 0
    border-color: rgba(0, 0, 0, .24)
    max-width: 60px
    width: 100%

  &__drawer-footer-link
    color: inherit
    text-decoration: none
    font-weight: 500
    font-size: .75rem

    &:hover
      color: #000
</style>
