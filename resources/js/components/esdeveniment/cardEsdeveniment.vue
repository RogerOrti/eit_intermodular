<template>
    <div>
      <div v-for="esdeveniment in esdeveniments" :key="esdeveniment.id_esdeveniment" class="card-evento" @click="goToEsdeveniment(esdeveniment.id_esdeveniment)">
        <img class="img-evento" :src="esdeveniment.image" alt="Imagen del evento">
        <h5 class="elemento-card">{{ esdeveniment.nom }}</h5>
        <p class="elemento-card">{{ esdeveniment.descripcio }}</p>
        <div class="elemento-card">
          <p>{{ esdeveniment.direccio }}</p>
          <a class="btn-general" href="/tickets">TICKETS</a>
        </div>
      </div>
    </div>
  </template>

  <script>
  import axios from 'axios';

  export default {
    name: "EsdevenimentsList",
    data() {
      return {
        esdeveniments: [] // Almacén para los datos de esdeveniments
      }
    },
    computed: {
    limitedEsdeveniments() {
      return this.esdeveniments.slice(0, 6); // Limita a 6 eventos
    },
    methods: {
      goToEsdeveniment(id) {
        window.location.href = `/esdeveniment/${id}`;
      }
    },
    mounted() {
      this.fetchEsdeveniments();
    }
    }
  };
  </script>

  <style scoped>
.card-evento{
    padding: 15px;
    margin: 1.5%;
    background-color: #800F75;
}
.card-evento:hover{
    transform: translateY(-10px);
    cursor: pointer;
}
.card-evento div{
    display: flex;
    align-items: center;
    justify-content: space-between;
}
.img-evento{
    width: 400px;
}
.card-evento, .img-evento{
    border-radius: 15px;
}
.elemento-card{
    margin-top: 10px;
}
.btn-general, .btn-ver-mas{
    padding: 5px 30px 5px 30px;
    border-radius: 80px;
    font-weight: bold;
    cursor: pointer;
    border: 2px solid #B715A6;
    text-align: center;
}
.btn-general{
    background-color: #B715A6;
}
.btn-general:hover{
    border-color: white;
}
</style>

