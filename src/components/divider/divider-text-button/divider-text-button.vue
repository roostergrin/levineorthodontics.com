<template lang="pug" src="./divider-text-button.pug"></template>

<script>
export default {
  props: ['props'],
  data: () => {
    return {
      active: false
    }
  },
  methods: {
    activate ({direction, going}) {
      going === 'in' ? this.active = true : ''
    }
  }
}
</script>
