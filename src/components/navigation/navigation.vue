<template lang='pug' src='./navigation.pug'></template>

<script>
import { showMenu, buttonOver } from '@/mixins'
import Icon from 'components/icon/icon'
import Modal from 'components/modal/modal-form-appointment/modal-form-appointment'

export default {
  mixins: [showMenu, buttonOver],
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
    },
    modal (props) {
      this.$store.dispatch('VIEW_SHOWMODAL', 'appointment')
    }
  },
  components: {
    Icon,
    Modal
  }
}

</script>
