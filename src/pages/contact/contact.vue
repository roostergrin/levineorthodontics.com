<template lang='pug' src='./contact.pug'></template>

<script>
import BlockAppt from 'components/block/block-appointment/block-appointment'
import BlockHeader from 'components/block/block-header/block-header'
import BlockImggrid from 'components/block/block-imagegrid/block-imagegrid'
import ContactSection from 'components/custom/custom-contact-section/custom-contact-section'
import Hero from 'components/hero/hero'
import Loader from 'components/loader/loader'

export default {
  name: 'contact',
  computed: {
    props () {
      return this.$store.state.pages.contact
    },
    loading () {
      return this.$store.state.loading
    }
  },
  components: {
    BlockAppt,
    BlockHeader,
    BlockImggrid,
    ContactSection,
    Hero,
    Loader
  }
}
</script>
