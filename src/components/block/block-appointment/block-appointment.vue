<template lang='pug' src='./block-appointment.pug'></template>

<script>
import { openModal } from '@/mixins.js'

export default {
  props: ['props'],
  mixins: [openModal]
}
</script>
