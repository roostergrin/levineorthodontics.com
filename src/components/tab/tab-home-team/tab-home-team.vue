<template lang="pug" src="./tab-home-team.pug"></template>

<script>
export default {
  props: ['props'],
  data () {
    return {
      top: 0,
      bottom: 4,
      active: false,
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
      if (going === this.$waypointMap.GOING_IN) {
        this.active = true
        this.loadImages()
      }
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
    },
    activateTeam (index) {
      this.top = index
      this.loadImages()
    }
  }
}
</script>
