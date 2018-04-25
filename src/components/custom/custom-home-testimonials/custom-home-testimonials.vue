<template lang='pug' src='./custom-home-testimonials.pug'></template>

<script>
import { swiper, swiperSlide } from 'vue-awesome-swiper'
import Trigger from 'components/block/block-trigger/block-trigger'

export default {
  data () {
    return {
      active: 0,
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
    swiperSlide,
    Trigger
  }
}
</script>
