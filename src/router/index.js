import Vue from 'vue'
import VueRouter from 'vue-router'
import Home from '@/pages/home/home'
// const AboutUs = () => import(/* webpackChunkName: "group" */ '@/pages/about-us/about-us')
// import AboutUs from '@/pages/about-us/about-us'
import PatientInfo from '@/pages/patient-info/patient-info'
import TreatmentOptions from '@/pages/treatment-options/treatment-options'
import Contact from '@/pages/contact-us/contact-us'
import PageNotFound from '@/pages/404/404'
import VueScrollTo from 'vue-scrollto'

Vue.use(VueRouter)

const scrollBehavior = function (to, from, savedPosition) {
  if (savedPosition) {
    return { x: 0, y: 0 }
  } else {
    if (to.hash) {
      VueScrollTo.scrollTo(to.hash, { offset: -400, easing: 'ease-in-out' })
    } else {
      return { x: 0, y: 0 }
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
      component: Home,
      image: '/static/home.jpg'
    },
    {
      path: '/patient-info',
      name: 'patient info',
      navigation: true,
      component: PatientInfo,
      image: '/static/patient_info.jpg',
      children: [
        {
          path: '/patient-info#new-patients',
          name: 'new patients'
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
        },
        {
          path: '/patient-info#events',
          name: 'Events'
        }
      ]
    },
    {
      path: '/treatment-options',
      name: 'Treatment Options',
      navigation: true,
      component: TreatmentOptions,
      image: '/static/treatment_options.jpg',
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
          path: '/treatment-options#invisalign-teen',
          name: 'Invisalign Teen'
        },
        {
          path: '/treatment-options#accelerated-orthodontics',
          name: 'Accelerated Orthodontics'
        },
        {
          path: '/treatment-options#insignia',
          name: 'Insignia'
        }
      ]
    },
    {
      path: '/contact-us',
      name: 'Contact Us',
      navigation: true,
      component: Contact,
      image: '/static/contact_us.jpg'
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
