<template>
<div class="card-evento d-flex flex-column" v-for="event in events" :key="event.id_esdeveniment">
    <h5 class="elemento-card">{{ event.nom }}</h5>
    <p class="elemento-card">{{ event.descripcio }}</p>
    <div class="elemento-card mb-3">
        <p>{{ event.direccio }}</p>
    </div>
    
    <!-- Contenidor del botó amb mt-auto per empènyer-lo abaix -->
    <div class="mt-auto">
        <button type="button" class="btn btn-secondary w-100" @click="anarEvent(event.id_esdeveniment)" :esdeveniment="event.id_esdeveniment">
            Saber més
        </button>
    </div>
</div>

  </template>

<script>
import axios from 'axios';

export default {
    props: {
      limit: {
        type: Number,
        default: 6,
      },
    },
    data() {
      return {
        events: [],
        idEventos : ''
      };
    },
    methods: {
        fetchEvents() {
            axios.get('esdeveniment')
                .then(response => {
                    this.events = response.data.data;
                    console.log("Esdeveniments: " + response.data);
                })
                .catch(error => {
                    console.error("Error al obtener los eventos:", error);
                });
        },
        anarEvent(id_esdeveniment){
          this.idEventos = id_esdeveniment
          window.location.href = `evento/${this.idEventos}`;
        }
    },
    mounted() {
        this.fetchEvents();
    }
};
</script>

<style scoped>
.card-evento {
  padding: 15px;
  margin: 1.5%;
  background-color: #800F75;
}
.card-evento:hover {
  transform: translateY(-10px);
  cursor: pointer;
}
.card-evento div {
  display: flex;
  align-items: center;
  justify-content: space-between;
}
.img-evento {
  width: 400px;
}
.card-evento,
.img-evento {
  border-radius: 15px;
}
.elemento-card {
  margin-top: 10px;
}
.btn-general {
  padding: 5px 30px;
  border-radius: 80px;
  font-weight: bold;
  cursor: pointer;
  border: 2px solid #B715A6;
  background-color: #B715A6;
  text-align: center;
}
.btn-general:hover {
  border-color: white;
}
  </style>

