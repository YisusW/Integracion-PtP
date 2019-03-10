<template>

  <div class="card" style="width: 20rem;">
    <div class="card-body">
      <h5 class="card-title">Producto : {{ number_product }}</h5>
      <p class="card-text"> Precio : <span class="text-success" >${{precio}}</span></p>
      <form class="" action="/infoPayment" method="post">
        <input type="hdden" class="d-none" name="price" :value="precio">
        <button class="btn btn-primary btn-block" >Comprar</button>
      </form>
    </div>
  </div>

</template>

<script>
    //import Parent from './http/Http' ;
    axios.defaults.headers.common['X-CSRF-TOKEN'] = document.querySelector('meta[name="csrf-token"]').getAttribute('content')

    export default {
        data :function() {
          return {
            precio : 0,
            number_product : 0
          }
        },
        mounted() {
            this.number_product = this.getDinamicPrice(1 , 30);
            this.precio = this.getDinamicPrice(100000 , 2000000);
        },
        methods :{
          /* funcion para generar numeros de  manera  genéricas */
          getDinamicPrice : function (min , max){
            let number = Math.floor(Math.random() * (max - min)) + min;
            let n = String(number).replace(/\D/g, "");
            return n === '' ? n : Number(n).toLocaleString();
          },
          /* funcoin que se encarga de seleccionar un producto */
          select_product : function (){

            axios.post( '/infoPayment' , { price : this.precio } )
            .then( (response) => {
              console.log(response.data.status);
            })

          },
        }
    }
</script>
