<template lang='pug' src='./custom-home-icons.pug'></template>

<script>
import Icon from 'components/icon/icon'
import Trigger from 'components/block/block-trigger/block-trigger'

export default {
  props: ['props'],
  data () {
    return {
      active: 0
    }
  },
  components: {
    Icon,
    Trigger
  }
}
</script>
