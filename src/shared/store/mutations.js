import { GET_PAGES, GET_APP, SCROLLED_NAV, VIEW_NAV, VIEW_BODY, VIEW_TYPES, VIEW_SHOWMODAL, VIEW_MODALCONTENT } from './mutation-types.js'

const mutations = {
  [GET_PAGES] (state, data) {
    state.pages = data
    state.loading = false
  },
  // [GET_BLOG] (state, data) {
  //   state.blog = data
  //   state.blog.current_page = {}
  //   state.blog.current_page.number = 1
  //   state.loading = false
  // },
  [GET_APP] (state, data) {
    state.app = data
  },
  [SCROLLED_NAV] (state, data) {
    state.scrolled = data
  },
  [VIEW_NAV] (state, data) {
    state.nav = data
    state.nav ? document.querySelector('body').classList.add('open') : document.querySelector('body').classList.remove('open')
  },
  [VIEW_BODY] (state, data) {
    state.body = data
  },
  [VIEW_TYPES] (state, data) {
    state.types = data
  },
  [VIEW_SHOWMODAL] (state, data) {
    state.showModal = data
    state.showModal ? document.querySelector('body').classList.add('open') : document.querySelector('body').classList.remove('open')
  },
  [VIEW_MODALCONTENT] (state, data) {
    state.modalContent = data
  }
}

export default mutations
