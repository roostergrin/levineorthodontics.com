<template lang="pug" src="./block-fullwidth-text.pug"></template>

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
      going === 'in' ? this.active = true : ''
    }
  }
}
</script>
