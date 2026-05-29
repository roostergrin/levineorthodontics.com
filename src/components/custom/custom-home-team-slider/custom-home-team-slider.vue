<template lang="pug" src="./custom-home-team-slider.pug"></template>

<script>
import { lazyLoadWhenVisible } from '@/mixins'

export default {
  props: ['props'],
  mixins: [lazyLoadWhenVisible],
  data () {
    return {
      sliderOptions: {
        loop: true,
        autoplay: {
          delay: 3000
        },
        effect: 'fade',
        navigation: {
          nextEl: '.custom-home-office-tour__button-next',
          prevEl: '.custom-home-office-tour__button-prev'
        }
      }
    }
  },
  methods: {
    updateLazyMedia () {
      const swiper = this.$refs.teamSlider && this.$refs.teamSlider.swiper
      if (!swiper) return
      if (swiper.reLoop) swiper.reLoop()
      if (swiper.update) swiper.update(true)
    }
  }
}
</script>
