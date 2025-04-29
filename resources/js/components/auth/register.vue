<template>
    <div class="container rounded bg-primary mt-3">
        <form method="POST">
            <div class="mb-3">
                <label for="" class="form-label">Tipus usuari</label>
                <select name="tipusUsuari" id="" class="form-control" v-model="usuari.tipusUsuari">
                    <option></option>
                    <option value="2">Empresa</option>
                    <option value="3">Assistent</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="nom" class="form-label">Nom</label>
                <input type="text" class="form-control" :class="{ 'is-invalid': usuariErrors.nom }" id="nom" name="nom"
                    v-model="usuari.nom" required>
            </div>

            <div v-if="usuari.tipusUsuari == 3">
                <div class="mb-3">
                    <label for="cognom" class="form-label">Cognom</label>
                    <input type="text" class="form-control" :class="{ 'is-invalid': usuariErrors.cognom }" id="cognom"
                        name="cognom" v-model="usuari.cognom" required>
                </div>
            </div>
            <div class="mb-3">
                <label for="correu" class="form-label">Correu electrónic</label>
                <input type="email" class="form-control" :class="{ 'is-invalid': usuariErrors.correu }" id="correu"
                    name="correu" v-model="usuari.correu" required>
            </div>
            <div class="mb-3">
                <label for="telefon" class="form-label">Teléfon</label>
                <input type="text" class="form-control" :class="{ 'is-invalid': usuariErrors.telefon }" id="telefon"
                    name="telefon" v-model="usuari.telefon" required>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Contrasenya</label>
                <input type="password" class="form-control" :class="{ 'is-invalid': usuariErrors.contrasenya }"
                    id="contrasenya" name="contrasenya" v-model="usuari.contrasenya" required>
            </div>
            <div v-if="usuari.tipusUsuari == 2">

                <div class="mb-3">
                    <label for="tipusEmpresa">Tipus Empresa</label>
                    <select name="tipusEmpresa" id="tipusEmpresa" class="form-control" v-model="usuari.tipusEmpresa"
                        required>
                        <option v-for="tipus in tipusEmpreses" :key="tipus.id_tipus_empreses"
                            :value="tipus.id_tipus_empreses">
                            {{ tipus.tipus_empreses }}
                        </option>

                    </select>
                    <div class="mb-3">
                        <label for="nif" class="form-label">NIF</label>
                        <input type="text" class="form-control" :class="{ 'is-invalid': usuariErrors.nif }" id="nif"
                            name="nif" v-model="usuari.nif" required>
                    </div>
                    <div class="mb-3">
                        <label for="direccio" class="form-label">Direcció</label>
                        <input type="text" class="form-control" :class="{ 'is-invalid': usuariErrors.direccio }"
                            id="direccio" name="direccio" v-model="usuari.direccio" required>
                    </div>
                    <div class="mb-3">
                        <label for="codiPostal" class="form-label">Codi postal</label>
                        <input type="text" class="form-control" :class="{ 'is-invalid': usuariErrors.codiPostal }"
                            id="codiPostal" name="codiPostal" v-model="usuari.codiPostal" required>
                    </div>
                </div>
            </div>
            <div v-else-if="usuari.tipusUsuari == 3">
                <div class="mb-3">
                    <label for="dni" class="form-label">DNI</label>
                    <input type="text" class="form-control" :class="{ 'is-invalid': usuariErrors.dni }" id="dni"
                        name="dni" v-model="usuari.dni" required>
                </div>
            </div>
            <div class="mt-3">
                <button type="submit" class="btn btn-secondary" @click="guardarUsuari()">Registrar</button>
            </div>
        </form>
    </div>
</template>
<script>

export default {

    data() {

        return {

            tipusEmpreses: [],
            usuari: {},
            usuariErrors: {
                nom: false,
                cognom: false,
                correu: false,
                telefon: false,
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
    methods: {

        guardarUsuari() {

            this.validarDades();

            console.log("Dades a enviar:" + this.usuari);
            
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
                .catch(() => {
                    alert("Errors al registar l'usuari");
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
            if (!this.usuari.telefon) {
                this.errors.push("El teléfon és obligatòri.");
                this.usuariErrors.telefon = true;
            }
            if (!this.usuari.contrasenya) {
                this.errors.push("La contrasenya és obligatòria.");
                this.usuariErrors.contrasenya = true;
            }
            switch (this.usuari.tipusUsuari) {
                case "2": // Empresa
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
                case "3": // Particular
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
    }

}
</script>