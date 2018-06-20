<template lang="pug" src="./modal-form-appointment.pug"></template>

<script>
import Form from 'components/form/form-appointment/form-appointment'

export default {
  computed: {
    props () {
      return this.$store.state.app['form-appointment'].acf.form_appointment
    },
    info () {
      return this.$store.state.app.footer.acf
    }
  },
  components: {
    Form
  }
}
</script>
