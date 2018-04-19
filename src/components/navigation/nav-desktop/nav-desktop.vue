<template lang='pug' src='./nav-desktop.pug'></template>

<script>
import Icon from 'components/icon/icon'

export default {
  props: ['props'],
  computed: {
    links () {
      return this.$router.options.routes
    }
  },
  components: {
    Icon
  }
}
</script>
