<template>
    <div>
        <filtre @filtrar="agafarExpo"></filtre>
        <div class="container-fluid" v-for="expo in exposicions" :key="expo.id_exposicions">
            <div class="card">
                {{ expo.nom }}
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
            exposicions: {}
        }
    },
    methods: {
        agafarExpo(tipus){
            const me = this;
            axios
            .get("exposicio", me.tipus)
            .then(response =>{
                me.exposicions = response.data
            })
            .catch(error =>{})
        }
    },
}
</script>
<style>
     
</style>