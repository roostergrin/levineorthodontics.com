<template lang='pug' src='./block-trigger.pug'></template>

<script>
import { toggleAcive } from '@/mixins.js'

export default {
  props: ['props'],
  data () {
    return {
      intersectionOptions: {
        root: null,
        rootMargin: '0px 0px 0px 0px',
        thresholds: [0]
      }
    }
  },
  mixins: [toggleAcive],
  methods: {
    onWaypoint ({ going }) {
      if (going === this.$waypointMap.GOING_IN) {
        this.toggleAcive(this.props)
      }
    }
  }
}
</script>
