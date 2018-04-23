<template lang='pug' src='./getting-started.pug'></template>

<script>
import BlockAppt from 'components/block/block-appointment/block-appointment'
import BlockHeader from 'components/block/block-header/block-header'
import BlockImageGrid from 'components/block/block-imagegrid/block-imagegrid'
import GettingFAQ from 'components/custom/custom-getting-faq/custom-getting-faq'
import GettingFinance from 'components/custom/custom-getting-finance/custom-getting-finance'
import GettingForms from 'components/custom/custom-getting-forms/custom-getting-forms'
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
    BlockAppt,
    BlockHeader,
    BlockImageGrid,
    GettingFAQ,
    GettingFinance,
    GettingForms,
    Loader
  }
}
</script>
