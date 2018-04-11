import Vue from 'vue'
import VueRouter from 'vue-router'
import Home from '@/pages/home/home'
// const AboutUs = () => import(/* webpackChunkName: "group" */ '@/pages/about-us/about-us')
import AboutUs from '@/pages/about-us/about-us'
import GettingStarted from '@/pages/getting-started/getting-started'
import Treatments from '@/pages/treatments/treatments'
import Invisalign from '@/pages/invisalign/invisalign'
import Contact from '@/pages/contact/contact'
import PageNotFound from '@/pages/404/404'

Vue.use(VueRouter)

const router = new VueRouter({
  mode: 'history',
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
      path: '/treatments',
      name: 'treatments',
      navigation: true,
      component: Treatments
    },
    {
      path: '/invisalign',
      name: 'invisalign',
      navigation: true,
      component: Invisalign
    },
    {
      path: '/contact',
      name: 'contact',
      navigation: true,
      component: Contact
    },
    {
      path: '/*',
      name: 'page-not-found',
      navigation: false,
      component: PageNotFound
    }
  ]
})

router.beforeEach((to, from, next) => {
  window.scrollTo(0, 0)
  next()
})

export default router
