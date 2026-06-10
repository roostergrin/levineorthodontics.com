import Vue from 'vue'
import VueRouter from 'vue-router'
import Home from '@/pages/home/home'
const PatientInfo = () => import(/* webpackChunkName: "patient-info" */ '@/pages/patient-info/patient-info')
const TreatmentOptions = () => import(/* webpackChunkName: "treatment-options" */ '@/pages/treatment-options/treatment-options')
const Contact = () => import(/* webpackChunkName: "contact-us" */ '@/pages/contact-us/contact-us')
const Promo = () => import(/* webpackChunkName: "promo" */ '@/pages/promo/promo')
const ThankYou = () => import(/* webpackChunkName: "thank-you" */ '@/pages/thank-you/thank-you')
const ThankYouContact = () => import(/* webpackChunkName: "thankyou" */ '@/pages/thankyou/thankyou')
const AccessibilityStatement = () => import(/* webpackChunkName: "policies" */ '@/pages/accessibility-statement/accessibility-statement')
const PrivacyPolicy = () => import(/* webpackChunkName: "policies" */ '@/pages/privacy-policy/privacy-policy')
const Termsofuse = () => import(/* webpackChunkName: "policies" */ '@/pages/terms-of-use/terms-of-use')
const HipaaPrivacySupplement = () => import(/* webpackChunkName: "policies" */ '@/pages/hipaa-privacy-supplement/hipaa-privacy-supplement')
const CookieNotice = () => import(/* webpackChunkName: "policies" */ '@/pages/cookie-notice/cookie-notice')
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
      image: '/static/home.webp'
    },
    {
      path: '/patient-info',
      name: 'patient info',
      navigation: true,
      component: PatientInfo,
      image: '/static/patient_info.webp',
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
        }
        // {
        //   path: '/patient-info#eating-with-braces',
        //   name: 'Eating with Braces'
        // }
      ]
    },
    {
      path: '/promo',
      name: 'Promo',
      navigation: false,
      component: Promo,
      image: '/static/patient_info.webp',
      children: [
        {
          path: '/promo#book-free',
          name: 'Book a FREE'
        },
        {
          path: '/promo#consultation-today',
          name: 'Consultation Today'
        },
        {
          path: '/promo#terms',
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
      image: '/static/treatment_options.webp',
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
      image: '/static/hero-home-3.webp'
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
