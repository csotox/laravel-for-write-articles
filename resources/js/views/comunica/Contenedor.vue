<template>
    <section class="container">
        <div class="row justify-content-center">
            <div class="col-6 border border-primary rounded-lg p-5">

                <div class="row justify-content-center border border-secondary rounded-lg p-3">
                    <mostrar
                        :variableEntreComponentes="variableEnPadre"
                    ></mostrar>
                </div>

                <div class="row justify-content-center border border-danger rounded-lg mt-3 p-3">
                    <botones
                        @sumar="sumar()"
                        @restar="restar()"
                    ></botones>
                </div>

                <div class="row justify-content-center border border-black rounded-lg mt-3 p-3">
                    <cambio
                        :valor="variableEnPadre"
                    ></cambio>
                </div>

            </div>
        </div>
    </section>
</template>

<script>
export default {

    data: () => ({
        variableEnPadre: 0,
    }),
    // data

    methods: {
        sumar() {
            this.variableEnPadre++;
        },
        // sumar

        restar() {
            this.variableEnPadre--;
        },
        // restar

    },
    // methods

}
</script>
