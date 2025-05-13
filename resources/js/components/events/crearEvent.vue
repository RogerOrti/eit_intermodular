<template>
    <div class="mt-3 mb-3">
        <form>
            <div class="mb-3">
                <label for="nom" class="form-label">Nom de l'esdeveniment</label>
                <input type="text" class="form-control" v-model="esdeveniment.nom" name="nom" id="nom">
            </div>
            <div class="mb-3">
                <label for="descripcio" class="form-label">Descripció</label>
                <textarea class="form-control" rows="3" name="descripcio" id="descripcio" v-model="esdeveniment.descripcio"></textarea>
            </div>
            <div class="mb-3">
                <label for="direccio" class="form-label">Direcció</label>
                <input type="text" class="form-control" v-model="esdeveniment.direccio" name="direccio" id="direccio">
            </div>
            <div>
                <button class="btn btn-secondary" @click="crearEsdeveniment">Crear</button>
            </div>
        </form>
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
    data(){
        return {
            esdeveniment:{
                id_usuaris: this.usuari.id_usuaris
            }
        }
    },
    methods: {

        crearEsdeveniment(){

            const me = this;

            console.log(me.esdeveniment);

            axios
            .post('esdeveniment', me.esdeveniment)
            .then((response) => {

            })
            .catch((err) => {
                alert("S'ha produït un error");
                return
            });
        }


    },
    mounted(){

    }
    
}
</script>
<style>
    
</style>