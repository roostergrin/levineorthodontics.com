<template lang='pug' src='./thank-you.pug'></template>

<script>
import Loader from 'components/loader/loader'

export default {
  name: 'thank-you',
  computed: {
    props () {
      return this.$store.state.pages['thank-you']
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
