<template>
    <div class="container rounded bg-primary mt-3">
        <form>
            <div class="mb-3">
                <label for="" class="form-label">Tipus usuari</label>
                <select name="" id="" class="form-control" v-model="usuari.tipusUsuari">
                    <option></option>
                    <option value="2">Empresa</option>
                    <option value="3">Assistent</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Nom</label>
                <input type="text" class="form-control" id="" :value="usuari.nom">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Cognom</label>
                <input type="text" class="form-control" id="" :value="usuari.cognom">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Correu electrónic</label>
                <input type="text" class="form-control" id="" :value="usuari.correu">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Contrasenya</label>
                <input type="text" class="form-control" id="" :value="usuari.contrasenya">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Nom</label>
                <input type="text" class="form-control" id="" :value="usuari.nom">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">DNI</label>
                <input type="text" class="form-control" id="" :value="usuari.dni">
            </div>
            <div v-if="usuari.tipusUsuari == 2">
                <div class="mb-3">
                    <label for="">Tipus Empresa</label>
                    <select name="" id="" class="form-control">
                        <option v-for="tipus in tipusEmpreses" :key="tipus.id_tipus" :value="tipus.id_tipus">
                            {{ tipus.tipus_empreses }}
                        </option>
                    </select>
                <div class="mb-3">
                    <label for="" class="form-label">NIF</label>
                    <input type="text" class="form-control" id="" :value="usuari.nif">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Direcció</label>
                    <input type="text" class="form-control" id="" :value="usuari.direccio">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Codi postal</label>
                    <input type="text" class="form-control" id="" :value="usuari.codiPostal">
                </div>
                </div>
            </div>
            <div v-else-if="usuari.tipusUsuari == 3">

            </div>
            <div class="mt-3">
                <button type="submit" class="btn btn-secondary" @change="guardarUsuari">Registrar</button>
            </div> 
        </form>
    </div>
</template>
<script>
import axios from 'axios';

export default {
    data(){

        return{
            tipusEmpreses: [],
            usuari:{}
        }

    },
    methods:{

        guardarUsuari(){

            this.validarDades();

            const me = this;
            axios
            .post("usuari", me.usuari)
            .then((response) => {
                me.usuari = response.data;
                console.log(response);
                alert("Usuari creat correctament");
            })
            .catch((error) => {
                error.response.data.errors.forEach((error) => {
                    alert(error);
                }); 
            })
        },
        validarDades(){

        },
        agafarTipusEmpresa(){

            axios
            .get()
            .then((response) => {
                this.tipusEmpreses = response.data;
                console.log(response);
            })
            .catch((error) => {
                error.response.data.errors.forEach((error) => {
                    alert(error);
                }); 
            })
        }

    },
    mounted(){
        this
    }
    
}
</script>
<style>
    
</style>