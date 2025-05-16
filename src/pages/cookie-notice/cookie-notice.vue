<template lang='pug' src='./cookie-notice.pug'></template>

<script>
import Loader from 'components/loader/loader'
import BlockFullWidthText from 'components/block/block-fullwidth-text/block-fullwidth-text'
import Hero from 'components/hero/hero'

export default {
  name: 'cookie-notice',
  computed: {
    props () {
      return this.$store.state.pages['cookie-notice']
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
