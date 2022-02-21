require('./bootstrap');




import storeData from './storeData';

const store = Vuex.createStore(storeData)



import { routes } from './routes';

const router = VueRouter.createRouter({
    history: VueRouter.createWebHistory(),
    routes
});

router.beforeEach((to, from, next) => {
    document.title = "Shanto" + " | " + to.meta.title;
    next();
});



const app = Vue.createApp({})



app.component('Admin', require('../components/backEnd/master/index').default)
app.use(store)
app.use(router)
app.mount('#app')


