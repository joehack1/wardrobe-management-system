
import { createRouter, createWebHistory } from 'vue-router';
import Login from '../views/Login.vue';
import Register from '../views/Register.vue';
import ClothingItemList from '../views/ClothingItemList.vue';

const routes = [
    { path: '/', component: ClothingItemList },
    { path: '/login', component: Login },
    { path: '/register', component: Register },
];

const router = createRouter({
    history: createWebHistory(),
    routes,
});

export default router;

