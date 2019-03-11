<template>

    <div>

      <div class="row d-flex justify-content-center">
        <div class="alert alert-warning" v-show="!message">
          <strong>Ups!</strong> <span v-text="text_message" ></span>
        </div>
      </div>

    <div class="row">

      <div class="col">

        <p class="h3 text-center" > Datos del pagador </p>

        <div class="form-group">
          <label for=""> País </label>
          <select v-model="country_form" class="form-control" @change="search_type_document_and_method" >
            <option value="">Selecciona</option>
            <option v-for="value in country_list"
                    :value="value.id">{{ value.name }} </option>
          </select>
        </div>

        <div class="form-group">
          <label for=""> Tipo de documento </label>
          <select class="form-control" name="" v-model="type_document_form">
            <option value="">Selecciona</option>
            <option v-for="value in type_do_list"
                    :value="value.code">{{ value.description }} </option>
          </select>
        </div>

        <div class="form-group">
          <label for=""> Documento de identidad </label>
          <input type="text" class="form-control" name="" value="" v-model="document_form" >
        </div>

        <div class="form-group">
          <label for="">Metodo de pago</label>
          <select class="form-control" name="" v-model="method_payment_form" >
            <option value="">Selecciona</option>
            <option v-for="value in payment_list"
                    :value="value.code">{{ value.description }} </option>
          </select>
        </div>

        <div class="form-group">
          <label for="">Nombre completo</label>
          <input type="text" class="form-control" name="full-name" v-model="full_name" value="">
        </div>

        <div class="form-group">
          <label for="">Email del pagador</label>
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
            text_message : "debes completar el formulario",
            country_list : {},
            payment_list : {},
            type_do_list : {},
            country_form : "",
            document_form : "",
            type_document_form : "",
            method_payment_form : ""
          }
        },
        components: {
          Termins
        },
        mounted() {

          this.getCountry();

        },
        methods :{
          /* funcion encargada de consultar los paises registrados en la base de datos */
          getCountry : function(){

            axios.get( '/getCountries' ).then( (response) => {

              if ( response.data.status == true ) {
                this.country_list = response.data.countries
              }

            })

          },
          /* se detona con un emit que proviene de el componente Terms que se incluye al principio del componente */
          validate_payer : function (){

              if (this.full_name == ""){
                this.text_message = "Debes agregar un nombre completo."
                return false
              }
              if (this.cellphone == ""){
                this.text_message = "Debes agregar un número de teléfono."
                return false
              }
              if (this.email == ""){
                this.text_message = "Debes agregar un correo electrónico."
                return false
              }
              if (this.address == ""){
                this.text_message = "Debes agregar una dirección."
                return false
              }
              if (this.country_form == ""){
                this.text_message = "Debes seleccionar uno de los paises."
                return false
              }
              if (this.document_form == ""){
                this.text_message = "Debes escribir  tu documento de identidad."
                return false
              }
              if (this.type_document_form == ""){
                this.text_message = "Debes seleccionar un tipo de documento."
                return false
              }
              if (this.method_payment_form == ""){
                this.text_message = "Debes seleccionar algún medio de pago."
                return false
              }

              this.message = true
              this.send_form_payer()
          },

          send_form_payer : function (){
            /* se establece el request para realizar la creacion de la session en la pasarela de pago */

            let from = {
              payer :{
                      name : this.full_name ,
                      mobile : this.cellphone ,
                      email     : this.email ,
                      address   : this.address,
                      documentType : this.type_document_form,
                      document : this.document_form
                      },
              payment:{
                      country   : this.country_form,
                      reference : this.reference,
                      price     : this.total,
                      paymentmethod : this.method_payment_form
                      }
              }

            axios.post( '/createSession' , from ).then( (response) => {
              if ( response.data.status == 1 ) {

              } else {

              }
            });

          },
          /* esta  funcion se encarga de devolver la informacion acerca del pais seleccionado */
          search_type_document_and_method : function (){


            axios.post( '/getMethodsandTypeDocument' ,  { country_id : this.country_form } ).then( (response) => {

              if ( response.data.status == true ) {
                this.payment_list = response.data.methods
                this.type_do_list = response.data.type_docucment
              }

            });

          }

        }
    }
</script>
