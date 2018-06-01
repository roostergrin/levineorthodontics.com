<template lang='pug' src='./navigation.pug'></template>

<script>
import { showMenu, buttonOver } from '@/mixins'
import Icon from 'components/icon/icon'

export default {
  computed: {
    props () {
      return this.$store.state.app.nav
    },
    links () {
      return this.$router.options.routes
    },
    images () {
      return this.$store.state.pages
    }
  },
  data () {
    return {
      activeSub: ''
    }
  },
  async created () {
    console.log(this.images)
  },
  mixins: [showMenu, buttonOver],
  methods: {
    activate () {
      this.$store.state.nav ? this.$store.dispatch('VIEW_NAV', false) : this.$store.dispatch('VIEW_NAV', true)
      this.$store.state.nav ? this.showMenu(false) : this.showMenu()
    },
    activeLinks (e) {
      this.activeSub = e
    }
  },
  components: {
    Icon
  }
}

</script>
