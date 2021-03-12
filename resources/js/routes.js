/* eslint-disable import/prefer-default-export */
import AllProduct from './components/AllProduct.vue';
import EditProduct from './components/EditProduct.vue';

export const routes = [
  {
    name: 'home',
    path: '/',
    component: AllProduct,
  },
  {
    name: 'edit',
    path: '/edit/:id',
    component: EditProduct,
  },
];
