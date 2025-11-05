import Vue from 'vue'
import VueRouter from 'vue-router'
import Home from '@/pages/home/home'
// const AboutUs = () => import(/* webpackChunkName: "group" */ '@/pages/about-us/about-us')
import PatientInfo from '@/pages/patient-info/patient-info'
import TreatmentOptions from '@/pages/treatment-options/treatment-options'
import Contact from '@/pages/contact-us/contact-us'
import ThankYou from '@/pages/thank-you/thank-you'
import ThankYouContact from '@/pages/thankyou/thankyou'
import AccessibilityStatement from '@/pages/accessibility-statement/accessibility-statement'
import PrivacyPolicy from '@/pages/privacy-policy/privacy-policy'
import Termsofuse from '@/pages/terms-of-use/terms-of-use'
import HipaaPrivacySupplement from '@/pages/hipaa-privacy-supplement/hipaa-privacy-supplement'
import CookieNotice from '@/pages/cookie-notice/cookie-notice'
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
          path: '/patient-info#consultation-today',
          name: 'Book a FREE'
        },
        {
          path: '/patient-info#new-patients',
          name: 'Consultation Today'
        },
        {
          path: '/patient-info#orthofi',
          name: 'Terms & Conditions'
        }
        // {
        //   path: '/patient-info#eating-with-braces',
        //   name: 'Eating with Braces'
        // }
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
          path: '/treatment-options#damon-system',
          name: 'Damon System'
        },
        {
          path: '/treatment-options#damon-clear',
          name: 'Damon Clear'
        }
      ]
    },
    {
      path: '/contact-us',
      name: 'Contact Us',
      navigation: true,
      component: Contact,
      image: '/static/hero-home-3.jpg'
    },
    {
      path: '/thank-you',
      name: 'Thank You',
      navigation: false,
      component: ThankYouContact
    },
    {
      path: '/thank-you',
      name: 'Thank You',
      navigation: false,
      component: ThankYou
    },
    {
      path: '/privacy-policy',
      name: 'Privacy Policy',
      navigation: false,
      component: PrivacyPolicy
    },
    {
      path: '/hipaa-privacy-supplement',
      name: 'Hipaa Privacy Supplement',
      navigation: false,
      component: HipaaPrivacySupplement
    },
    {
      path: '/cookie-notice',
      name: 'Cookie Notice',
      navigation: false,
      component: CookieNotice
    },
    {
      path: '/terms-of-use',
      name: 'Terms of Use',
      navigation: false,
      component: Termsofuse
    },
    {
      path: '/accessibility-statement',
      name: 'Accessibility Statement',
      navigation: false,
      component: AccessibilityStatement
    },
    {
      path: '/*',
      name: 'home',
      navigation: false,
      component: Home
    }
  ],
  scrollBehavior
})

export default router
