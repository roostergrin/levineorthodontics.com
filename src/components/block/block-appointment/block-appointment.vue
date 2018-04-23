<template lang='pug' src='./block-appointment.pug'></template>

<script>
import { showModal } from '@/mixins.js'

export default {
  props: ['props'],
  mixins: [showModal]
}
</script>
