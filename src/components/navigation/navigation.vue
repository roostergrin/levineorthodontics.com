<template lang='pug' src='./navigation.pug'></template>

<script>
import { openModal } from '@/mixins.js'

import NavDesktop from 'components/navigation/nav-desktop/nav-desktop'
import NavTablet from 'components/navigation/nav-tablet/nav-tablet'
import NavMobile from 'components/navigation/nav-mobile/nav-mobile'

export default {
  computed: {
    props () {
      return this.$store.state.app.nav
    }
  },
  mixins: [openModal],
  components: {
    NavDesktop,
    NavTablet,
    NavMobile
  }
}

</script>
