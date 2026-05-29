<template lang="pug" src="./custom-home-contact.pug"></template>

<script>
import ContactForm from 'components/form/form-home-contact/form-home-contact'

export default {
  props: ['props'],
  data () {
    return {
      backgroundReady: false,
      observer: null
    }
  },
  mounted () {
    if ('IntersectionObserver' in window) {
      this.observer = new IntersectionObserver((entries) => {
        if (entries.some(entry => entry.isIntersecting)) {
          this.loadBackground()
          this.observer.disconnect()
        }
      }, {
        rootMargin: '700px 0px'
      })
      this.observer.observe(this.$el)
      return
    }

    this.loadBackground()
  },
  beforeDestroy () {
    if (this.observer) {
      this.observer.disconnect()
    }
  },
  methods: {
    loadBackground () {
      this.backgroundReady = true
    }
  },
  components: {
    ContactForm
  }
}
</script>
