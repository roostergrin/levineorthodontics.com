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
      // if (going === 'out' || direction === 'top') { this.$store.dispatch('SCROLLED_NAV', false) }
      going === 'in' && direction !== 'top' ? this.$store.dispatch('SCROLLED_NAV', false) : this.$store.dispatch('SCROLLED_NAV', true)
    }
  }
}
</script>
