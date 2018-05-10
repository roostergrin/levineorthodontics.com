const route = '//levineorthodontics.rgwplogin.com/wp-json'

const api = () => {
  return document.location.hostname === 'localhost' || document.location.href.indexOf('rgwplogin.com') > -1 ? route : document.location.origin + '/wp-json'
}

export default api()
