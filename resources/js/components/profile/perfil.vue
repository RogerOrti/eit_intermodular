<template>
<div class="container rounded bg-primary mt-3">



        {{ usuari.nom }}

        <div v-if="usuari.tipus_usuari == 2">
            <div>
            <label for="">Nom</label>
            <input type="text" placeholder="" name="nom">
        </div>
        <div>
            <label for="">Cognom</label>
            <input type="text" placeholder="" name="cognom">
        </div>
        <div>
            <label for="">Contrasenya</label>
            <input type="text">
        </div>
        <div>
            <label for="">DNI</label>
            <input type="text" placeholder="" name="dni">
        </div>

        <div>
            <label for=""></label>
            <input type="password" placeholder="" name="contrasenya">
        </div>
        </div>

        <div v-else>

        </div>


    </div>


    <div class="mt-3">
        <button class="btn btn-primary" @click="modalEdita()">Editar dades</button>
    </div>

    <div>
        <button class="btn btn-danger" @click="confirmDelete()">Donar-se de baixa</button>
    </div>


    <!-- Modal donar de baixar -->
    <div class="modal" tabindex="-1" id="deleteModal">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Donar de baixa</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Estàs segur que vols donar-te de baixa?</p>
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
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div></div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tancar</button>
                <button type="button" class="btn btn-primary">Guardar canvis</button>
            </div>
            </div>
        </div>
    </div>


</template>
<script>
import axios from 'axios';

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
        confirmDelete(){},
        deleteUsuari(){},
        modalEdita(){},
        editaUsuari(){},
    },
    mounted() {
      
        const me = this;

        axios
        .put('usuari/')
        .then(response => {

        })
        .catch(error =>{

        })
    },
}
</script>
<style>
    
</style>