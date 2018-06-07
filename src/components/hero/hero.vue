<template lang='pug' src='./hero.pug'></template>

<script>
export default {
  props: ['props'],
  data: () => {
    return {
      loaded: false
    }
  },
  async created () {
    setTimeout(() => { this.loaded = true }, 500)
  },
  methods: {
    changeNav ({ direction, going }) {
      going === 'in' ? this.$store.dispatch('SCROLLED_NAV', false) : this.$store.dispatch('SCROLLED_NAV', true)
    }
  }
}
</script>
