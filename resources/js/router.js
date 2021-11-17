import Vue from 'vue';
import VueRouter from 'vue-router';
import store from './store'

/**
 * Admin Route
 */
import ViewBanner from './components/admin/banner/ViewBannerComponent.vue';
import ViewUser from './components/admin/user/ViewUserComponent.vue';
import Dashboard from './components/admin/DashboardComponent.vue';

/**
 * Signing Route
 */
import Login from './components/auth/LoginComponent.vue';
import Register from './components/auth/RegisterComponent.vue';

Vue.use(VueRouter);

const router = new VueRouter({
    linkExactActiveClass: 'active',
    routes: [
        {
            path: '/login',
            name: 'login',
            component: Login,
            meta: {
                middleware: "guest",
                title: 'Login'
            }
        },
        {
            path: '/register',
            name: 'register',
            component: Register,
            meta: {
                middleware: "guest",
                title: 'Register'
            }
        },
        {
            path: '/banner',
            name: 'banner',
            component: ViewBanner,
            meta: {
                middleware: "auth"
            }
        },
        {
            path: '/admin/user',
            name: 'admin-user',
            component: ViewUser,
            meta: {
                middleware: "auth"
            }
        },
        {
            path: '/admin',
            name: 'dashboard',
            component: Dashboard,
            meta: {
                middleware: "auth"
            }
        },
    ]
});

router.beforeEach((to, from, next) => {
    document.title = `${to.meta.title} - ${process.env.MIX_APP_NAME}`
    if(to.meta.middleware=="guest"){
        if(store.state.auth.authenticated){
            next({name:"dashboard"})
        }
        next()
    }else{
        if(store.state.auth.authenticated){
            next()
        }else{
            next({name:"login"})
        }
    }
})

export default router;