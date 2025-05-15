<template>
    <div>
        <div>
            <form>
                <div v-for="tipus in tipusExpo" :key="tipus.id_tipus_exposicions">
                    <button type="button" class="btn-general btn-filtros" @click="filtreExpo(tipus)">{{ tipus.tipus_exposicions }}</button>
                </div>
            </form>




        </div>
                    <!-- <div class="div-filtros">
                        <div class="categoria-flitro">
                            <h5>Tipologia</h5>
                            <div class="tipo-categoria">
                                <button class="btn-general btn-filtros">Tot</button>
                                <button class="btn-general btn-filtros">Tecnológia</button>
                                <button class="btn-general btn-filtros">Informàtica</button>
                            </div>
                        </div>
                        <div class="categoria-flitro">
                            <h5>Recinte</h5>
                            <div class="tipo-categoria">
                                <button class="btn-general btn-filtros">Tot</button>
                                <button class="btn-general btn-filtros">Fira Monjuic</button>
                                <button class="btn-general btn-filtros">Fira Gran Via</button>
                                <button class="btn-general btn-filtros">Fira Cornellà</button>
                                <button class="btn-general btn-filtros">Fira Hospitalet</button>
                                <button class="btn-general btn-filtros">Fira Sabadell</button>
                            </div>
                        </div>
                        <div class="categoria-flitro">
                            <h5>Tipus</h5>
                            <div class="tipo-categoria">
                                <button class="btn-general btn-filtros">Tot</button>
                                <button class="btn-general btn-filtros">Exposició</button>
                                <button class="btn-general btn-filtros">Xerrada</button>
                                <button class="btn-general btn-filtros">Presentació</button>
                            </div>
                        </div>
                    </div> -->
    </div>
</template>
<script>
import axios from 'axios';

export default {
    data() {
        return {
            tipusExpo: {},
            filtre: {}
        }
    },
    methods: {
        agafarTipusexpo(){
            const me = this;
            axios
            .get("tipusExposicio")
            .then(response =>{
                me.tipusExpo = response.data.data;
                console.log(me.tipusExpo);
            })
            .catch(error =>{})
        },
        filtreExpo(tipus){
            this.$emit("filtrar",tipus.id_tipus_exposicions);
            }
    },
    mounted() {
        this.agafarTipusexpo();
    },
}
</script>
<style>
    
</style>