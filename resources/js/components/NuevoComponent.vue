<template>
    <div>

        <h1 class="text-center">
            Nuevo testamento
            <a type="button" href="/" class="btn btn-warning">Home</a>

        </h1>
        <div class="row">
            <div v-for="libro in libros_nuevo" class="card text-white bg-primary col-3" >
                <div class="card-body">
                    <h4 class="card-title">{{libro.nombre}}</h4>
                    <p>Autor: {{libro.autor}}</p>
                    Porcentaje leído:
                    <div class="progress">
                        <div class="progress-bar bg-info" role="progressbar" style="width: 50%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div><br/>
                    <button class="btn btn-success btn-lg btn-block">Leer</button><br/>


                </div>
            </div>
        </div>

    </div>
</template>

<script>
    export default {
        name: "NuevoComponent",
        data(){
            return {
                libros_nuevo: [{
                    'id' : 1,
                    'nombre' : 'Mateo',
                    'autor' : 'Moisés'
                },{
                    'id' : 1,
                    'nombre' : 'Marcos',
                    'autor' : 'Moisés'
                },{
                    'id' : 1,
                    'nombre' : 'Lucas',
                    'autor' : 'Moisés'
                },{
                    'id' : 1,
                    'nombre' : 'Juan',
                    'autor' : 'Moisés'
                }]
            }
        }
    }
</script>

<style scoped>

</style>