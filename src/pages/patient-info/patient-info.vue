<template lang='pug' src='./patient-info.pug'></template>

<script>
import Loader from 'components/loader/loader'
import Hero from 'components/hero/hero'
import BlockText from 'components/block/block-text/block-text'
import CustomPatientVideos from 'components/custom/custom-patient-videos/custom-patient-videos'
import CustomPatientInfoSection from 'components/custom/custom-patient-info-section/custom-patient-info-section'
import DividerTextButton from 'components/divider/divider-text-button/divider-text-button'
import RepeaterSectionsImage from 'components/repeater/repeater-sections-image/repeater-sections-image'

export default {
  name: 'getting-started',
  computed: {
    props () {
      return this.$store.state.pages['patient-info']
    },
    loading () {
      return this.$store.state.loading
    }
  },
  components: {
    Hero,
    Loader,
    BlockText,
    CustomPatientVideos,
    CustomPatientInfoSection,
    DividerTextButton,
    RepeaterSectionsImage
  }
}
</script>
