<template>
    <div>
        <h1 class="text-center">

            Libro de {{libro.nombre}}
            <a type="button" href="/" class="btn btn-warning">Home</a>

        </h1>

        <div class="row">
            <div class="card border-primary col-3" v-for="capitulo in capitulos">
                <div class="text-center card-header">Capitulo num {{capitulo.num_capitulo}}
                </div>
                <div class="card-body ">
                    <a class="btn btn-success btn-lg btn-block" v-bind:href="'/libros/' + capitulo.id +'/capitulos/' + capitulo.num_capitulo">Leer</a><br/>

                </div>
            </div>

        </div>
    </div>
</template>

<script>
    export default {
        name: "LibrosComponent",
        props: ['idlibro'],
        data(){
            return {
                libro: "",
                capitulos: ''
            }
        },
        mounted(){
            axios.get('/libro').then((response) => {
                this.libro = _.reduce(_.filter(response.data, {id: this.idlibro}));
            });
            axios.get('/capitulo').then((response) => {
                this.capitulos = _.filter(response.data, {id_libro: this.idlibro});
            });
        }

    }
</script>

<style scoped>

</style>