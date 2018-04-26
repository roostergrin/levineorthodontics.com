export const showModal = {
 methods: {
   showModal () {
     this.$store.dispatch('VIEW_SHOWMODAL', true)
     this.$store.state.showModal ? document.body.classList.add('body-stop') : document.body.classList.remove('body-stop')
   }
 }
}

export const closeModal = {
 methods: {
   closeModal () {
     this.$store.dispatch('VIEW_SHOWMODAL', false)
     document.body.classList.remove('body-stop')
   }
 }
}

export const trigger = {
 methods: {
   scrollOut () {
     this.$store.dispatch('VIEW_NAV', true)
   },
   scrollIn () {
     this.$store.dispatch('VIEW_NAV', false)
   }
 }
}
