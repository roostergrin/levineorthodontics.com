const route = '//localhost:8888/wp-json'

const api = () => {
  return document.location.hostname === 'localhost' || document.location.href.indexOf('roostertest3') > -1 ? route : document.location.origin + '/wp-json'
}

export default api()
