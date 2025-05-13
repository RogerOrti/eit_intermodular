<template>
    <div>
        
    </div>
</template>
<script>
import axios from 'axios';

export default {
    props:{

    },
    data() {
        return {
            esdevenimentAxios: {}
        }
    },
    methods: {
        agafarEsdeveniment(){

            const me = this;

            axios
            .get("esdeveniment/" + me.esdeveniment)
            then(response =>{
                me.esdevenimentAxios = response.data
            })
            .catch()
        }
    },
    created() {
        
    },
}
</script>
<style>

</style>