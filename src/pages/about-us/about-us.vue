<template lang='pug' src='./about-us.pug'></template>

<script>
import BlockHeader from 'components/block/block-header/block-header'
import Loader from 'components/loader/loader'

export default {
  name: 'about-us',
  computed: {
    props () {
      return this.$store.state.pages['about-us']
    },
    loading () {
      return this.$store.state.loading
    }
  },
  components: {
    BlockHeader,
    Loader
  }
}
</script>
