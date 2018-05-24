<template lang='pug' src='./contact-us.pug'></template>

<script>
import Hero from 'components/hero/hero'
import Loader from 'components/loader/loader'
import CustomContact from 'components/custom/custom-contact/custom-contact'

export default {
  name: 'contact',
  computed: {
    props () {
      return this.$store.state.pages['contact-us']
    },
    loading () {
      return this.$store.state.loading
    }
  },
  components: {
    Hero,
    Loader,
    CustomContact
  }
}
</script>
