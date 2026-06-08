<template lang="pug" src="./repeater-sections-image.pug"></template>

<script>
export default {
  props: ['props'],
  data: () => {
    return {
      j: false,
      k: false,
      imagesReady: false,
      observer: null
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
    change ({ direction, going }) {
      this.loadImages()
      if (direction === 'top') { this.j ? this.k = true : this.j = true }
    },
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
