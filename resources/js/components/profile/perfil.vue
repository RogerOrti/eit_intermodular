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
        <div class="row">
          <div class="col-3">
            <label class="form-label text-black">Nom</label>
            <input type="text" class="form-control" v-model="usuariAxios.nom">
          </div>
          <div v-if="usuari.tipus_usuari == 3">
            <div class="col-3">
              <label class="form-label text-black">Cognom</label>
              <input type="text" class="form-control" v-model="usuariAxios.cognom">
            </div>
          </div>
          <div class="col-3">
            <label class="form-label text-black">Correu electrònic</label>
            <input type="email" class="form-control" v-model="usuariAxios.email">
          </div>
        </div> 
        <div class="row">
          <div class="col-3">
            <label class="form-label text-black">Contrasenya</label>
            <input type="email" class="form-control" v-model="usuariAxios.contrasenya">
          </div>
          <div v-if="usuari.tipus_usuari == 2">
            <div class="col-3">
              <label class="form-label text-black">NIF</label>
              <input type="password" class="form-control" v-model="usuariAxios.nif">
            </div>
          </div>
          <div v-else>
            <div class="col-3">
              <label class="form-label text-black">DNI</label>
              <input type="password" class="form-control" v-model="usuariAxios.dni">
            </div>
          </div>
        </div>
        <div v-if="usuari.tipus_usuari == 2">
          <div class="row">
            <div class="col-4">
              <label for="" class="form-label text-black">Direccio</label>
              <input type="text" class="form-control" v-model="usuariAxios.direccio">
            </div>
            <div class="col-3">
              <label for="" class="form-label text-black">Tipus empresa</label>
              <select name="tipusEmpresa" id="tipusEmpresa" class="form-control" v-model="usuariAxios.tipus_empresa"
              required>
                <option v-for="tipus in tipusEmpreses" :key="tipus.id_tipus_empreses"
                  :value="tipus.id_tipus_empreses">
                  {{ tipus.tipus_empreses }}
                </option>
              </select>
            </div>
          </div>
        </div>
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
            tipusEmpreses: [],
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
                window.location.href = "";
            })
        },
        modalEditar() {
            this.myModal = new bootstrap.Modal('#updateModal')
            this.myModal.show();
        },
        editarUsuari() {
            axios
            .put('usuari/' + me.usuari.id_usuaris)
            .then(response =>{
                me.myModal.hide()
                window.location.href = "";
            })
        },
        agafarTipusEmpresa() {

          const me = this;

          axios
            .get("tipusEmpresa")
            .then((response) => {
              me.tipusEmpreses = response.data.data;
            })
            .catch((error) => {
              error.response.data.errors.forEach((error) => {
                alert(error);
                });
            })
        }
    },
    mounted() {
      this.agafarTipusEmpresa();
    },
}
</script>
<style>
</style>