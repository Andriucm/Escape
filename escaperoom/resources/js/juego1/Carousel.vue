<template>
    <carousel :items-to-show="4" :wrap-around="false" style="height: 100%; width: 100%; color: white;">
      <slide v-for="slide in 4" :key="slide">
        <!-- {{ slide }} -->
        <viewer :options=" {inline: false, button: true, navbar: false, title: true, toolbar: true, tooltip: true, movable: true, zoomable: true, rotatable: true, scalable: false, transition: true, fullscreen: true, keyboard: true}">
            <img :src="'imagenes/juegos/1/pistas/p' + slide + '.png'" alt="Fijate bien las fechas no son lo que parecen" srcset="">
        </viewer>
      </slide>
      <template #addons>
        <navigation />
        <!-- <pagination /> -->
      </template>
    </carousel>
</template>

<script>

  import 'vue3-carousel/dist/carousel.css'
  import { Carousel, Slide, Navigation } from 'vue3-carousel'

  import { defineComponent } from 'vue'

  export default defineComponent ({
    name: 'CarouselPista',
    components: {
      Carousel,
      Slide,
      Navigation,
    },
  })
</script>
