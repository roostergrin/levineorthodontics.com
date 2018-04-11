<template lang='pug' src='./treatments.pug'></template>

<script>
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
    Loader
  }
}
</script>
