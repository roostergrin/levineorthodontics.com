import Vue from 'vue'
import VueRouter from 'vue-router'
import Home from '@/pages/home/home'
// const AboutUs = () => import(/* webpackChunkName: "group" */ '@/pages/about-us/about-us')
import AboutUs from '@/pages/about-us/about-us'
import PatientInfo from '@/pages/patient-info/patient-info'
import TreatmentOptions from '@/pages/treatment-options/treatment-options'
import Contact from '@/pages/contact-us/contact-us'
import PageNotFound from '@/pages/404/404'

Vue.use(VueRouter)

const scrollBehavior = (to, from, savedPosition) => {
  if (savedPosition) {
    return { x: 0, y: 0 }
  } else {
    if (to.hash) {
      return {
        selector: to.hash,
        offset: { x: 0, y: 200 }
      }
    } else {
      return {
        x: 0,
        y: 0
      }
    }
  }
}

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
      name: 'About Us',
      navigation: true,
      component: AboutUs
    },
    {
      path: '/patient-info',
      name: 'Patient Info',
      navigation: true,
      component: PatientInfo
    },
    {
      path: '/treatment-options',
      name: 'Treatment Options',
      navigation: true,
      component: TreatmentOptions
    },
    {
      path: '/contact-us',
      name: 'Contact Us',
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
  ],
  scrollBehavior
})

export default router
