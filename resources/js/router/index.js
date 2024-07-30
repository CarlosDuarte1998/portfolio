import { createRouter, createWebHistory } from 'vue-router';

const routes = [
  {
    path: '/',
    name: 'Home',
    component: () => import('../Pages/Home.vue')
  },
  {
    path: '/admin',
    name: 'Home',
    component: () => import('../Pages/Admin.vue')
  }
];

const router = createRouter({
  history: createWebHistory(),
  routes,
});

export default router;