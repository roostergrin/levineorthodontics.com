<template lang="pug" src="./custom-home-team-slider.pug"></template>

<script>
export default {
  props: ['props'],
  data () {
    return {
      sliderOptions: {
        loop: true,
        autoplay: {
          delay: 3000
        },
        effect: 'fade',
        navigation: {
          nextEl: '.custom-home-office-tour__button-next',
          prevEl: '.custom-home-office-tour__button-prev'
        }
      }
    }
  }
}
</script>
