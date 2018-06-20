<template lang="pug" src="./custom-home-office-tour.pug"></template>

<script>
import Icon from 'components/icon/icon'

export default {
  props: ['props'],
  data () {
    return {
      sliderOptions: {
        loop: true,
        autoplay: {
          delay: 4000
        },
        effect: 'fade',
        navigation: {
          nextEl: '.custom-home-office-tour__button-next',
          prevEl: '.custom-home-office-tour__button-prev'
        }
      }
    }
  },
  components: {
    Icon
  }
}
</script>
