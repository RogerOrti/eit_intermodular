<template>
    <div class="card-evento" v-for="event in events" :key="event.id_esdeveniment">
      {{ event.nom }}
        <img class="img-evento" alt="Imagen del evento">
        <h5 class="elemento-card">{{ event.nom }}</h5>
        <p class="elemento-card">{{ event.data_inici }} - {{ event.data_fi }}</p>
        <div class="elemento-card">
            <p>{{ event.direccio }}</p>
            <a class="btn-general" href="" :esdeveniment = "event.id_esdeveniment">Saber més</a>
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

