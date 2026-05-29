<template lang="pug" src="./custom-home-doctor.pug"></template>

<script>
export default {
  props: ['props'],
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
