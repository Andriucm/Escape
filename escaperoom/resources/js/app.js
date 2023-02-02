import './bootstrap';
import { createApp } from 'vue';
import Footer from './Footer.vue';
import CarouselPista from './juego1/Carousel.vue';
// import lvl1 from './juego1/Nivel1.vue';
// import nar1 from './juego1/Narrativa.vue';
// import nav from './juego1/Nav.vue';
import partida1 from './juego1/Partida1.vue';
import 'viewerjs/dist/viewer.css'
import VueViewer from 'v-viewer'

createApp(partida1).mount('#partida1');
createApp(Footer).mount('#footerSection');

const carousel = createApp(CarouselPista);
carousel.use(VueViewer);
carousel.mount('#pistaSection');
// createApp(nav).mount('#nav');
// createApp(lvl1).mount('#lvl1');
// createApp(nar1).mount('#nar1');




