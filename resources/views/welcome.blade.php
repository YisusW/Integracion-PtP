@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Productos</div>

                <div class="card-body">
                  <div class="row">
                    @for ($i=0; $i < 9; $i++)
                      <product class="ml-3 mr-3 mb-3" ></product>
                    @endfor
                  </div>

                </div>
            </div>
        </div>
    </div>
</div>



@endsection
