<script setup>
import Nav from './Nav.vue'
import nar from './Narrativa.vue'
// import pista from './Carousel.vue'
import lvl from './Nivel1.vue'
import 'viewerjs/dist/viewer.css'
import {ref,reactive} from 'vue'
import axios from 'axios'

var cont = ref(0);
const obj = reactive({cont })

const updateCont = function name(updateCont) {
    if(updateCont==1){
        if (cont.value < 4) {
            cont = ref(cont.value+1)
        } else cont= ref(4);
    }else{
        if (cont.value > 0) {
            cont=ref(cont.value-1)
        } else cont= ref(0);

    }
}

// axios.put('/DSADSA',{'fase':1})

</script>
<template>
    <section class="juego">
        <lvl />
    </section>
    <section class="pistas">
        <div id="pistaSection"></div>
    </section>

    <div class="navegacion">
        <Nav :cont="cont" @update-cont="updateCont" ref="c"/>
    </div>

    <aside class="narrativa">
        <nar :cont="obj.cont"/>
    </aside>
</template>


