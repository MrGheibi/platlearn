// router/middlewares.js
// eslint-disable-next-line no-unused-vars
function redirectTo404 () {
  window.location.href = process.env.api + '404'
}
function checkNotToken (token) {
  return token === undefined || token < 82
}

const levelStorage = localStorage.platlearn
const TokenAdminStorage = localStorage.tokenAdmin
const TokenUserStorage = localStorage.token

const urlParams = new URLSearchParams(window.location.search)
const queryToken = urlParams.get('tokenAdmin')
const queryStatus = Boolean(urlParams.get('status'))

// checker Var
const checkNotTokenAdmin = checkNotToken(TokenAdminStorage)
const checkNotTokenUser = checkNotToken(TokenUserStorage)
const checkNotLevel = levelStorage === undefined || levelStorage < 10
const checkNotQueryToken = !queryToken || queryToken.length < 82 || !queryStatus

/**
 * Auth middleware example.
 */
export function auth (/* { to, from, next, store } */ { next, store }) {
  // check app is debug mode
  if (process.env.app_debug) {
    if (checkNotQueryToken) {
      if (checkNotTokenAdmin) {
        redirectTo404()
      }
    }
  }

  // check app is server mode and is Admin
  if (!process.env.app_debug) {
    if (checkNotQueryToken) {
      if (checkNotTokenAdmin || checkNotTokenUser || checkNotLevel) {
        redirectTo404()
      }
    }
  }

  return next()
}
export function login (/* { to, from, next, store } */ { next, store }) {
  if (process.env.app_debug) {
    return next()
  }
  //
  if (checkNotTokenUser || checkNotLevel) {
    redirectTo404()
  }
  return next()
}
