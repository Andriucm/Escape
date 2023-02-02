<script>
export default
    {
        data() {
            return {
                cables: [
                     'Rojo' ,
                     'Azul' ,
                    'Verde'
                ],
                ocupados:[
                    '','','',
                ],

            };
        },
        methods: {
            allowDrop(event){
                event.preventDefault();

            },
            drag(event){
                event.dataTransfer.setData("text", event.target.id);

            },
            drop(event){
                if(ocupados[parseInt(event.target.id)]==""){
                    var data = ev.dataTranser.getDAta("text");
                    ocupados[parseInt(event.target.id)]=data;
                    event.target.appendChild(document.getElementById(data));

                }
            }

        }, computed: {


        }


    }
</script>

<template>
    <main>
        <h1>Conecta los cables</h1>
        <div class="container">
            <template v-for="cable in cables">
            <div id="{{ cable }}" draggable="true" ondragstart="drag(event)"></div>
        </template>
        </div>

        <div class="container">
            <div class="figura">
                <div class="box" id="0" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
                <h2>Rojo</h2>
            </div>
        </div>
        <div class="container">
            <div class="figura">
                <div class="box" id="1" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
                <h2>Azul</h2>
            </div>
        </div>
        <div class="container">
            <div class="figura">
                <div class="box" id="2" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
                <h2>Verde</h2>
            </div>
        </div>


    </main>
</template>

<style>

</style>
