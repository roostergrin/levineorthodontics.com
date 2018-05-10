import Vue from 'vue'
import VueRouter from 'vue-router'
import Home from '@/pages/home/home'
// const AboutUs = () => import(/* webpackChunkName: "group" */ '@/pages/about-us/about-us')
// import AboutUs from '@/pages/about-us/about-us'
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
      navigation: true,
      component: Home
    },
    {
      path: '/patient-info',
      name: 'Patient Info',
      navigation: true,
      component: PatientInfo,
      children: [
        {
          path: '/patient-info#new-patients',
          name: 'New Patients'
        },
        {
          path: '/patient-info#orthofi',
          name: 'OrthoFi'
        },
        {
          path: '/patient-info#orthodontic-care',
          name: 'Orthodontic Care'
        },
        {
          path: '/patient-info#eating-with-braces',
          name: 'Eating with Braces'
        }
      ]
    },
    {
      path: '/treatment-options',
      name: 'Treatment Options',
      navigation: true,
      component: TreatmentOptions,
      children: [
        {
          path: '/treatment-options#damon-system',
          name: 'Damon System'
        },
        {
          path: '/treatment-options#damon-clear',
          name: 'Damon Clear'
        },
        {
          path: '/treatment-options#invisalign',
          name: 'Invisalign'
        },
        {
          path: '/treatment-options#lingual-braces',
          name: 'Lingual Braces'
        },
        {
          path: '/treatment-options#accelerated-orthodontics',
          name: 'Accelerated Orthodontics'
        },
        {
          path: '/treatment-options#transfer-cases',
          name: 'Transfer Cases'
        }
      ]
    },
    {
      path: '/contact-us',
      name: 'Contact Us',
      navigation: true,
      component: Contact
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
