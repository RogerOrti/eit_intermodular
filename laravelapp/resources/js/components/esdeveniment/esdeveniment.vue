<template>
    <div class="container-fluid">

        <h1>{{ esdevenimentAxios.nom }}</h1>
        

        <p>{{ esdevenimentAxios.descripcio }}</p>
    </div>


</template>
<script>
import axios from 'axios';

export default {
    props:{
        esdevenimentId: Number,
    },
    data() {
        return {
            esdevenimentAxios: {},
            IdEsdevenuiment: this.esdevenimentId,
            exposicio: {},
            exposicioAxios: {},
            tipusExpo: {},
            myModal: {}
        }
    },
    methods: {
        agafarEsdeveniment(){
            const me = this;
            axios
            .get("esdeveniment/" + me.IdEsdevenuiment)
            .then(response =>{
                console.log(this.IdEsdevenuiment)
                me.esdevenimentAxios = response.data.data
            })
            .catch(error =>{})
        },
        agafarExpo(){
            const me = this;
            axios
            .get("exposicio")
            .then(response => {
                me.exposicio = response.data
            })
            .catch(error => {})
        },
        agafarTipusExpo(){
            const me = this;
            axios
            .get("tipusExposicio")
            .then(response =>{
                me.tipusExpo = response.data.data
                console.log(me.tipusExpo);
            })
            .catch(error =>{})
        },
    },
    created() {
        this.agafarEsdeveniment();
        this.agafarTipusExpo();
    },
}
</script>
<style>
</style>