import Vue from 'vue';
import VueRouter from 'vue-router';

import Login from './components/auth/LoginComponent.vue';
import Register from './components/auth/RegisterComponent.vue';

Vue.use(VueRouter);

const router = new VueRouter({
    mode: 'history',
    linkExactActiveClass: 'active',
    routes: [
        {
            path: '/login',
            name: 'login',
            component: Login
        },
        {
            path: '/register',
            name: 'register',
            component: Register
        },
    ]
});

export default router;