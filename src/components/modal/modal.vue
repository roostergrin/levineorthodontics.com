<template lang="pug" src="./modal.pug"></template>

<script>
import Icon from 'components/icon/icon'

export default {
  computed: {
    props () {
      return this.$store.state.modalContent
    }
  },
  data () {
    return {
      swiperOption: {
        navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev'
        }
      }
    }
  },
  methods: {
    close () {
      this.$store.dispatch('VIEW_SHOWMODAL', false)
    }
  },
  components: {
    Icon
  }
}
</script>
