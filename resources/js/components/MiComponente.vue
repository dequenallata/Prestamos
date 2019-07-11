<template>
  <div class="row justify-content-center">
        <div class="col-md-8">
            
            <form-component @new="agregarpensamiento"></form-component>
            
            <ejemplo-component  
            v-for="(pensamiento,index) in pensamientos" 
            :key="pensamiento.id" 
            :pensamiento="pensamiento"
            @actualizar="actualizarpensamiento(index, ...arguments)"
            @borrar="borrarpensamiento(index)"
            ></ejemplo-component>

        </div>
    </div>
    
</template>

<script>
    export default {
      
        data(){
            return{
                pensamientos:[]
            };

        },
        mounted() {
            // console.log('Component mounted.')
            axios.get('/pensamientos').then((response) => {
                this.pensamientos =response.data;
            });
        },
        methods:{
            agregarpensamiento(pensamiento){
               
                this.pensamientos.push(pensamiento);
            },
             borrarpensamiento(index){
               
                this.pensamientos.splice(index,1);
            },
             actualizarpensamiento(index, pensamiento){
               
                this.pensamientos[index]=pensamiento;
            }
        }
    }
</script>