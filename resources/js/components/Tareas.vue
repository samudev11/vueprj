<template>
<div class="container">
  <div style="height:10em;">

  </div>
  <div class="row justify-content-center">
    <input type="text" placeholder="Introduce tu tarea" v-model="txtTarea">
    <button v-on:click="AgregarTarea" class="btn btn-outline-success my-2 my-sm-0">Añadir tarea</button>
    <div class="row justify-content-center">
      <ul>
        <li>
          <input type="checkbox" name="" id="">
          <label>Descripción de la tarea...</label>
          <button>X</button>
        </li>
      </ul>

    </div>
  </div>
</div>
</template>

<script>
export default {
    
}
</script>