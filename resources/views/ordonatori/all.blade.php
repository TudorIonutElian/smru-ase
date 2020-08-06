@extends('app')

@section('index')
    <div class="container">
        <div class="row mt-3">
            <div class="col-3">
                <div class="row">
                    <div class="col-12 bg-primary p-2 text-white">Lista Ordonatorilor pe regiuni</div>
                </div>
                <div class="row">
                    <div class="col-12">Ordonator 1</div>
                    <div class="col-12">Ordonator 1</div>
                    <div class="col-12">Ordonator 1</div>
                    <div class="col-12">Ordonator 1</div>
                    <div class="col-12">Ordonator 1</div>
                    <div class="col-12">Ordonator 1</div>
                    <div class="col-12">Ordonator 1</div>
                </div>
                <div class="row">
                    <div class="col-12 bg-primary p-2 text-white">Lista Ordonatorilor pe judete</div>
                </div>
                <div class="row">
                    <div class="col-12">Ordonator 1</div>
                    <div class="col-12">Ordonator 1</div>
                    <div class="col-12">Ordonator 1</div>
                    <div class="col-12">Ordonator 1</div>
                    <div class="col-12">Ordonator 1</div>
                    <div class="col-12">Ordonator 1</div>
                    <div class="col-12">Ordonator 1</div>
                </div>
                <div class="row">
                    <div class="col-12 bg-primary p-2 text-white">Lista Ordonatorilor pe localitati</div>
                </div>
                <div class="row">
                    <div class="col-12">Ordonator 1</div>
                    <div class="col-12">Ordonator 1</div>
                    <div class="col-12">Ordonator 1</div>
                    <div class="col-12">Ordonator 1</div>
                    <div class="col-12">Ordonator 1</div>
                    <div class="col-12">Ordonator 1</div>
                    <div class="col-12">Ordonator 1</div>
                </div>
            </div>
            <div class="col-9">
                <div class="row division-flex">
                    <div class="col-2">
                        <img src="{{ asset('img/plus.png') }}" class="card-img-top mt-4" alt="...">
                    </div>
                    <div class="col-10">
                        <h3>Adaugare <span class="span-badge">Ordonator de credite</span></h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 m-4">
                        <adaugare-ordonator></adaugare-ordonator>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
