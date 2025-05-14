<template>
    <div>
        hola
        {{ esdevenimentAxios.nom }}
        {{ esdevenimentAxios.descripcio }}
    </div>

<button type="button" class="btn btn-primary" @click="modalExposicio()">Afegir exposició</button>

<!-- Modal exposició -->

<div class="modal" tabindex="-1" id="modalExpo">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <label for="" class="form-label">Nom</label>
        <input type="text" class="form-control" id="" name="">
        <label for="" class="form-label">Descripció</label>
        <textarea name="" id="" class="form-control"></textarea>
        <label for="" class="form-label"></label>
        <select name="" id="" class="form-control">
            <option value=""></option>
        </select>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" @click="crearExposicio">Save changes</button>
      </div>
    </div>
  </div>
</div>
</template>
<script>
import axios from 'axios';
import * as bootstrap from 'bootstrap';

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
        modalExposicio(){
            this.myModal = new bootstrap.Modal('#modalExpo')
            this.myModal.show();
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
    created() {
        this.agafarEsdeveniment();
        this.agafarTipusExpo();
    },
}
</script>
<style>
</style>