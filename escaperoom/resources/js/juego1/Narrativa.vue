<script setup>
import { useGlobales } from './Partida1.vue'


const store = useGlobales();

const narrativa =
    [
        'Tenemos que recibir una comunicación vía radio. En ella se nos comunicará la localización y de una antena parabólica por la que se tendrá que enviar la configuración de un cuadro de seguridad.',
        'Sabemos que la primera transmisión se emite en banda ciudadana, pero nosabemos exactamente la frecuencia. Tendremos que sintonizar a una frecuencia concreta. Tendremos que buscar la frecuencia a la que se emitirá la señal.',
        'Fijate en los fondos de pantalla de los trabajadores, al parecer les gustan los acontecimientos historicos',
        'Para jugar acuerdate que tienes que sintonizar la frecuencia en una radio (Busca una radio)'
    ]
</script>
<template>
    <aside>
        <h1>Fase <b>0</b></h1>
        <h5>
            {{ narrativa[store.cont] }}
        </h5>

    </aside>
</template>
