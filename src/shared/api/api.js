const route = '//api-v2.roostertest3.com/wp-json'

const api = () => {
  return document.location.hostname === 'localhost' || document.location.href.indexOf('roostertest3') > -1 ? route : document.location.origin + '/wp-json'
}

export default api()
