<template>
    <div>
        <button type="button" class="btn btn-primary" @click="modalExposicio">Afegir exposició</button>

        <!-- Modal exposició -->
        <div class="modal" tabindex="-1" id="modalExpo">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <label for="nom" class="form-label text-black">Nom</label>
                <input type="text" class="form-control" id="nom" name="nom" v-model="exposicio.nom">
                <label for="" class="form-label text-black">Descripció</label>
                <textarea name="" id="" class="form-control" v-model="exposicio.descripcio"></textarea>
                <label for="tipusExpo" class="form-label text-black">Tipus d'exposició</label>
                <select name="tipusExpo" id="tipusExpo" v-model="exposicio.tipusExpo" class="form-control">
                    <option></option>
                    <option v-for="tipus in tipusExpo" :key="tipus.id_tipus_exposicions" :value="tipus.id_tipus_exposicions">
                        {{ tipus.tipus_exposicions }}
                    </option>
                </select>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" @click="crearExposicio">Save changes</button>
            </div>
            </div>
        </div>
        </div>
    </div>
</template>
<script>
import * as bootstrap from 'bootstrap';

export default {
    props:{
        esdevenimentId: Number,
    },
    data() {
        return {
            exposicio:{},
            tipusExpo: {},
            myModal:{}
        }
    },
    methods:{
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
        modalExposicio(){
            this.myModal = new bootstrap.Modal('#modalExpo')
            this.myModal.show();
            console.log("Expo: " + this.exposicio);
        },
        crearExposicio(){
            const me = this;
            axios
            .post("exposicio", me.exposicioAxios)
            .then(response =>{
                this.myModal.hide();
            })
            .catch(error=>{})
        }
    },
    mounted() {
        this.exposicio.id_esdeveniment = this.esdevenimentId;
        this.agafarTipusExpo();
    },
}
</script>
<style>
    
</style>