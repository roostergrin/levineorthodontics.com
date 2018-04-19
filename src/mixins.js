export const openModal = {
  methods: {
    openModal () {
      this.$store.dispatch('VIEW_SHOWMODAL', true)
      this.$store.state.showModal ? document.body.classList.add('body-stop') : document.body.classList.remove('body-stop')
    }
  }
}

export const openNav = {
  data () {
    return {
      navActive: false
    }
  },
  methods: {
    openNav () {
      this.navActive = !this.navActive
      this.navActive ? document.body.classList.add('body-stop') : document.body.classList.remove('body-stop')
    }
  }
}
