<template lang="pug" src="./custom-home-team-slider.pug"></template>

<script>
export default {
  props: ['props'],
  data () {
    return {
      imagesReady: false,
      observer: null,
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
  mounted () {
    this.observeImages()
  },
  beforeDestroy () {
    if (this.observer) {
      this.observer.disconnect()
    }
  },
  methods: {
    observeImages () {
      if (!('IntersectionObserver' in window)) {
        this.loadImages()
        return
      }

      this.observer = new IntersectionObserver((entries) => {
        if (entries.some(entry => entry.isIntersecting)) {
          this.loadImages()
        }
      }, { rootMargin: '100px 0px' })

      this.observer.observe(this.$el)
    },
    loadImages () {
      this.imagesReady = true

      if (this.observer) {
        this.observer.disconnect()
      }
    }
  }
}
</script>
