<template>
    <div>
        <button
            type="button"
            class="btn btn-success"
            @click="sumarEnPadre()">+</button>
        <button
            type="button"
            class="btn btn-danger"
            @click="restarEnPadre()">-</button>
    </div>
</template>

<script>
export default {
    props: [ 'VariableEntreComponentes' ],

    methods: {
        sumarEnPadre() {
            this.$emit('sumar');
        },
        // sumar

        restarEnPadre() {
            this.$emit('restar');
        },
        // restar

    },
    // methods
}
</script>
