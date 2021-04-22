<template>
  <div class="b-z-50">
    <q-item to="/" class="item-side-bar text-grey-9" >
      <q-item-section  avatar>
        <q-icon name="dashboard"/>
      </q-item-section>
      <q-item-section>
        <q-item-label>داشبورد</q-item-label>
      </q-item-section>
    </q-item>

    <q-item to="/categories" class="item-side-bar" active-class="item-side-bar-active">
      <q-item-section avatar>
        <q-icon name="mdi-folder-network-outline"/>
      </q-item-section>
      <q-item-section>
        <q-item-label>دسته بندی ها</q-item-label>
      </q-item-section>
    </q-item>
    <q-item to="/articles" class="item-side-bar" active-class="item-side-bar-active">
      <q-item-section avatar>
        <q-icon name="mdi-file-document-multiple-outline"/>
      </q-item-section>
      <q-item-section>
        <q-item-label>مقالات آموزشی</q-item-label>
      </q-item-section>
    </q-item>

<!--    <q-expansion-item
      class="item-side-bar"
      icon="pages"
      label="صفحات"
    >
      <q-list style="border-radius: 15px">
        <q-item class="item-side-bar" to="/login" active-class="item-side-bar-active"  >
          <q-item-section avatar>
            <q-icon name="login"/>
          </q-item-section>
          <q-item-section>
            <q-item-label>ورود</q-item-label>
          </q-item-section>
        </q-item>
        <q-item class="item-side-bar" to="/lockScreen" active-class="q-item-no-link-highlighting">
          <q-item-section avatar>
            <q-icon name="lock"/>
          </q-item-section>
          <q-item-section>
            <q-item-label>صفحه قفل</q-item-label>
          </q-item-section>
        </q-item>
      </q-list>
    </q-expansion-item>

    <q-item to="/referee" class="item-side-bar" active-class="item-side-bar-active">
      <q-item-section avatar>
        <q-icon name="mdi-cog"/>
      </q-item-section>
      <q-item-section>
        <q-item-label>تنظیمات</q-item-label>
      </q-item-section>
    </q-item>-->
  </div>
</template>

<script>
export default {
  name: 'SideBar'
}
</script>
