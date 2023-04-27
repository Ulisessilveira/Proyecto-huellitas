import { createApp } from 'vue'
import App from './App.vue'
import 'bootstrap/dist/css/bootstrap.css'
import 'bootstrap/dist/js/bootstrap.js'

import router from './routes'



const app = createApp(App)
app.use(router)
app.mount("#app")

//createApp(App).mount('#app').use(VueRoter)
