<script setup>
import Nav from './Nav.vue'
import nar from './Narrativa.vue'
import pista from './Carousel.vue'
import lvl from './Nivel1.vue'

</script>
<template>
    <section class="juego">
        <lvl />
    </section>
    <section class="pistas">
        <pista />
    </section>

    <div class="navegacion">
        <Nav />
    </div>

    <aside class="narrativa">
        <nar />
    </aside>
</template>
