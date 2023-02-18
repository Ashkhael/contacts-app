import { createApp } from "vue"
import App from "./App.vue"
import router from "./router"

// Import Bootstrap and BootstrapVue CSS files
import '../node_modules/bootstrap/dist/css/bootstrap.css'
import '../node_modules/bootstrap/dist/js/bootstrap.bundle'
import '../node_modules/bootstrap-icons/font/bootstrap-icons.css';

let app = createApp(App);
app.use(router);
app.mount("#app");

