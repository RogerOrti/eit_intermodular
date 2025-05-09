<template>
<div class="container rounded bg-primary mt-3">



        {{ usuari.nom }}
        {{ usuari.correu_electronic }}

    </div>


    <div>
        <button class="btn btn-secondary" @click="modalEditar()"><i class="bi bi-plus-circle-fill"></i> Editar dades</button>
    </div>

    <div>
        <button class="btn btn-danger" @click="confirmDelete()"><i class="bi bi-trash-fill"></i> Donar-se de baixa</button>
    </div>


    <!-- Modal donar de baixar -->
    <div class="modal" tabindex="-1" id="deleteModal">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-black">Donar de baixa</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p class="text-black">Estàs segur que vols donar-te de baixa?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tancar</button>
                <button type="button" class="btn btn-danger" @click="deleteUsuari()">Aceptar</button>
            </div>
            </div>
        </div>
    </div>

    <!-- Modal editar dades -->
<div class="modal" tabindex="-1" id="updateModal">
  <div class="modal-dialog modal-lg"> <!-- Pots afegir modal-lg per més amplada -->
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-black">Editar dades</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
          <div class="mb-3">
            <label class="form-label">Nom</label>
            <input type="text" class="form-control" v-model="usuariAxios.nom">
          </div>
          <div class="mb-3">
            <label class="form-label">Cognoms</label>
            <input type="text" class="form-control" v-model="usuariAxios.cognoms">
          </div>
          <div class="mb-3">
            <label class="form-label">Correu electrònic</label>
            <input type="email" class="form-control" v-model="usuariAxios.email">
          </div>
          <!-- Afegir més camps seguint la mateixa estructura -->
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tancar</button>
        <button type="button" class="btn btn-primary" @click="editaUsuari()">Guardar canvis</button>
      </div>
    </div>
  </div>
</div>



</template>
<script>
import axios from 'axios';
import * as bootstrap from 'bootstrap';

export default {
    props: {
        usuari : {
            type: Object,
            required: true
        }
    },
    data() {
        return {
            usuariAxios: {},
            myModal: {},
        }
    },
    methods: {
        confirmDelete() {
            this.myModal = new bootstrap.Modal('#deleteModal')
            this.myModal.show();
        },
        deleteUsuari() {

            const me = this;
            axios
            .delete('usuari/' + me.usuari.id_usuaris)
            .then(response =>{
                me.myModal.hide()
            })
        },
        modalEditar() {
            this.myModal = new bootstrap.Modal('#updateModal')
            this.myModal.show();
        },
        editarUsuari() {

        },
    },
    mounted() {

    },
}
</script>
<style>
</style>