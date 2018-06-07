<template lang="pug" src="./repeater-sections-image.pug"></template>

<script>
export default {
  props: ['props'],
  data: () => {
    return {
      j: false,
      k: false
    }
  },
  methods: {
    change ({ direction, going }) {
      if (direction === 'top') { this.j ? this.k = true : this.j = true }
    }
  }
}
</script>
