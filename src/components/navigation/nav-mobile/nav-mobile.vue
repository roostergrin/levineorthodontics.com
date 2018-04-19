<template lang='pug' src='./nav-mobile.pug'></template>

<script>
import { openNav } from '@/mixins.js'

import Icon from 'components/icon/icon'

export default {
  props: ['props'],
  computed: {
    links () {
      return this.$router.options.routes
    }
  },
  mixins: [openNav],
  components: {
    Icon
  }
}
</script>
