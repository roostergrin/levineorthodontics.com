<template lang='pug' src='./nav-mobile.pug'></template>

<script>
import { toggleNav } from '@/mixins.js'

import Icon from 'components/icon/icon'

export default {
  props: ['props'],
  computed: {
    links () {
      return this.$router.options.routes
    }
  },
  mixins: [toggleNav],
  components: {
    Icon
  }
}
</script>
