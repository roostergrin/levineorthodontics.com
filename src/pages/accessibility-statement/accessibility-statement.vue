<template lang='pug' src='./accessibility-statement.pug'></template>

<script>
import Loader from 'components/loader/loader'

export default {
  name: 'accessibility-statement',
  computed: {
    props () {
      return this.$store.state.pages['thank-you']
    },
    loading () {
      return this.$store.state.loading
    }
  },
  components: {
    Loader
  },
  data () {
    return {
      companyName: 'Levine Orthodontics', // Fill this in
      domain: "<a href='https://levineorthodontics.com'>levineorthodontics.com</a>", // Fill this in
      email: "<a href='mailto:info@levineorthodontics.com'>info@levineorthodontics.com</a>", // Fill this in
      phone: "<a href='tel:781-860-9473'>781-860-9473</a>", // Fill this in
      formattedEmail: ''
    }
  },
  mounted () {
    this.formatEmail()
  },
  methods: {
    formatEmail () {
      this.formattedEmail = '<a aria-label="email ' + this.email + '" href="mailto:' + this.email + '">' + this.email + '</a>'
    }
  }
}
</script>
