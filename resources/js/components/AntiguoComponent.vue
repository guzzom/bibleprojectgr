<template>

    <div>
        <h1 class="text-center">
            Antiguo testamento
            <a type="button" href="/" class="btn btn-warning">Home</a>

        </h1>
        <div class="row">
            <div v-for="libro in libros_antiguo" class="card text-white bg-primary col-3" >
                    <div class="card-body">
                        <h4 class="card-title">{{libro.nombre}}</h4>
                        <p>Autor: {{libro.autor}}</p>
                        Porcentaje leído:
                        <div class="progress">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 50%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div><br/>
                        <a class="btn btn-success btn-lg btn-block" v-bind:href="'/libros/' + libro.id">Leer</a><br/>


                    </div>
            </div>
        </div>
    </div>


</template>

<script>
    export default {
        name: "AntiguoComponent",
        data(){
            return {
                libros_antiguo: [{
                    'id' : 1,
                    'nombre' : 'Génesis',
                    'autor' : 'Moisés'
                },{
                    'id' : 2,
                    'nombre' : 'Éxodo',
                    'autor' : 'Moisés'
                },{
                    'id' : 3,
                    'nombre' : 'Levítico',
                    'autor' : 'Moisés'
                },{
                    'id' : 4,
                    'nombre' : 'Deuterenomio',
                    'autor' : 'Moisés'
                },{
                    'id' : 5,
                    'nombre' : 'Números',
                    'autor' : 'Moisés'
                }
                ]
            }
        }
    }
</script>

<style scoped>

</style>