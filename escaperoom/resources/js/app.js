import './bootstrap';
import { createApp } from 'vue/dist/vue.esm-bundler';
import App from './App.vue';
import Footer from './Footer.vue'; //Ahí está el componente principal

createApp(App).mount('#headerSection');

createApp(Footer).mount('#footerSection');