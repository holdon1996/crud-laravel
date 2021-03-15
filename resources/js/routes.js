/* eslint-disable linebreak-style */
/* eslint-disable import/prefer-default-export */
import AllProduct from './components/AllProduct.vue';
import EditProduct from './components/EditProduct.vue';
import CreateProduct from './components/CreateProduct.vue';

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
  {
    name: 'add',
    path: '/add',
    component: CreateProduct,
  },
];
