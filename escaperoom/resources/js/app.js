import './bootstrap';
import { createApp } from 'vue';
import Header from './Header.vue';
import Footer from './Footer.vue'; //Ahí está el componente principal

createApp(Header).mount('#headerSection');

createApp(Footer).mount('#footerSection');