<script >
import { ref } from 'vue'
export default {
    data() {
        return {
            cont: ref(0),
        }
    },

    method: {
        atras() {
            if (cont.value > 0) {
                cont.value--;
                console.log(cont.value)

            } else cont.value = 0;

        },
        adelante() {
            if (cont.value < 2) {
                cont.value++;
                console.log(cont.value)
                return cont;
            } else cont.value = 2;
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
