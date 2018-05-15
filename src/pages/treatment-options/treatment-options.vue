<template lang="pug" src="./treatment-options.pug"></template>

<script>
import Loader from 'components/loader/loader'
import Hero from 'components/hero/hero'
import BlockText from 'components/block/block-text/block-text'
import CustomPatientInfoSection from 'components/custom/custom-patient-info-section/custom-patient-info-section'
import DividerTextButton from 'components/divider/divider-text-button/divider-text-button'
import RepeaterSectionsImage from 'components/repeater/repeater-sections-image/repeater-sections-image'

export default {
  computed: {
    props () {
      return this.$store.state.pages['treatment-options']
    }
  },
  components: {
    Loader,
    Hero,
    BlockText,
    CustomPatientInfoSection,
    DividerTextButton,
    RepeaterSectionsImage
  }
}
</script>
