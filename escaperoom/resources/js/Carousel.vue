<template>
    <carousel :items-to-show="4" :wrap-around="true" style="height: 100%; width: 100%; color: white;">
      <slide v-for="slide in 5" :key="slide">
        <!-- {{ slide }} -->
        <expandable-image :src="'imagenes/img' + slide + '.png'" alt="" srcset=""/>
      </slide>

      <template #addons>
        <navigation />
        <!-- <pagination /> -->
      </template>
    </carousel>
  </template>

  <script>
  // If you are using PurgeCSS, make sure to whitelist the carousel CSS classes
  import 'vue3-carousel/dist/carousel.css'
  import { Carousel, Slide, Navigation } from 'vue3-carousel'
  import VueExpandableImage from 'vue-expandable-image'

  export default {
    name: 'CarouselPista',
    components: {
      Carousel,
      Slide,
      Navigation,
      VueExpandableImage,
    },
  }
  </script>
