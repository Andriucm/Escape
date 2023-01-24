import './bootstrap';
import { createApp } from 'vue';
import Header from './Header.vue';
import Footer from './Footer.vue';
import CarouselPista from './Carousel.vue';


createApp(Header).mount('#headerSection');

createApp(Footer).mount('#footerSection');

const carousel = createApp(CarouselPista);
carousel.use(VueViewer);
carousel.mount('#pistaSection');

