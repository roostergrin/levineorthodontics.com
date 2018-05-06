<template lang='pug' src='./home.pug'></template>

<script>
import Loader from 'components/loader/loader'
import Hero from 'components/hero/hero'
import BlockText from 'components/block/block-text/block-text'
import CustomHomeDoctor from 'components/custom/custom-home-doctor/custom-home-doctor'
import TabHomeTeam from 'components/tab/tab-home-team/tab-home-team'
import CustomContact from 'components/custom/custom-contact/custom-contact'

export default {
  name: 'home',
  computed: {
    props () {
      return this.$store.state.pages.home
    },
    loading () {
      return this.$store.state.loading
    }
  },
  components: {
    Hero,
    Loader,
    BlockText,
    CustomHomeDoctor,
    TabHomeTeam,
    CustomContact
  }
}
</script>
