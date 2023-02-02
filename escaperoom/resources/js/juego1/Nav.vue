<script >
import { ref, reactive } from 'vue'
export default {
    data() {
        return {
            cont: ref(0),
        }
    },

    methods: {
        atras() {
            if (cont.value > 0) {
                cont.value--;
                console.log(cont.value)
                return cont;
            } else cont.value = 0;
            return cont;
        },
        adelante() {
            if (cont.value < 2) {
            cont.value++;
            console.log(cont.value)
            return cont;
        } else cont.value = 3;
        return cont;
        },
    },
}
</script>
<template>
    <a @click="atras()">
        <p>
            &lt; </p>
    </a>
    <a @click="adelante()">
        <p> &gt;</p>
    </a>
</template>
