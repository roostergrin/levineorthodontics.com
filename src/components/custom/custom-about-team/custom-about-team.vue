<template lang='pug' src='./custom-about-team.pug'></template>

<script>
import { swiper, swiperSlide } from 'vue-awesome-swiper'
import Trigger from 'components/block/block-trigger/block-trigger'

export default {
  data () {
    return {
      active: 0,
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
    swiperSlide,
    Trigger
  },
  methods: {
    slideTo (i) {
      this.activeIndex = i
    }
  }
}
</script>
