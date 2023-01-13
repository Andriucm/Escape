import './bootstrap';
import { createApp } from 'vue';
import Header from './Header.vue';
import Footer from './Footer.vue';

createApp(Header).mount('#headerSection');

createApp(Footer).mount('#footerSection');
