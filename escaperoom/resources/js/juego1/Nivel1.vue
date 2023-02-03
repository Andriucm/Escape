<script setup>
var jugar = true;
const jugando = ()=>{
    jugar = false;
    console.log(jugar);
}


</script>

<template>

            <div v-show="jugar">
                <button onclick="location.href='./'" type="button" id="salir">X</button>
                <button id="pista1Btn" class="pistaButton"><i class="fa-solid fa-question"></i></button>
                <button id="pista2Btn" class="pistaButton"><i class="fa-solid fa-question"></i></button>
                <button id="pista3Btn" class="pistaButton"><i class="fa-solid fa-question"></i></button>
                <button id="pista4Btn" class="pistaButton"><i class="fa-solid fa-question"></i></button>
                <button @click="jugando" id="jugarBtn"><i class="fa-solid fa-play"></i></button>

            </div>

</template>

