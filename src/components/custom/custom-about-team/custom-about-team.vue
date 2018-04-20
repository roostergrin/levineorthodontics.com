<template lang='pug' src='./custom-about-team.pug'></template>

<script>
import { swiper, swiperSlide } from 'vue-awesome-swiper'

export default {
  data () {
    return {
      activeIndex: 0,
      swiperOptions: {
        effect: 'fade'
      }
    }
  },
  props: ['props'],
  computed: {
    swiper () {
      return this.$refs.mySwiper.swiper
    }
  },
  components: {
    swiper,
    swiperSlide
  },
  methods: {
    slideTo (i) {
      this.activeIndex = i
    }
  }
}
</script>
