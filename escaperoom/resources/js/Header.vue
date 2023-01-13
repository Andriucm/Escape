<script setup>
  function index() {
    window.location.href="/";
  }
  function redirect() {
    window.location.href="/play";
  }
</script>

<template>
  <v-header class="header-container">
    <div class="header">
      <div class="row">
        <img  src="../../public/imagenes/logo.png" alt="Logo" class="logo" v-on:click="index()">
        <ul>
          <li><a href="./puntuaciones">Puntuaciones</a></li>
          <li><a href="./groups">Grupos</a></li>
          <li><a href="./profile">Perfil</a></li>
          <li><a href="./login">Ingresa tu cuenta</a></li>
          <button type="button" class="btn" v-on:click="redirect()">Jugar</button>
        </ul>
      </div>
    </div>
  </v-header>
</template>
