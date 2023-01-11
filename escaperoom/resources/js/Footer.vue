<script setup>

</script>

<template>
        <v-footer class="footer-container">
                <div class="footer">
                        <div class="row">
                                <ul>
                                        <li><a href="/">Inicio</a></li>
                                        <li><a href="#">Puntuaciones</a></li>
                                        <li><a href="/groups">Grupos</a></li>
                                        <li><a href="/profile">Perfil</a></li>
                                </ul>
                        </div>

                        <div class="row">
                                <b>ESCAPE ROOM</b> - Copyright © 2021 - All rights reserved || <b>Diseñado por:</b>  Andrei, Saray,
                                Mikel y Ainhoa
                        </div>
                </div>
        </v-footer>

</template>

<style>
#footerSection {
  position: absolute;
  bottom: 0;
  left: 0;
  width: 100%;
  background: #000;
  padding: 25px 0px;
  font-family: 'Play', sans-serif;
  font-size: 20px;
  text-align: center;
}

ul li a {
  font-size: 18px;
}

.footer .row {
  margin: 1% 0%;
  padding: 0.6% 0%;
  color: gray;
  font-size: 0.8em;
}

.footer .row a {
  text-decoration: none;
  color: gray;
  transition: 0.5s;
}

.footer .row a:hover {
  color: #fff;
}

.footer .row ul li {
   display: inline-block;
   margin: 0px 30px;
}

.footer .row a i {
   font-size: 2em;
   margin: 0% 1%;
}
</style>