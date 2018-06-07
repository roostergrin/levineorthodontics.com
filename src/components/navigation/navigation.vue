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
      activeSub: 0,
      call: false,
      menu: 'MENU'
    }
  },
  async created () {
    // console.log(this.$router.history.current.path)
  },
  mixins: [showMenu, buttonOver],
  methods: {
    activate () {
      this.$store.state.nav ? this.$store.dispatch('VIEW_NAV', false) : this.$store.dispatch('VIEW_NAV', true)
      this.$store.state.nav ? this.showMenu(false) : this.showMenu()
      this.$store.state.nav ? this.menu = 'EXIT' : this.menu = 'MENU'
    },
    activeLinks (e) {
      this.activeSub = e
    },
    callFunc () {
      this.call ? this.call = false : this.call = true
    }
  },
  components: {
    Icon
  }
}

</script>
