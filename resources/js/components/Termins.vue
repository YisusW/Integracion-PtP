<template>

  <div>

      <button type="button" class="btn btn-success btn-block" name="button" data-toggle="modal" data-target="#Terms-to-Pay">Pagar</button>
      <!-- Modal -->
      <div class="modal fade" id="Terms-to-Pay" tabindex="-1" role="dialog" aria-labelledby="Terms-Title" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title text-center" id="Terms-Title">Términos</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">

              <div class="alert alert-info" v-show="!termins">
                <strong>Ups!</strong> Debes aceptar los terminos para continuar con el pago
              </div>

              <p>Cualquier persona que realice un compra en el sitio base_url, actuando libre
              y voluntariamente, autoriza a <b class="text-muted" >{{commerce_name}}</b>, a través del proveedor del servicio
              EGM Ingeniería Sin Fronteras S.A.S y/o Place to Pay para que consulte y solicite
              información del comportamiento crediticio, financiero, comercial y de servicios a
              terceros</p>

              <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" v-model="termins" required id="customCheck1">
                <label class="custom-control-label" for="customCheck1">Aceptar</label>
              </div>

            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
              <button type="button" class="btn btn-primary" v-on:click="validate_acept">Continuar</button>
            </div>
          </div>
        </div>
      </div>
  </div>

</template>

<script>
    export default {
      props : ['commerce_name'],
        data :function() {
          return {
            termins : false
          }
        },
        mounted() {

        },
        methods :{
          /* se valida si la variable termns esta true para seguir realizando el proceso de pago  */
          validate_acept : function(){

            if (this.termins == false) {
               return false;
            } else {
                $("#Terms-to-Pay").modal('toggle')
                this.$emit('terms-checked');
            }

          }
        }
    }
</script>
