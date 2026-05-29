<template lang='pug' src='./hero.pug'></template>

<script>
import Icon from 'components/icon/icon'

export default {
  props: ['props'],
  data () {
    return {
      loaded: false,
      secondarySlideTimer: null,
      secondarySlideLoadHandler: null,
      secondarySlidesLoaded: false,
      homeSlides: [
        {
          image: '/static/home.jpg',
          webp: '/static/home.webp',
          alt: '',
          width: 1024,
          height: 683
        },
        {
          image: '/static/HERO2.jpg',
          webp: '/static/HERO2.webp',
          alt: '',
          width: 1440,
          height: 960
        },
        {
          image: '/static/HERO3.jpg',
          webp: '/static/HERO3.webp',
          alt: '',
          width: 1440,
          height: 960
        },
        {
          image: '/static/HERO4.jpg',
          webp: '/static/HERO4.webp',
          alt: '',
          width: 1440,
          height: 960
        },
        {
          image: '/static/HERO5.jpg',
          webp: '/static/HERO5.webp',
          alt: '',
          width: 1440,
          height: 960
        }
      ],
      swiperOption: {
        loop: true,
        autoplay: {
          delay: 4000
        },
        navigation: {
          nextEl: '.hero__slide-button-next',
          prevEl: '.hero__slide-button-prev'
        }
      }
    }
  },
  async created () {
    setTimeout(() => { this.loaded = true }, 500)
  },
  mounted () {
    this.scheduleSecondarySlides()
  },
  beforeDestroy () {
    if (this.secondarySlideTimer) clearTimeout(this.secondarySlideTimer)
    if (this.secondarySlideLoadHandler) window.removeEventListener('load', this.secondarySlideLoadHandler)
  },
  methods: {
    shouldLoadSlide (index) {
      return index === 0 || this.secondarySlidesLoaded
    },
    scheduleSecondarySlides () {
      const loadSlides = () => {
        this.secondarySlideTimer = setTimeout(() => {
          this.secondarySlidesLoaded = true
          this.$nextTick(this.updateSwiper)
        }, 1200)
      }

      if (document.readyState === 'complete') {
        loadSlides()
      } else {
        this.secondarySlideLoadHandler = () => {
          window.removeEventListener('load', this.secondarySlideLoadHandler)
          this.secondarySlideLoadHandler = null
          loadSlides()
        }
        window.addEventListener('load', this.secondarySlideLoadHandler)
      }
    },
    updateSwiper () {
      const swiper = this.$refs.heroSwiper && this.$refs.heroSwiper.swiper
      if (!swiper) return
      if (swiper.reLoop) swiper.reLoop()
      if (swiper.update) swiper.update(true)
    },
    changeNav ({ direction, going }) {
      going === 'in' && direction !== 'top' ? this.$store.dispatch('SCROLLED_NAV', false) : this.$store.dispatch('SCROLLED_NAV', true)
    }
  },
  components: {
    Icon
  }
}
</script>
