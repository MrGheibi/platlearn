<template>
  <q-layout class="bg-image" v-show="show">
    <q-page-container>
      <q-page class="bg-login">

        <div class="column">
          <div class="row flex flex-center q-ma-md">
            <q-card square dark class="q-pa-lg b-rounded no-shadow bg-grey-1 col-md-4 col-sm-6">
              <q-card-section class="q-mb-sm b-rounded bg-primary">
                <div class="flex flex-center" style="rgba(114, 114, 114, 0.88) !important;">
                  <svg id="logo" viewBox="0 0 483 483"
                       style="enable-background:new 0 0 460 460;opacity: 1; margin-top: 20px; "
                       xml:space="preserve" width="128px" height="128px"
                       v-html="logoMethod">
        </svg>
                  <h4 class="text-logo flex flex-center" style="margin-top: 25px; margin-bottom: 15px;">Platlearn</h4>
                </div>
              </q-card-section>
              <q-form @submit.prevent.stop="login" class="q-gutter-md q-mt-sm">
                <q-input class="text-grey-10" v-model="form.email" type="email"
                         lazy-rules
                         :rules="[ val => val && !!val || 'لطفا ایمیل خود را وارد کنید']"
                         hint="کد امنیتی به ایمیل که وارد میکنید ارسال میشود" label="ایمیل ">
                  <template v-slot:prepend>
                    <q-icon name="email"/>
                  </template>
                </q-input>
                <q-input class="text-grey-10" v-model="form.password" type="password"
                         lazy-rules
                         :rules="[ val => val && !!val || 'لطفا رمز عبور خود را وارد کنید']"
                         hint="گذرواژه یا رمز عبور خود را در این بخش وارد کنید"
                         label="رمز عبور">
                  <template v-slot:prepend>
                    <q-icon name="password"/>
                  </template>
                </q-input>
                <div class="flex q-mt-lg flex-center">
                  <q-btn rounded size="md" type="submit" color="blue-4" class="push"
                         label="احراز هویت"/>
                </div>
              </q-form>

              <p class="text-center q-mt-md  text-grey-7" style="font-size: 12px">
                لطفا توجه داشته باشید که اگر تعداد تلاش های شما برای لاگین کردن بیشتر از 3 بار شود شما به مدت 10 ساعت
                بلاک میشوید !</p>
            </q-card>
          </div>
        </div>
      </q-page>
    </q-page-container>
  </q-layout>
</template>

<script type="text/javascript">
import Vivus from 'vivus'
import logoData from './logoData'

export default {
  data () {
    return {
      logos: Object.keys(logoData),
      logo: 'Digitalizer',
      show: false,
      form: {
        email: '',
        password: ''
      },
      vivus: ''
    }
  },
  mounted () {
    this.setAxiosHeaderAuth(localStorage.getItem('tokenAdmin'))
    this.checkLogin()
    this.startAnimation()
  },
  computed: {
    logoMethod () {
      return logoData[this.logo]
    }
  },
  methods: {
    checkLogin () {
      const app = this
      this.$axios.post(process.env.api + 'api/admin/auth/islogin').then(response => {
        if (response.data.status === true) {
          // set Response in var res
          const res = response.data.dataResponse.original
          // set token in LocalStorage
          localStorage.setItem('tokenAdmin', res.token)

          // set token in AxiosHeader
          app.setAxiosHeaderAuth(res.token)

          this.$router.push('/')
        } else {
          app.show = true
        }
      })
    },
    login () {
      const app = this
      app.$q.loading.show()
      this.$axios.post(process.env.api + 'api/admin/auth/login', app.form).then(response => {
        app.showNotif(response.data.message)
      }).catch(error => {
        app.showNotif(error.response.data.message, 'mdi-alert', 'red')
      }).finally(() => {
        app.$q.loading.hide()
      })
    },
    startAnimation () {
      this.vivus = new Vivus('logo', {
        duration: 400,
        forceRender: false
      }, function (element) {
        for (const item of element.el.children[0].children) {
          item.setAttribute('style', 'fill:white')
          item.setAttribute('style', 'fill:white')
        }
      }
      )
    },
    showNotif (message, icon = 'mdi-checkbox-marked-circle-outline', color = 'green') {
      this.$q.notify({
        message: message,
        icon: icon,
        color: color,
        position: 'bottom-right',
        progress: true
      })
    },
    setAxiosHeaderAuth (token) {
      this.$axios.defaults.headers.common.Authorization = 'Bearer' + ' ' + token
    }
  }
}
</script>
<style scoped>
.card {
  margin-bottom: 0px;
}

.card-content {
  min-height: 160px;
}

button {
  margin-bottom: 4%;
}

h4 {
  font-weight: 300;
}
</style>
