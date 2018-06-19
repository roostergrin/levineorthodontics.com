<template lang='pug' src='./hero.pug'></template>

<script>
import Icon from 'components/icon/icon'

export default {
  props: ['props'],
  data () {
    return {
      loaded: false,
      swiperOption: {
        loop: true,
        autoplay: {
          delay: 4000
        },
        navigation: {
          nextEl: '.hero__slide-button-next',
          prevEl: '.hero__slide-button-prev'
        }
      }
    }
  },
  async created () {
    setTimeout(() => { this.loaded = true }, 500)
  },
  methods: {
    changeNav ({ direction, going }) {
      going === 'in' && direction !== 'top' ? this.$store.dispatch('SCROLLED_NAV', false) : this.$store.dispatch('SCROLLED_NAV', true)
    }
  },
  components: {
    Icon
  }
}
</script>
