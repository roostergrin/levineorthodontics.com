<template lang='pug' src='./getting-started.pug'></template>

<script>
import Loader from 'components/loader/loader'

export default {
  name: 'home',
  computed: {
    props () {
      return this.$store.state.pages['getting-started']
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
