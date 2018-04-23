<template lang='pug' src='./treatments.pug'></template>

<script>
import BlockAppt from 'components/block/block-appointment/block-appointment'
import BlockHeader from 'components/block/block-header/block-header'
import Hero from 'components/hero/hero'
import Loader from 'components/loader/loader'

export default {
  name: 'getting-started',
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
    BlockAppt,
    BlockHeader,
    Loader
  }
}
</script>
