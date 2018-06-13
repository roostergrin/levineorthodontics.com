<template lang='pug' src='./home.pug'></template>

<script>
import Loader from 'components/loader/loader'
import Hero from 'components/hero/hero'
import BlockText from 'components/block/block-text/block-text'
import CustomHomeDoctor from 'components/custom/custom-home-doctor/custom-home-doctor'
import TabHomeTeam from 'components/tab/tab-home-team/tab-home-team'
import BlockTextButton from 'components/block/block-text-button/block-text-button'
import CustomHomeContact from 'components/custom/custom-home-contact/custom-home-contact'
import Modal from 'components/modal/modal'

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
    BlockTextButton,
    CustomHomeContact,
    Modal
  }
}
</script>
