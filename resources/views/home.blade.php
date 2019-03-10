@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-center">Datos del pagador</div>

                <div class="card-body">

                  <div class="row">
                    <div class="col">
                      <p class="h3 text-center" > Datos del comprador </p>

                      <div class="form-group">
                        <label for="">Nombre completo</label>
                        <input type="text" class="form-control" name="full-name" value="">
                      </div>

                      <div class="form-group">
                        <label for="">Email del comprador</label>
                        <input type="email" class="form-control" name="email" value="">
                      </div>

                      <div class="form-group">
                        <label for="">Teléfono</label>
                        <input type="text" class="form-control" name="cell-phone" value="">
                      </div>
                      <div class="form-group">
                        <label for="">Dirección</label>
                        <input type="text" class="form-control" name="address" value="">
                      </div>
                      <button type="button" class="btn btn-secondary btn-block" onclick="history.back()" name="button">Volver</button>
                    </div>
                    <div class="col">
                      <p class="h3 text-center"> Datos de la compra </p>

                      <div class="form-group">
                        <label for="">Referencia</label>
                        <input type="text" class="form-control" name="" value="{{ $reference }}" readonly>
                      </div>
                      <div class="form-group">
                        <label for="">Valor </label>
                        <input type="text" class="form-control" name="" value="${{$price}}" readonly>
                      </div>
                      <div class="form-group">
                        <label for="">Iva <span class="text-danger">(19%)</span></label>
                        <input type="text" class="form-control" name="" value="${{$iva}}" readonly>
                      </div>
                      <div class="form-group">
                        <label for="">Total a pagar</label>
                        <input type="text" class="form-control" name="" value="${{ $total }}" readonly>
                      </div>
                      <termins></termins>

                    </div>
                  </div>




                </div>
            </div>
        </div>
    </div>
</div>


@endsection
