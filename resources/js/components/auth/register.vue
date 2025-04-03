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
                <input type="text" class="form-control" id="nom" name="nom" :value="usuari.nom">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Cognom</label>
                <input type="text" class="form-control" id="cognom" name="cognom" :value="usuari.cognom">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Correu electrónic</label>
                <input type="email" class="form-control" id="correu" name="correu" :value="usuari.correu">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Contrasenya</label>
                <input type="password" class="form-control" id="contrasenya" name="contrasenya" :value="usuari.contrasenya">
            </div>
            <div v-if="usuari.tipusUsuari == 2">

                <div class="mb-3">
                    <label for="">Tipus Empresa</label>
                    <select name="" id="" class="form-control" v-model="usuari.tipusEmpresa">
                        <option v-for="tipus in tipusEmpreses" :key="tipus.id_tipus_empreses" :value="tipus.tipus_empreses">
                            {{ tipus.tipus_empreses }}
                        </option>

                    </select>
                <div class="mb-3">
                    <label for="" class="form-label">NIF</label>
                    <input type="text" class="form-control" id="" name="" :value="usuari.nif">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Direcció</label>
                    <input type="text" class="form-control" id="" name="" :value="usuari.direccio">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Codi postal</label>
                    <input type="text" class="form-control" id="" name="" :value="usuari.codiPostal">
                </div>
                </div>
            </div>
            <div v-else-if="usuari.tipusUsuari == 3">
                <div class="mb-3">
                    <label for="" class="form-label">DNI</label>
                    <input type="text" class="form-control" id="" name="" :value="usuari.dni">
                </div>
            </div>
            <div class="mt-3">
                <button type="submit" class="btn btn-secondary" @change="guardarUsuari">Registrar</button>
            </div> 
        </form>
    </div>
</template>
<script>

export default {

    data(){

        return{

            tipusEmpreses: [],
            usuari:{},
            usuariErrors:{
                nom: false,
                cognom: false,
                correu: false,
                contrasenya: false,
                tipusEmpresa: false,
                nif: false,
                direccio: false,
                codiPostal: false,
                dni: false,
            },
            errors: []
        }

    },
    methods:{

        guardarUsuari(){

            this.validarDades(); // S'omple this.errors

            if (this.errors.length > 0) {
                alert("Hi ha errors en el formulari:\n" + this.errors.join("\n"));
                return;
            }

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
        validarDades() {
            // Reinicialitzar errors abans de validar
            this.errors = [];
            this.usuariErrors = {};

            if (!this.usuari.nom) {
                this.errors.push("El nom és obligatori.");
                this.usuariErrors.nom = true;
            }

            if (!this.usuari.correu) {
                this.errors.push("El correu és obligatori.");
                this.usuariErrors.correu = true;
            }

            if (!this.usuari.contrasenya) {
                this.errors.push("La contrasenya és obligatòria.");
                this.usuariErrors.contrasenya = true;
            }

            switch (this.usuari.tipusUsuari) {
                case 2: // Empresa
                    if (!this.usuari.tipusEmpresa) {
                        this.errors.push("El tipus d'empresa és obligatori.");
                        this.usuariErrors.tipusEmpresa = true;
                    }
                    if (!this.usuari.nif) {
                        this.errors.push("El NIF és obligatori.");
                        this.usuariErrors.nif = true;
                    }
                    if (!this.usuari.direccio) {
                        this.errors.push("La direcció és obligatòria.");
                        this.usuariErrors.direccio = true;
                    }
                    if (!this.usuari.codiPostal) {
                        this.errors.push("El codi postal és obligatori.");
                        this.usuariErrors.codiPostal = true;
                    }
                    break;
                case 3: // Particular
                    if (!this.usuari.dni) {
                        this.errors.push("El DNI és obligatori.");
                        this.usuariErrors.dni = true;
                    }
                    if (!this.usuari.cognom) {
                        this.errors.push("El cognom és obligatori.");
                        this.usuariErrors.cognom = true;
                    }
                    break;
            }
        },

        agafarTipusEmpresa(){

            const me = this;

            axios
            .get("tipusEmpresa")
            .then((response) => {
                me.tipusEmpreses = response.data;
                console.log(response.data);
            })
            .catch((error) => {
                error.response.data.errors.forEach((error) => {
                    alert(error);
                }); 
            })
        }

    },
    mounted(){
        this.agafarTipusEmpresa();
    }
    
}
</script>
<style>
    
</style>