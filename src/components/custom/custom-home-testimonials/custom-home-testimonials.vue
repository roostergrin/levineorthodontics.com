<template lang='pug' src='./custom-home-testimonials.pug'></template>

<script>
import { swiper, swiperSlide } from 'vue-awesome-swiper'

export default {
  data () {
    return {
      swiperOption: {
        loop: true,
        navigation: {
          nextEl: '.custom-home-testimonials__next',
          prevEl: '.custom-home-testimonials__prev'
        }
      }
    }
  },
  props: ['props'],
  components: {
    swiper,
    swiperSlide
  }
}
</script>
