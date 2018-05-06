<template lang='pug' src='./navigation.pug'></template>

<script>

export default {
  computed: {
    props () {
      return this.$store.state.app.nav
    },
    links () {
      return this.$router.options.routes
    }
  },
  methods: {
    activate () {
      this.$store.state.nav ? this.$store.dispatch('VIEW_NAV', false) : this.$store.dispatch('VIEW_NAV', true)
    }
  }
}

</script>
