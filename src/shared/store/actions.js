import axios from 'axios'
import api from 'api'
import {
  GET_PAGES,
  // GET_BLOG,
  GET_APP,
  SCROLLED_NAV,
  VIEW_NAV,
  VIEW_BODY,
  VIEW_TYPES,
  VIEW_SHOWMODAL,
  VIEW_MODALCONTENT
} from './mutation-types'

const inlineState = (typeof window !== 'undefined' && window.__INITIAL_STATE__) || {}

const keyBySlug = (items) => items.reduce(
  (allData, data) => ({ ...allData, [data.slug]: data }),
  {}
)

const actions = {
  GET_PAGES ({ commit }) {
    if (Array.isArray(inlineState.pages) && inlineState.pages.length) {
      commit(GET_PAGES, keyBySlug(inlineState.pages))
      return
    }
    (async () => {
      try {
        const response = await axios.get(`${api}/wp/v2/pages?per_page=100&_fields=slug,acf`)
        commit(GET_PAGES, keyBySlug(response.data))
      } catch (e) {
        console.log('PAGES API: ' + e)
      }
    })()
  },
  GET_APP ({ commit }) {
    if (Array.isArray(inlineState.app) && inlineState.app.length) {
      commit(GET_APP, keyBySlug(inlineState.app))
      return
    }
    (async () => {
      try {
        const response = await axios.get(`${api}/wp/v2/app?_fields=slug,acf`)
        commit(GET_APP, keyBySlug(response.data))
      } catch (e) { console.log('APP API: ' + e) }
    })()
  },
  // GET_BLOG ({ commit }) {
  //   (async () => {
  //     try {
  //       const response = await axios.get(`${api}/wp/v2/posts?per_page=10&_embed`)
  //       commit(GET_BLOG, response)
  //     } catch (e) {
  //       console.log(e)
  //     }
  //   })()
  // },
  SCROLLED_NAV ({ commit }, data) {
    commit(SCROLLED_NAV, data)
  },
  VIEW_NAV ({ commit }, data) {
    commit(VIEW_NAV, data)
  },
  VIEW_BODY ({ commit }, data) {
    commit(VIEW_BODY, data)
  },
  VIEW_TYPES ({ commit }, data) {
    commit(VIEW_TYPES, data)
  },
  VIEW_SHOWMODAL ({ commit }, data) {
    commit(VIEW_SHOWMODAL, data)
  },
  VIEW_MODALCONTENT ({ commit }, data) {
    commit(VIEW_MODALCONTENT, data)
  }
}

export default actions
