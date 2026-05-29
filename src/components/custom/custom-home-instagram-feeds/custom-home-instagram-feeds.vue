<template lang="pug" src="./custom-home-instagram-feeds.pug"></template>

<script>
import axios from 'axios'
import api from 'api'
import { lazyLoadWhenVisible } from '@/mixins'

export default {
  props: ['props'],
  mixins: [lazyLoadWhenVisible],
  data () {
    return {
      instagram: { data: [] },
      instagramLoaded: false,
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
      this.getIg()
    },
    async getIg () {
      if (this.instagramLoaded) return
      this.instagramLoaded = true

      try {
        this.instagram = await axios.get(`${api}/rg-instagram/v1/get-photos`)
      } catch (e) {
        this.instagramLoaded = false
        console.log('INSTAGRAM API: ' + e)
      }
    }
  }
}
</script>
