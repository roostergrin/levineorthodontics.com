<template lang='pug' src='./custom-getting-faq.pug'></template>

<script>
import { showAccordion } from '@/mixins.js'

export default {
  props: ['props'],
  mixins: [showAccordion]
}
</script>
