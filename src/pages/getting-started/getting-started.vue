<template lang='pug' src='./getting-started.pug'></template>

<script>
import Hero from 'components/hero/hero'
import Loader from 'components/loader/loader'

export default {
  name: 'getting-started',
  computed: {
    props () {
      return this.$store.state.pages['getting-started']
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
