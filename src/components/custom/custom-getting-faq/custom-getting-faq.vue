<template lang='pug' src='./custom-getting-faq.pug'></template>

<script>
import { showAccordion } from '@/mixins.js'
import Trigger from 'components/block/block-trigger/block-trigger'

export default {
  props: ['props'],
  data () {
    return {
      active: 0
    }
  },
  mixins: [showAccordion],
  components: {
    Trigger
  }
}
</script>
