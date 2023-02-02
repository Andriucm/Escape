<script setup>
import Nav from './Nav.vue'
import nar from './Narrativa.vue'
// import pista from './Carousel.vue'
import lvl from './Nivel1.vue'
import 'viewerjs/dist/viewer.css'


</script>
<template>
    <section class="juego">
        <lvl />
    </section>
    <section class="pistas">
        <div id="pistaSection"></div>
    </section>

    <div class="navegacion">
        <Nav />
    </div>

    <aside class="narrativa">
        <nar />
    </aside>
</template>
