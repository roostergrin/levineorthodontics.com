<template lang="pug" src="./block-text-button.pug"></template>

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
    },
    modal (props) {
      this.$store.dispatch('VIEW_MODALCONTENT', props)
      this.$store.dispatch('VIEW_SHOWMODAL', 'gallery')
    }
  }
}
</script>
