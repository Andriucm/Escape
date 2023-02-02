<script>
import narrativa from './Narrativa.vue'
export default{
    components:{
        narrativa
    },
    methods: {
            test: function() {
                console.log(narrativa.data().narrativa[1]);
            }
        }

}
</script>
<template>
    <a @click="test">
        <p>
            &lt; </p>
    </a>
    <a>
        <p> &gt;</p>
    </a>
</template>