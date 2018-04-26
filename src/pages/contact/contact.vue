<template lang='pug' src='./contact.pug'></template>

<script>
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
    Hero,
    Loader
  }
}
</script>
