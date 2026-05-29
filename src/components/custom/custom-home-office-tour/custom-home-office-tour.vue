<template lang="pug" src="./custom-home-office-tour.pug"></template>

<script>
import Icon from 'components/icon/icon'
import { lazyLoadWhenVisible } from '@/mixins'

export default {
  props: ['props'],
  mixins: [lazyLoadWhenVisible],
  data () {
    return {
      sliderOptions: {
        loop: true,
        autoplay: {
          delay: 4000
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
      const swiper = this.$refs.officeTourSlider && this.$refs.officeTourSlider.swiper
      if (!swiper) return
      if (swiper.reLoop) swiper.reLoop()
      if (swiper.update) swiper.update(true)
    }
  },
  components: {
    Icon
  }
}
</script>
