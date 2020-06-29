<template>
    <div>
        <h4 class="mt-3">{{mensaje}}</h4>
    </div>
</template>

<script>
export default {
    props: [ 'valor' ],

    data: () => ({
        ultimoValor: 0,
        mensaje: '',
    }),
    // data

    watch: {
        valor: function () {
            if (this.valor > this.ultimoValor) {
                this.mensaje = 'Sumando';
            } else {
                this.mensaje = 'Restando';
            }

            this.ultimoValor = this.valor;
        }
    },

}
</script>
