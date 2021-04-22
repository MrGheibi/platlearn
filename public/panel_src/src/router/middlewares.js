// router/middlewares.js
/**
 * Auth middleware example.
 */
export function auth (/* { to, from, next, store } */ { next, store }) {
  const urlParams = new URLSearchParams(window.location.search)
  const queryToken = urlParams.get('token')
  const queryStatus = Boolean(urlParams.get('status'))

  const checkNotStorage = localStorage.token === undefined || localStorage.token === ''
  const checkNotQueryToken = !queryToken || queryToken.length < 82 || !queryStatus
  if (checkNotStorage && checkNotQueryToken) {
    window.location.href = process.env.api + 'signin'
  }

  return next()
}
