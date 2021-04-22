import { auth, login } from './middlewares'

const routes = [
  {
    path: '/',
    component: () => import('layouts/MainLayout.vue'),
    children: [
      {
        path: '',
        component: () => import('pages/Index.vue'),
        meta: {
          middlewares: [auth]
        }
      },
      {
        path: '/categories',
        component: () => import('pages/Categories/IndexCategory'),
        meta: {
          middlewares: [auth]
        }
      }
    ]
  },
  {
    path: '/auth/login',
    name: 'login',
    component: () => import('pages/auth/Login'),
    meta: {
      middlewares: [login]
    }
  },
  // Always leave this as last one,
  // but you can also remove it
  {
    path: '*',
    component: () => import('pages/Error404.vue')
  }
]

export default routes
