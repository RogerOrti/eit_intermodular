<template>
    <div>
        <filtre @filtrar="agafarExpo"></filtre>
        <div class="container mb-3" v-for="expo in exposicions" :key="expo.id_exposicions">
            <div class="row">
                <div class="card bg-primary">
                    <div class="card-tittle">
                    <h5>{{ expo.nom }}</h5> 
                    </div>
                    <div class="card-body text-white">
                        {{ expo.descripcio }}
                    </div>
                </div>
            </div>

        </div>
    </div>
</template>
<script>
import axios from 'axios';
import filtre from './filtreExpo.vue';

export default {
    props: {
        esdevenimentId: Number,
    },
    components: {
        filtre
    },
    data() {
        return {
            exposicions: []
        };
    },
    methods: {
        agafarExpo(tipus) {
            axios.get("exposicio", {
                params: {
                    tipus: tipus,
                    esdeveniment: this.esdevenimentId
                }
            })
            .then(response => {
                console.log("Tipus filtrat: " + tipus);
                this.exposicions = response.data.data;
            })
            .catch(error => {
                console.error(error);
            });
        }
    },
    mounted() {
        // Crida inicial per carregar exposicions de l'esdeveniment
        axios.get("exposicio", {
            params: {
                esdeveniment: this.esdevenimentId
            }
        })
        .then(response => {
            this.exposicions = response.data.data;
        })
        .catch(error => {
            console.error(error);
        });
    }
};
</script>

<style>
     
</style>