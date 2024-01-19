function setGACookie(preference) {
  document.cookie = "AllowGA=" + preference + ";path=/";
  if (preference === true) {
    setupGA();
  } else {
    removeGA();
  }
  hideCookieBanner();
}

function getGACookie() {
  const name = "AllowGA"
  const cookieArr = document.cookie.match(new RegExp("(^| )" + name + "=([^;]+)"));

  if (cookieArr && cookieArr.length > 0) {
    return cookieArr[2]
  }

  return false
}

function setupGA() {
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-JXQ40Y6X59');
}

function removeGA() {
  const cookies = document.cookie.split(";")

  cookies.forEach(function (cookie) {
    const cookieName = cookie.split("=")[0]
    if (cookieName.trim().startsWith('_ga')) {
      document.cookie = cookieName + "=; Path=/; Expires=Thu, 01 Jan 1970 00:00:01 GMT;";
      document.cookie = cookieName + "=; Path=/; Expires=Thu, 01 Jan 1970 00:00:01 GMT; Domain=.vanitabarrett.co.uk";
    }
  })
}

function hideCookieBanner() {
  const banner = document.getElementById('js-cookieBanner')

  if (banner) {
    banner.remove()
  }

  const wrapper = document.getElementById('js-wrapper')

  if (wrapper) {
    wrapper.classList.remove('wrapper--cookie')
  }
}

function showCookieBanner() {
  const banner = document.getElementById('js-cookieBanner')

  if (banner) {
    banner.removeAttribute('hidden')
  }

  const wrapper = document.getElementById('js-wrapper')

  if (wrapper) {
    wrapper.classList.add('wrapper--cookie')
  }
}

if (getGACookie() === 'true' || getGACookie() === 'false') {
  hideCookieBanner()
} else {
  showCookieBanner()
}
