<template lang='pug' src='./invisalign.pug'></template>

<script>
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
    Hero,
    Loader
  }
}
</script>
