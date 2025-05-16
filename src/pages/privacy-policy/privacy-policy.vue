<template lang='pug' src='./privacy-policy.pug'></template>

<script>
import Loader from 'components/loader/loader'
import BlockFullWidthText from 'components/block/block-fullwidth-text/block-fullwidth-text'
import Hero from 'components/hero/hero'

export default {
  name: 'privacy-policy',
  computed: {
    props () {
      return this.$store.state.pages['privacy-policy']
    },
    loading () {
      return this.$store.state.loading
    }
  },
  components: {
    Loader,
    BlockFullWidthText,
    Hero
  }
}
</script>
