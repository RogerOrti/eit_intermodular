<template>
    <div>
        <div>
            <label for="">Nom</label>
            <input type="text" placeholder="" name="nom">
        </div>
        <div>
            <label for="">Cognom</label>
            <input type="text" placeholder="" name="cognom">
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

    <!-- Modal donar de baixar -->
    <div class="modal" tabindex="-1" id="deleteModal">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Modal body text goes here.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tancar</button>
                <button type="button" class="btn btn-danger">Aceptar</button>
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
                <p>Modal body text goes here.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
            </div>
        </div>
    </div>


</template>
<script>
import axios from 'axios';

export default {
    data() {
        return {
            usuari: [],
            myModal: {},
        }
    },
    methods: {
        confirmDelete(){},
        deleteUsuari(){},
    },
    mounted() {
      
        const me = this;

        axios
        .get()
        .then(response => {
            me.usuari = response.data
        })
        .catch(error =>{

        })
    },
}
</script>
<style>
    
</style>