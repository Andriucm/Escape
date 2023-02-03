<script>
import Nav from './Nav.vue'
import nar from './Narrativa.vue'
import lvl from './Nivel1.vue'
import Pista from './Carousel.vue';
import 'viewerjs/dist/viewer.css'
import {ref} from 'vue'
import axios from 'axios'
import { defineStore } from 'pinia';


export default {
    components: {
        Nav,
        nar,
        lvl,
        Pista
    },
}

export const useGlobales = defineStore('globales', () => {

const cont = ref(0);

const avanzar = () => {
    if (cont.value < 3) {
        cont.value++;
    } else cont.value = 3;
}

const retroceder = () => {
    if (cont.value > 0) {
        cont.value--;
    } else cont.value = 0;
}

return {cont, avanzar, retroceder}
});

// axios.put('/DSADSA',{'fase':1})

</script>
<template>
    <section class="juego">
        <lvl />
    </section>
    <section class="pistas">
        <Pista />
    </section>

    <div class="navegacion">
        <Nav />
    </div>

    <aside class="narrativa">
        <nar />
    </aside>
</template>


