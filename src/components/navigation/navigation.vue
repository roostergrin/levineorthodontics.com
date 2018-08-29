<template lang='pug' src='./navigation.pug'></template>

<script>
import { showMenu, buttonOver } from '@/mixins'
import Icon from 'components/icon/icon'
import Modal from 'components/modal/modal-form-appointment/modal-form-appointment'

export default {
  mixins: [showMenu, buttonOver],
  computed: {
    props () {
      return this.$store.state.app.nav
    },
    links () {
      return this.$router.options.routes
    },
    images () {
      return this.$store.state.pages
    }
  },
  data () {
    return {
      activeSub: 0,
      call: false,
      menu: 'MENU'
    }
  },
  methods: {
    activate () {
      this.$store.state.nav ? this.$store.dispatch('VIEW_NAV', false) : this.$store.dispatch('VIEW_NAV', true)
      this.$store.state.nav ? this.showMenu(false) : this.showMenu()
      this.$store.state.nav ? this.menu = 'EXIT' : this.menu = 'MENU'
    },
    activeLinks (e) {
      this.activeSub = e
    },
    callFunc () {
      this.call ? this.call = false : this.call = true
    },
    modal (props) {
      this.$store.dispatch('VIEW_SHOWMODAL', 'appointment')
    }
  },
  components: {
    Icon,
    Modal
  }
}

</script>

<style>
.pages-home {
    overflow: hidden;
}
body .pages-home .custom-home-team-slider__col {
    width: 50%;
    float: left;
  flex: unset;
}
.navigation__body a span.subMenu_icon{display:none;}

@media only screen and (max-width: 1200px) {
  body .custom-home-contact__bg {min-height: 140vh;}  body .custom-home-contact__address {left: 30%; top:5%}  body .custom-home-contact__form {   top: 5%; left: 45%; transform: translateY(0%);} 
}

@media only screen and (max-width: 1024px) {
  .navigation__left .navigation__body a{position:relative;padding: 0 20px 0 0;display: block;}
  .navigation__left .navigation__body a span.subMenu_icon{display: inline-block;
    float:  right;width: 20px; height: 30px;
    text-align: center;position:absolute;right:0;top:0;
    z-index:999999;
  }
  .navigation__body a span.subMenu_icon i{font-size: 25px;line-height: 30px;
    font-weight: 700;
  }
}

@media only screen and (max-width: 800px) {
.custom-home-contact__address {left: 25%;} }

@media only screen and (max-width: 768px) { body .custom-home-contact__address { left: 0; top: 5%; position: relative; width: 100%; transform: translateX(0%); padding: 10px 0; } body .custom-home-contact__form {position: relative;     padding: 15px 0;
    margin: 15px auto; top:auto; left:auto; width: 80%;}
  
  
}
@media (max-width: 767px) {
 body .navigation__left {
  -ms-flex-preferred-size: 100%;
  flex-basis: 36%;
  width: 36%;
  padding-right: 1rem;
}
body .navigation__left .navigation__link{
  font-size: 18px;

}
body .navigation__right {

    -ms-flex-preferred-size: 100%;
    flex-basis: 57%;
    width: 50%;
    padding: 0 5px;

}
body .navigation__right .navigation__sublink {
  font-size: 16px;
}
body .navigation__right .navigation__body--right {
  left: 60px;
  width: 100%;
}
.navigation__left .navigation__body a span.subMenu_icon{height: 25px;}
.navigation__body a span.subMenu_icon i{font-size: 22px;line-height: 25px;}
} 
</style>
