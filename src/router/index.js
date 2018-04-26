import Vue from 'vue'
import VueRouter from 'vue-router'
import Home from '@/pages/home/home'
// const AboutUs = () => import(/* webpackChunkName: "group" */ '@/pages/about-us/about-us')
import AboutUs from '@/pages/about-us/about-us'
import GettingStarted from '@/pages/getting-started/getting-started'
import Contact from '@/pages/contact/contact'
import PageNotFound from '@/pages/404/404'

Vue.use(VueRouter)

const scrollBehavior = function (to, from, savedPosition) {
  if (savedPosition) {
    return { x: 0, y: 0 }
  } else {
    const position = {}
    if (to.hash) {
      position.selector = to.hash
      position.offset = { x: 0, y: 200 }
      return position
    } else {
      position.x = 0
      position.y = 0
      return position
    }
  }
}

const router = new VueRouter({
  mode: 'history',
  scrollBehavior,
  routes: [
    {
      path: '/',
      name: 'home',
      navigation: false,
      component: Home
    },
    {
      path: '/about-us',
      name: 'about us',
      navigation: true,
      component: AboutUs
    },
    {
      path: '/getting-started',
      name: 'getting started',
      navigation: true,
      component: GettingStarted
    },
    {
      path: '/contact',
      name: 'contact',
      navigation: true,
      component: Contact,
      children: [
        {
          path: '/contact#form',
          name: 'contact form'
        }
      ]
    },
    {
      path: '/*',
      name: 'page-not-found',
      navigation: false,
      component: PageNotFound
    }
  ]
})

export default router
