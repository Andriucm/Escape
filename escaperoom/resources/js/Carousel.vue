<template>
    <carousel :items-to-show="4" :wrap-around="true" style="height: 100%; width: 100%; color: white;">
      <slide v-for="slide in 5" :key="slide">
        <!-- {{ slide }} -->
        <viewer :options=" {inline: false, button: true, navbar: false, title: false, toolbar: false, tooltip: true, movable: true, zoomable: true, rotatable: false, scalable: false, transition: true, fullscreen: true, keyboard: true}">
            <img :src="'imagenes/img' + slide + '.png'" alt="" srcset="">
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
