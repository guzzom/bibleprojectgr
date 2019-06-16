<template>
    <div >
        <h1>Capítulo {{idcapitulo}} : {{titulo}}</h1>
        <div v-html="versiculos">
        {{versiculos}}
        </div>
    </div>
</template>

<script>
    export default {
        name: "CapitulosComponent",
        props: ['idlibro','idcapitulo'],
        data(){
            return{
                versiculos: '',
                titulo: '',
                test : ''
            }
        },
        mounted(){
            axios.get('/capitulo').then((response) => {

                this.titulo =  _.get(_.reduce(_.filter(response.data, { 'id_libro': this.idlibro, 'num_capitulo': this.idcapitulo })),'titulo');
                this.versiculos = '<br/>';

                var ver =  _.chain(response.data).reduce().get('versiculos').value();

                //Salto de linea
                for (var i = 0; i < ver.length; i++) {
                    this.versiculos += ver[i];
                    if(ver[i] === '\r'){
                        this.versiculos += '<br/>';
                    }
                }

            })
        }

    }
</script>

<style scoped>

</style>