<template>
    <div class="card">
                <div class="card-header">Que estamos pensando Ahora?</div>

                <div class="card-body">
                    <!-- @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif -->

                    <form action="" v-on:submit.prevent="nuevopensamiento()">
                        <div class="form-group">
                            <label for="pensamiento">Ahora estoy pensando en:</label>
                            <input type="text" class="form-control" name="pensamiento" v-model="descripcion">
                        </div>
                        <button type="submit" class="btn btn-primary" >Enviar Pensamiento</button>
                    </form>
                </div>
            </div>
</template>

<script>
    export default {
        data(){
            return{
                descripcion:''
            }
        },
        mounted() {
            console.log('Component mounted.')
        },
        methods:{
            nuevopensamiento(){

                const params= {
                    descripcion: this.descripcion
                }
                    this.descripcion = '';
                    
                axios.post('/pensamientos',params)
                .then((response) => {

                    const pensamiento = response.data;
                    this.$emit('new', pensamiento);
                
                });           
             
            }
        }
    }
</script>