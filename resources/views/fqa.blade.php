@extends('layouts.app')

@section('content')

<div class="page-header">

   <p class="h1 text-center mt-5 mb-5">
      PREGUNTAS FRECUENTES SOBRE PAGOS ELECTRÓNICOS
    </p>

</div>

<div class="container">
    <div class="row justify-content-center">

        <div class="col-md-12">
            <div class="card">

                <div class="card-body">

                <!-- putting other section on this section with more sewntido -->

                      <div class="row">
                          <div class="col-4">
                            <div class="list-group" id="list-tab" role="tablist">
                              {{-- Section de una nueva pregunta --}}
                              <a class="list-group-item list-group-item-action active" id="list-about-list" data-toggle="list" href="#list-about" role="tab" aria-controls="about">
                                <p class="h3" >¿Qué es <span >Place<span class="text-success" >to</span>Pay</span>? </p>
                              </a>
                              {{-- Section de una nueva pregunta --}}
                              <a class="list-group-item list-group-item-action" id="list-howto-list" data-toggle="list" href="#list-howto" role="tab" aria-controls="howto">
                                <p class="h3" >¿Cómo puedo pagar?</p>
                              </a>
                              {{-- Section de una nueva pregunta --}}
                              <a class="list-group-item list-group-item-action" id="list-date-secure-list" data-toggle="list" href="#list-date-secure" role="tab" aria-controls="date-secure">
                                <p class="h3">¿Es seguro ingresar mis datos bancarios en este sitio web?</p>
                              </a>
                              {{-- Section de una nueva pregunta --}}
                              <a class="list-group-item list-group-item-action" id="list-can-i-list" data-toggle="list" href="#list-can-i" role="tab" aria-controls="can-i">
                                <p class="h3" >¿Puedo realizar el pago cualquier día y a cualquier hora?</p>
                              </a>
                              {{-- Section de una nueva pregunta --}}
                              <a class="list-group-item list-group-item-action" id="list-can-i-change-list" data-toggle="list" href="#list-can-i-change" role="tab" aria-controls="can-i-change">
                                <p class="h3">¿Puedo cambiar la forma de pago?</p>
                              </a>
                              {{-- Section de una nueva pregunta --}}
                              <a class="list-group-item list-group-item-action" id="list-pay-through-additional-list" data-toggle="list" href="#list-pay-through-additional" role="tab" aria-controls="pay-through-additional"  >
                                <p class="h3" >¿Pagar electrónicamente tiene algún valor para mí como comprador?</p>
                              </a>
                              {{-- Section de una nueva pregunta --}}
                              <a class="list-group-item list-group-item-action" id="list-need-to-do-list" data-toggle="list" href="#list-need-to-do" role="tab" aria-controls="need-to-do"  >
                                <p class="h3" >¿Qué debo hacer si mi transacción no concluyó?</p>
                              </a>
                              {{-- Section de una nueva pregunta --}}
                              <a class="list-group-item list-group-item-action" id="list-by-every-list" data-toggle="list" href="#list-by-every" role="tab" aria-controls="by-every"  >
                                <p class="h3" >¿Qué debo hacer si no recibí el comprobante de pago?</p>
                              </a>

                            </div>
                          </div>

                          {{-- Contenido que responde cada frespuesta a su correspondiente pregunta  --}}
                            <div class="col-8">
                              <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active pr-4" id="list-about" role="tabpanel" aria-labelledby="list-about-list">
                                  <p class="text-justify" >
                                    <b class="text-muted" >Place<span class="text-success" >to</span>Pay</b> es la plataforma de pagos electrónicos que usa <b class="text-muted" >{{ config('app.commerce_name') }}</b> para procesar en línea las transacciones generadas en la tienda virtual con las formas de pago habilitadas para tal fin.
                                  </p>
                                </div>
                                <div class="tab-pane fade pr-4" id="list-howto" role="tabpanel" aria-labelledby="list-howto-list">
                                  <p class="text-justify">En la tienda virtual de <b class="text-muted" >{{ config('app.commerce_name') }}</b> usted podrá realizar su pago con los medios habilitados para tal fin. Usted, de acuerdo a las opciones de pago escogidas por el comercio, podrá pagar a través <b>de PSE (débitos desde cuentas de ahorros y corrientes en Colombia), tarjetas de crédito Visa, MasterCard, American Express, Credencial y Diners; Tarjeta Éxito, Tarjeta Alkosto,  débitos internacionales a través de Safety Pay o acercándose a un punto de Western Union en cualquier lugar del mundo</b>.</p>
                                  <p class="text-justify">Además, si el comercio lo dispone así, podrá pagar en efectivo (Cajas de Almacenes Éxito, Carulla, Surtimax y Super Inter), además de PayPal e IVR <b class="text-muted">Place<span class="text-success" >to</span>Pay</b>.</p>

                                </div>
                                {{-- --}}
                                <div class="tab-pane fade pr-4" id="list-date-secure" role="tabpanel" aria-labelledby="list-date-secure-list">
                                  <p class="text-justify" >Para proteger tus datos <b class="text-muted" >{{ config('app.commerce_name') }}</b> delega en <b class="text-muted">Place<span class="text-success" >to</span>Pay</b> la captura de la información sensible. Nuestra plataforma de pagos cumple con los más altos estándares exigidos por la norma internacional PCI DSS de seguridad en transacciones con tarjeta de crédito. Además tiene certificado de seguridad SSL expedido por GeoTrust una compañía Verisign, el cual garantiza comunicaciones seguras mediante la encriptación de todos los datos hacia y desde el sitio; de esta manera te podrás sentir seguro a la hora de ingresar la información de su tarjeta.</p>

                                  <p class="text-justify">Durante el proceso de pago, en el navegador se muestra el nombre de la organización autenticada, la autoridad que lo certifica y la barra de dirección cambia a color verde. Estas características son visibles de inmediato y dan garantía y confianza para completar la transacción en <b class="text-muted">Place<span class="text-success">to</span>Pay</b>.</p>

                                  <p class="text-justify" ><b class="text-muted" >Place<span class="text-success">to</span>Pay</b> también cuenta con el monitoreo constante de McAfee Secure y la firma de mensajes electrónicos con Certicámara.</p>

                                </div>
                                {{-- section de nueva frespuesta a preguntas frecuentes acerca de pagos frecuentes --}}
                                <div class="tab-pane fade pr-4" id="list-can-i" role="tabpanel" aria-labelledby="list-can-i-list">
                                  <p class="text-justify" >Sí, en <b class="text-muted" >{{ config('app.commerce_name') }}</b> podrás realizar tus compras en línea los 7 días de la semana, las 24 horas del día a sólo un clic de distancia.</p>
                                </div>
                                {{-- section de un nuevo contenido acerca de varias preguntas --}}
                                <div class="tab-pane fade pr-4" id="list-can-i-change" role="tabpanel" aria-labelledby="list-can-i-change-list">
                                  <p class="text-justify" >Si aún no has finalizado tu pago, podrás volver al paso inicial y elegir la forma de pago que prefieras. Una vez finalizada la compra no es posible cambiar la forma de pago.</p>
                                  {{-- section that responsed to a fq this like can i change bla bla bla  --}}
                                </div>
                                {{-- section that responsed to a fq this like can i change bla bla bla  --}}

                                <div class="tab-pane fade pr-4" id="list-pay-through-additional" role="tabpanel" aria-labelledby="list-pay-through-additional-list">
                                  <p class="text-justify" >No, los pagos electrónicos realizados a través de <b class="text-muted" >Place<span class="text-success" >to</span>Pay</b> no generan costos adicionales para el comprador.</p>
                                </div>

                                {{-- section que responde a una de las preguntas frecuentes --}}

                                <div class="tab-pane fade pr-4" id="list-need-to-do" role="tabpanel" aria-labelledby="list-need-to-do-list"  >
                                  <p class="text-justify" >En primera instancia, revisar si llegó un email de confirmación de la transacción a la cuenta de correo electrónico inscrita en el momento de realizar el pago, en caso de no haberlo recibido, deberás contactar a <b class="text-muted" >{{ config('app.commerce_manager') }}</b> para confirmar el estado de la transacción. </p>
                                </div>
                                {{-- section que responde la última pregunta frecuente según la documentación  --}}
                                <div class="tab-panl fade pr-4" id="list-by-every" role="tabpanel" aria-labellebdy="list-by-every-list" >
                                  <p class="text-justify" >Por cada transacción aprobada a través de <b class="text-muted" >Place<span class="text-success" >to</span>Pay</b>, recibirás un comprobante del pago con la referencia de compra en la dirección de correo electrónico que indicaste al momento de pagar.</p>

                                  <p class="text-justify" >Si no lo recibes, podrás contactar a <b class="text-muted" >{{ config('app.commerce_manager') }}</b> o a la línea <b class="text-muted" >{{ config('app.commerce_phone_number') }}</b> o al correo electrónico <b class="text-muted" >{{ config('app.commerce_email') }}</b>, para solicitar el reenvío del comprobante a la misma dirección de correo electrónico registrada al momento de pagar. </p>
                                </div>


                              </div>
                            </div>
                        </div>

                  </div>
            </div>
        </div>
    </div>
</div>
@endsection
