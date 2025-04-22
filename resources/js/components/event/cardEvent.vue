<template>
    <div class="card-evento">
        <img class="img-evento" src="{{ asset('media/eventoPrincipal.png')}}" alt="">
        <h5 class="elemento-card">MWC Barcelona</h5>
        <p class="elemento-card">03/03/2025 - 06/03/2025</p>
        <div class="elemento-card">
            <p>Fira Barcelona</p>
            <a class="btn-general" href="{{ route('tickets') }}">TICKETS</a>
        </div>
    </div>
</template>
<script>
export default {
    methods: {
        irALocal() {
            axios.get(`local/${this..}`)
            .then(response => {
                window.location.href = `/evento/${this..}`;
            })
            .catch(error => {
                console.error('Error:', error);
            });
        },
    }
}
</script>
<style>

</style>
