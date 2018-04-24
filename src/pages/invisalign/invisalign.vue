<template lang='pug' src='./invisalign.pug'></template>

<script>
import BlockAppt from 'components/block/block-appointment/block-appointment'
import BlockHeader from 'components/block/block-header/block-header'
import BlockImggrid from 'components/block/block-imagegrid/block-imagegrid'
import Hero from 'components/hero/hero'
import Loader from 'components/loader/loader'

export default {
  name: 'invisalign',
  computed: {
    props () {
      return this.$store.state.pages.invisalign
    },
    loading () {
      return this.$store.state.loading
    }
  },
  components: {
    BlockAppt,
    BlockHeader,
    BlockImggrid,
    Hero,
    Loader
  }
}
</script>
