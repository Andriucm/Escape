<script >
import Nav from './Nav.vue'
import { computed } from 'vue'

export default {
    data() {
        return {
            narrativa:
                [
                    'Tenemos que recibir una comunicación vía radio. En ella se nos comunicará la localización y de una antena parabólica por la que se tendrá que enviar la configuración de un cuadro de seguridad.',
                    'Sabemos que la primera transmisión se emite en banda ciudadana, pero nosabemos exactamente la frecuencia. Tendremos que sintonizar a una frecuencia concreta. Tendremos que buscar la frecuencia a la que se emitirá la señal.',
                    'Fijate en los fondos de pantalla de los trabajadores, al parecer les gustan los acontecimientos historicos',
                ],


        }
    },
    props: ['cont'],

    watch: {
      	'cont': function(newVal, oldVal) { // watch it
          console.log('Prop changed: ', newVal, ' | was: ', oldVal)
        }
      },

    components:{
        Nav

    },

}
</script>
<template>
    <aside>
        <h1>{{ this.cont }}</h1>
        <h1>Fase <b>0</b></h1>
        <h5>
            {{ narrativa[this.cont] }}
        </h5>

    </aside>
</template>
