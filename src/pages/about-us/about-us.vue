<template lang='pug' src='./about-us.pug'></template>

<script>
import AboutDoctor from 'components/custom/custom-about-doctor/custom-about-doctor'
import AboutLogos from 'components/custom/custom-about-logos/custom-about-logos'
import AboutOffice from 'components/custom/custom-about-office/custom-about-office'
import AboutStaff from 'components/custom/custom-about-team/custom-about-team'
import BlockAppt from 'components/block/block-appointment/block-appointment'
import BlockHeader from 'components/block/block-header/block-header'
import Loader from 'components/loader/loader'

export default {
  name: 'about-us',
  computed: {
    props () {
      return this.$store.state.pages['about-us']
    },
    loading () {
      return this.$store.state.loading
    }
  },
  components: {
    AboutDoctor,
    AboutLogos,
    AboutOffice,
    AboutStaff,
    BlockAppt,
    BlockHeader,
    Loader
  }
}
</script>
