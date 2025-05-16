<template lang='pug' src='./hipaa-privacy-supplement.pug'></template>

<script>
import Loader from 'components/loader/loader'
import BlockFullWidthText from 'components/block/block-fullwidth-text/block-fullwidth-text'
import Hero from 'components/hero/hero'

export default {
  name: 'hipaa-privacy-supplement',
  computed: {
    props () {
      return this.$store.state.pages['hipaa-privacy-supplement']
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
