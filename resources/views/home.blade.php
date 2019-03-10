@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-center">Datos del pagador</div>

                <div class="card-body">
                    <payer :commerce_name="{{json_encode( config('app.commerce_name') )}}"

                    :reference="{{json_encode($reference)}}"

                    :price="{{json_encode($price)}}"

                    :iva="{{json_encode($iva)}}"

                    :total="{{json_encode($total)}}" ></payer>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
