window.axios = require('axios');
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

window.Vue = require('vue');
import App from "./views/App.vue";
// § Importo e utilizzo VueRouter
import VueRouter from 'vue-router';
window.Vue.use(VueRouter);

// ? Importo tutte le pagine del front-office che andrò a gestire con le rotte vue
import PostList from "./pages/PostList.vue";
import SinglePost from "./pages/SinglePost.vue";
import NotFound from "./pages/NotFound.vue";
import About from "./pages/About.vue";

// ? Costruisco tutte le rotte necessarie
const router = new VueRouter({
  // mode history serve ad aggiornare il link nella barra degli indirizzi al cambio della rotta
  mode: 'history',
  routes: [
    {
      path: '/',
      name: 'post-list',
      component: PostList
    },
    {
      path: '/about-us',
      name: 'about-us',
      component: About
    },
    {
      path: '/post/:id',
      name: 'post',
      component: SinglePost
    },
    {
      path: '*',
      name: 'not-found',
      component: NotFound
    },
  ]
});

const app = new Vue({
  el: '#root',
  router, // Utilizzo le rotte appena create
  render: h => h(App)
});
