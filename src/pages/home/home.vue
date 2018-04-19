<template lang='pug' src='./home.pug'></template>

<script>
import BlockAppt from 'components/block/block-appointment/block-appointment'
import BlockHeader from 'components/block/block-header/block-header'
import Hero from 'components/hero/hero'
import HomeBanner from 'components/custom/custom-home-banner/custom-home-banner'
import HomeIcons from 'components/custom/custom-home-icons/custom-home-icons'
import HomeTestimonials from 'components/custom/custom-home-testimonials/custom-home-testimonials'
import Loader from 'components/loader/loader'

export default {
  name: 'home',
  computed: {
    props () {
      return this.$store.state.pages.home
    },
    loading () {
      return this.$store.state.loading
    }
  },
  components: {
    BlockAppt,
    BlockHeader,
    Hero,
    HomeBanner,
    HomeIcons,
    HomeTestimonials,
    Loader
  }
}
</script>
