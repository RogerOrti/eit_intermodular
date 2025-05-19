<template>
    <div>
        <filtre @filtrar="agafarExpo"></filtre>
        <div class="container" v-for="expo in exposicions" :key="expo.id_exposicions">
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
</template>
<script>
import axios from 'axios';
import filtre from './filtreExpo.vue';
export default {
    components:{
        filtre
    },
    data() {
        return {
            exposicions: []
        }
    },
    methods: {
        agafarExpo(tipus){
            const me = this;
            axios
            .get("exposicio",{
                    params: {
                        tipus: tipus
                    }
            })
            .then(response =>{
                console.log("Tipus d'exposició enviada amb l'emit: " + tipus);
                
                me.exposicions = response.data.data
                // console.log("Exposicions:" + me.exposicions);
            })
            .catch(error =>{})
        }
    },
}
</script>
<style>
     
</style>