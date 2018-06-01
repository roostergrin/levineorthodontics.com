<template lang="pug" src="./tab-home-team.pug"></template>

<script>
export default {
  props: ['props'],
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
