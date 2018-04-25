<template lang='pug' src='./home.pug'></template>

<script>
import Hero from 'components/hero/hero'
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
    Hero,
    Loader
  }
}
</script>
