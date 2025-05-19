<template>
    <div>
<div class="card bg-primary text-white p-3" style="width: 300px;">
  <form>
    <div class="row g-2 flex-wrap" style="width: 500px; flex-direction: row; display: flex;" >
      <div
        v-for="tipus in tipusExpo"
        :key="tipus.id_tipus_exposicions"
        class="col-4"
      >
        <button
          type="button"
          class="btn btn-light" style="width: 100px;"
          @click="filtreExpo(tipus)"
        >
          {{ tipus.tipus_exposicions }}
        </button>
      </div>
    </div>
  </form>
</div>

    </div>
</template>
<script>
import axios from 'axios';

export default {
    data() {
        return {
            tipusExpo: [],
            filtre: {}
        }
    },
    methods: {
        agafarTipusexpo(){
            const me = this;
            axios
            .get("tipusExposicio")
            .then(response =>{
                me.tipusExpo = response.data.data;
                console.log(me.tipusExpo);
            })
            .catch(error =>{})
        },
        filtreExpo(tipus){
            this.$emit("filtrar",tipus.id_tipus_exposicions);
            }
    },
    mounted() {
        this.agafarTipusexpo();
    },
}
</script>
<style>
    
</style>