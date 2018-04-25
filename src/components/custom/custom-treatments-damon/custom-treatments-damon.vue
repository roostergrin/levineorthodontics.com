<template lang='pug' src='./custom-treatments-damon.pug'></template>

<script>
import Trigger from 'components/block/block-trigger/block-trigger'

export default {
  props: ['props'],
  data () {
    return {
      active: 0
    }
  },
  components: {
    Trigger
  }
}
</script>
