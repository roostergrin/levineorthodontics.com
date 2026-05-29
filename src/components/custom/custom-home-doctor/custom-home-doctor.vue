<template lang="pug" src="./custom-home-doctor.pug"></template>

<script>
import { lazyLoadWhenVisible } from '@/mixins'

export default {
  props: ['props'],
  mixins: [lazyLoadWhenVisible],
  data () {
    return {
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
