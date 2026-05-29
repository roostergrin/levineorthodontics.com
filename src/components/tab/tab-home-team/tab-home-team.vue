<template lang="pug" src="./tab-home-team.pug"></template>

<script>
import { lazyLoadWhenVisible } from '@/mixins'

export default {
  props: ['props'],
  mixins: [lazyLoadWhenVisible],
  data () {
    return {
      top: 0,
      bottom: 4,
      active: false
    }
  },
  methods: {
    change ({ direction, going }) {
      going === this.$waypointMap.GOING_IN ? this.active = true : ''
    }
  }
}
</script>
