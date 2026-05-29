<template lang="pug" src="./block-fullwidth-text.pug"></template>

<script>
export default {
  props: ['props'],
  data () {
    return {
      active: false
    }
  },
  mounted () {
    this.promoteFirstHeading()
  },
  updated () {
    this.promoteFirstHeading()
  },
  methods: {
    change ({ direction, going }) {
      going === 'in' ? this.active = true : ''
    },
    promoteFirstHeading () {
      const mediaBody = this.$refs.mediaBody
      if (!mediaBody) return

      const heading = mediaBody.querySelector('h1, h2, h3, h4, h5, h6')
      if (!heading || heading.tagName.toLowerCase() === 'h1') return

      const h1 = document.createElement('h1')
      Array.prototype.slice.call(heading.attributes).forEach(attribute => {
        h1.setAttribute(attribute.name, attribute.value)
      })

      while (heading.firstChild) {
        h1.appendChild(heading.firstChild)
      }

      heading.parentNode.replaceChild(h1, heading)
    }
  }
}
</script>
