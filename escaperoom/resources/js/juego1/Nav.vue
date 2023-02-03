<script>
    import { useGlobales } from './Partida1.vue'
    import { computed } from 'vue'

    export default {
    setup() {
        const store = useGlobales();

        return {

            store,

            avanza: computed(()=>store.avanzar),

            retrocede: computed(()=>store.retroceder),
        }
    },
}

</script>
<template>
    <a @click="retrocede">
        <p>
            &lt; </p>
    </a>
    <a @click="avanza">
        <p> &gt;</p>
    </a>
</template>
