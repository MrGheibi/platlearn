<template>
  <div class="card text-white" :class="backgroundColor">
    <div class="card-content ">
      <div class="row">
        <div class="width-1of3">
          <q-icon :name="iconName"/>
        </div>
        <div class="width-2of3">
          <p class="text-italic ">{{title}}</p>
          <h5 ref="number">

          </h5>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  props: ['title', 'total', 'backgroundColor', 'iconName'],
  mounted () {
  },
  watch: {
    total () {
    }
  },
  data () {
    return {
      options: {
        separator: '.'
      }
    }
  }
}
</script>
<style scoped>
i {
  font-size: 54px;
}
</style>
