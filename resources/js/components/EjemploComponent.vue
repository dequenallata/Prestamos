<template>
    <div class="card">
                <div class="card-header">Publicado en :{{pensamiento.creado_el}}</div>

                <div class="card-body">
                
                <input v-if="editMode" type="text" class="form-control" v-model="pensamiento.descripcion">
                <p v-else>{{pensamiento.descripcion}}</p>
                </div>
                <div class="card-footer">
                <button v-if="editMode" class="btn btn-success" v-on:click="clickactualizar()">
                Guardar Cambios
                </button>
                <button v-else class="btn btn-default" v-on:click="clickeditar()">
                Editar
                </button>
                <button class="btn btn-danger" v-on:click="clickborrar()">
                Eliminar
                </button>
                </div>
    </div>
</template>

<script>
    export default {
          props:['pensamiento'],
        data(){
            return{
                // pensamiento:{
                //     'id':'',
                //     'descripcion':'',
                //     'creado_el':''
                // }
                editMode:false

            };

        },
        mounted() {
            console.log('Component mounted.')
        },
        methods:{
            clickborrar()
            {
                    // this.$emit('borrar');
                     axios.delete(`/pensamientos/${this.pensamiento.id}`).then(() => {
                    this.$emit('borrar');
                });
            },
            clickeditar()
            {
                    this.editMode=true;
            },
              clickactualizar()
            {
                    // this.editMode=false;
                    // this.$emit('actualizar',pensamiento)
                                    const params = {
                    descripcion: this.pensamiento.descripcion
                };
                axios.put(`/pensamientos/${this.pensamiento.id}`, params).then((response) => {
                    this.editMode = false;
                    const pensamiento = response.data;
                    this.$emit('actualizar', pensamiento);
                });
            }
        }

    }
</script>
