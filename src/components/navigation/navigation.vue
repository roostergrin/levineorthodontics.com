<template lang='pug' src='./navigation.pug'></template>

<script>
import { showMenu, buttonOver } from '@/mixins'

export default {
  computed: {
    props () {
      return this.$store.state.app.nav
    },
    links () {
      return this.$router.options.routes
    }
  },
  data () {
    return {
      activeSub: 0
    }
  },
  mixins: [showMenu, buttonOver],
  methods: {
    activate () {
      this.$store.state.nav ? this.$store.dispatch('VIEW_NAV', false) : this.$store.dispatch('VIEW_NAV', true)
      this.showMenu()
    },
    activeLinks (e) {
      this.activeSub = e
    }
  }
}

</script>
