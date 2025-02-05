<template lang="pug" src="./custom-home-instagram-feeds.pug"></template>

<script>
import axios from 'axios'
import api from 'api'
export default {
  props: ['props'],
  data () {
    return {
      instagram: null,
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
  async created () {
    this.instagram = await axios.get(`${api}/rg-instagram/v1/get-photos`)
  },
  methods: {
    getIg () {
      this.instagram = this.axios.get(`${api}/rg-instagram/v1/get-photos`)
    }
  }
}
</script>
