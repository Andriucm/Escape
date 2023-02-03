import './bootstrap';
import { createApp } from 'vue';
import Footer from './Footer.vue';
import partida1 from './juego1/Partida1.vue';
import { createPinia } from 'pinia';
import 'viewerjs/dist/viewer.css'
import VueViewer from 'v-viewer'



const appPartida1 = createApp(partida1);
const pinia = createPinia();
appPartida1.use(pinia);
appPartida1.use(VueViewer);
appPartida1.mount('#partida1');

createApp(Footer).mount('#footerSection');




