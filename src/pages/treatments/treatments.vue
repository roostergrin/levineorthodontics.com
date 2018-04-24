<template lang='pug' src='./treatments.pug'></template>

<script>
import BlockAppt from 'components/block/block-appointment/block-appointment'
import BlockHeader from 'components/block/block-header/block-header'
import Hero from 'components/hero/hero'
import Loader from 'components/loader/loader'
import TreatAges from 'components/custom/custom-treatments-ages/custom-treatments-ages'
import TreatBraces from 'components/custom/custom-treatments-braces/custom-treatments-braces'
import TreatDamon from 'components/custom/custom-treatments-damon/custom-treatments-damon'

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
    BlockAppt,
    BlockHeader,
    Hero,
    Loader,
    TreatAges,
    TreatBraces,
    TreatDamon
  }
}
</script>
