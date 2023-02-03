<script setup>
	// import { ref } from "vue"

    // export default {
    //     props: ['cont'],
    //     methods: {
    //         atras() {
    //             if (this.cont > 0) {
    //                 this.cont--;

    //                 console.log(this.cont)
    //             } else this.cont = 0;

    //         },
    //         adelante() {
    //             if (this.cont < 2) {
    //                 this.cont++;
    //             console.log(this.cont)
    //         } else this.cont = 2;
    //         },
    //     },
    // }
    const props = defineProps(['cont'])
    const emit = defineEmits(['updateCont'])

</script>
<template>
    <a @click="emit('updateCont',-1)">
        <p>
            &lt; </p>
    </a>
    <a @click="emit('updateCont',1)">
        <p> &gt;</p>
    </a>
</template>
