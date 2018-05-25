<template lang="pug" src="./block-text.pug"></template>

<script>
export default {
  props: ['props'],
  methods: {
    change ({ direction, going }) {
      if (going === this.$waypointMap.GOING_IN) {
        console.log('waypoint going in!')
      }
      if (going === this.$waypointMap.GOING_OUT) {
        console.log('waypoint going out!')
      }
    }
  }
}
</script>
