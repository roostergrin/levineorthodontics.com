<template lang='pug' src='./terms-of-use.pug'></template>

<script>
import Loader from 'components/loader/loader'
import BlockFullWidthText from 'components/block/block-fullwidth-text/block-fullwidth-text'
import Hero from 'components/hero/hero'

export default {
  name: 'terms-of-use',
  computed: {
    props () {
      return this.$store.state.pages['terms-of-use']
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
