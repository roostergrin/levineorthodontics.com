<template lang="pug" src="./custom-home-contact.pug"></template>

<script>
import ContactForm from 'components/form/form-home-contact/form-home-contact'
import { lazyLoadWhenVisible } from '@/mixins'

export default {
  props: ['props'],
  mixins: [lazyLoadWhenVisible],
  components: {
    ContactForm
  }
}
</script>
