<script setup>

</script>

<template>
        <v-header class="header-container">
                <div class="header">
                        <div class="row">
                                <img src="../../resources/img/logo.png" alt="Logo" class="logo" >
                                <ul>
                                        <li><a href="#">Puntuaciones</a></li>
                                        <li><a href="#">Grupos</a></li>
                                        <li><a href="#">Perfil</a></li>
                                        <button type="button" class="btn">Jugar</button>
                                </ul>
                        </div>
                </div>
        </v-header>
</template>

<style>
#headerSection {
  left: 0;
  width: 100%;
  font-family: 'Play', sans-serif;
}

.logo {
  display: flex;
  flex-direction: row;
  justify-content: flex-start;
  width: 50px;
}        

.header .row {
  width: 100%;
  display: flex;
  flex-direction: row;
  /* justify-content: space-around; */
  /* justify-content: end; */
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #111;
}

.header .row ul {
  display: flex;
  flex-direction: row;
  justify-content: end;
  /* justify-content: space-between; */
}

.header .row ul li {
  float: right;
}

.header .row ul li a {
  font-size: 18px;      
  display: block;
  color: gray;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

/* Change the link color to #111 (black) on hover */
.header .row ul li a:hover {
  color: #fff;
}
</style>