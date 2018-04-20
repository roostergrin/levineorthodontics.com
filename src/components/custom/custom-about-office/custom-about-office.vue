<template lang='pug' src='./custom-about-office.pug'></template>

<script>
import { swiper, swiperSlide } from 'vue-awesome-swiper'

export default {
  props: ['props'],
  data () {
    return {
      swiperOptions: {
        loop: true,
        slidesPerView: 3,
        spaceBetween: 11,
        centeredSlides: true,
        autoplay: true
      }
    }
  },
  components: {
    swiper,
    swiperSlide
  }
}
</script>
