<template>

    <div>

      <div class="row d-flex justify-content-center">
        <div class="alert alert-warning" v-show="!message">
          <strong>Ups!</strong> <span v-text="text_message" ></span>
        </div>
      </div>

    <div class="row">

      <div class="col">

        <p class="h3 text-center" > Datos del comprador </p>

        <div class="form-group">
          <label for="">Nombre completo</label>
          <input type="text" class="form-control" name="full-name" v-model="full_name" value="">
        </div>

        <div class="form-group">
          <label for="">Email del comprador</label>
          <input type="email" class="form-control" name="email" v-model="email" value="">
        </div>

        <div class="form-group">
          <label for="">Teléfono</label>
          <input type="text" class="form-control" name="cell-phone" v-model="cellphone" value="">
        </div>
        <div class="form-group">
          <label for="">Dirección</label>
          <input type="text" class="form-control" name="address" v-model="address" value="">
        </div>

        <button type="button" class="btn btn-secondary btn-block" onclick="history.back()" name="button">Volver</button>

      </div>

      <div class="col">
        <p class="h3 text-center"> Datos de la compra </p>

        <div class="form-group">
          <label for="">Referencia</label>
          <input type="text" class="form-control" name="" v-model="reference" readonly>
        </div>
        <div class="form-group">
          <label for="">Valor </label>
          <input type="text" class="form-control" name="" v-model="price" readonly>
        </div>
        <div class="form-group">
          <label for="">Iva <span class="text-danger">(19%)</span></label>
          <input type="text" class="form-control" name="" v-model="iva" readonly>
        </div>
        <div class="form-group">
          <label for="">Total a pagar</label>
          <input type="text" class="form-control" name="" v-model="total" readonly>
        </div>

        <Termins  :commerce_name="commerce_name" v-on:terms-checked="validate_payer" />

      </div>

    </div>

  </div>

</template>

<script>
    import Termins from './Termins'

    export default {
        props : ['commerce_name' , 'reference' , 'price' , 'iva' , 'total'],
        data :function() {
          return {
            cellphone: "",
            full_name: "",
            email    : "",
            address  : "",
            message  : false,
            text_message : "debes completar el formulario"
          }
        },
        components: {
          Termins
        },
        mounted() {

        },
        methods :{

          validate_payer : function (){

              if (this.full_name == ""){
                this.text_message = "Debes agregar un nombre completoo"
                return false
              }
              if (this.cellphone == ""){
                this.text_message = "Debes agregar un número de teléfono"
                return false
              }
              if (this.email == ""){
                this.text_message = "Debes agregar un correo electrónico"
                return false
              }
              if (this.address == ""){
                this.text_message = "Debes agregar una dirección"
                return false
              }
              this.send_form_payer()
          },

          send_form_payer : function (){
            /* se establece el request para realizar la creacion de la session en la pasarela de pago */

            let from = { cellphone : this.cellphone , full_name : this.full_name , email : this.email , address : this.address }

            axios.post( '/createSession' , from ).then( (response) => {
              if ( response.data.status == 1 ) {

              } else {

              }
            });

          }

        }
    }
</script>
