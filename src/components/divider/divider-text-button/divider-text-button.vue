<template lang="pug" src="./divider-text-button.pug"></template>

<script>
export default {
  props: ['props'],
  data: () => {
    return {
      active: false,
      imageReady: false,
      observer: null
    }
  },
  mounted () {
    this.observeImage()
  },
  beforeDestroy () {
    if (this.observer) {
      this.observer.disconnect()
    }
  },
  methods: {
    activate ({direction, going}) {
      if (going === 'in') {
        this.active = true
        this.loadImage()
      }
    },
    observeImage () {
      if (!('IntersectionObserver' in window)) {
        this.loadImage()
        return
      }

      this.observer = new IntersectionObserver((entries) => {
        if (entries.some(entry => entry.isIntersecting)) {
          this.loadImage()
        }
      }, { rootMargin: '100px 0px' })

      this.observer.observe(this.$el)
    },
    loadImage () {
      this.imageReady = true

      if (this.observer) {
        this.observer.disconnect()
      }
    }
  }
}
</script>
