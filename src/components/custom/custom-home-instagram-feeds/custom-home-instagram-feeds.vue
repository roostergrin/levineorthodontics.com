<template lang="pug" src="./custom-home-instagram-feeds.pug"></template>

<script>
import axios from 'axios'
import api from 'api'
export default {
  props: ['props'],
  data () {
    return {
      instagram: null,
      instagramLoaded: false,
      instagramObserver: null,
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
  computed: {
    instagramImages () {
      if (this.instagramLoaded) {
        return this.instagram && this.instagram.data ? this.instagram.data : []
      }

      return Array.from({ length: 10 }, () => ({}))
    }
  },
  mounted () {
    if ('IntersectionObserver' in window) {
      this.instagramObserver = new IntersectionObserver((entries) => {
        if (entries.some(entry => entry.isIntersecting)) {
          this.getIg()
          this.instagramObserver.disconnect()
        }
      }, {
        rootMargin: '600px 0px'
      })
      this.instagramObserver.observe(this.$el)
      return
    }

    this.getIg()
  },
  beforeDestroy () {
    if (this.instagramObserver) {
      this.instagramObserver.disconnect()
    }
  },
  methods: {
    async getIg () {
      if (this.instagramLoaded) return

      try {
        this.instagram = await axios.get(`${api}/rg-instagram/v1/get-photos`)
      } catch (e) {
        this.instagram = null
      }

      this.instagramLoaded = true
    }
  }
}
</script>
