import { createApp } from 'vue'
import App from './App.vue'
import 'bootstrap/dist/css/bootstrap.css'
import 'bootstrap/dist/js/bootstrap.js'

import './assets/css/bootstrap.min.css'
import './assets/css/font-awesome.min.css'
import './assets/css/elegant-icons.css'
import './assets/css/nice-select.css'
//import './assets/css/jquery-ui.min.css'
//import './assets/css/owl.carousel.min.css'
import './assets/css/slicknav.min.css'
import './assets/css/style.css'

//import './assets/js/jquery-3.3.1.min.js'
//import './assets/js/bootstrap.min.js'
//import './assets/js/jquery.nice-select.min.js'
//import './assets/js/jquery-ui.min.js'
//import './assets/js/jquery.slicknav.j'
//import './assets/js/mixitup.min.js'
//import './assets/js/owl.carousel.min.js'
//import './assets/js/main.js'

import router from './routes'



const app = createApp(App)
app.use(router)
app.mount("#app")

//createApp(App).mount('#app').use(VueRoter)
