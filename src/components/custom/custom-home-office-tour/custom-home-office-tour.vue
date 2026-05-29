<template lang="pug" src="./custom-home-office-tour.pug"></template>

<script>
import Icon from 'components/icon/icon'

export default {
  props: ['props'],
  data () {
    return {
      imagesReady: false,
      observer: null,
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
  mounted () {
    if ('IntersectionObserver' in window) {
      this.observer = new IntersectionObserver((entries) => {
        if (entries.some(entry => entry.isIntersecting)) {
          this.loadImages()
          this.observer.disconnect()
        }
      }, {
        rootMargin: '700px 0px'
      })
      this.observer.observe(this.$el)
      return
    }

    this.loadImages()
  },
  beforeDestroy () {
    if (this.observer) {
      this.observer.disconnect()
    }
  },
  methods: {
    loadImages () {
      this.imagesReady = true
    }
  },
  components: {
    Icon
  }
}
</script>
