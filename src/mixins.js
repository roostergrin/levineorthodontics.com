export const openModal = {
  methods: {
    openModal () {
      this.$store.dispatch('VIEW_MODAL', true)
      this.$store.state.showModal ? document.body.classList.add('body-stop') : document.body.classList.remove('body-stop')
    }
  }
}
