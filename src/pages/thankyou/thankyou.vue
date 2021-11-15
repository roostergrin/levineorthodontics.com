<template lang='pug' src='./thankyou.pug'></template>

<script>
import Loader from 'components/loader/loader'

export default {
  name: 'thank-you',
  computed: {
    props () {
      return this.$store.state.pages['thankyou']
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
