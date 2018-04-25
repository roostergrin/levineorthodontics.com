<template lang='pug' src='./treatments.pug'></template>

<script>
import Hero from 'components/hero/hero'
import Loader from 'components/loader/loader'

export default {
  name: 'treatments',
  computed: {
    props () {
      return this.$store.state.pages['treatments']
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
