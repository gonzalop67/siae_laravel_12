@extends('theme.' . $theme . '.layouts.back.app')
@section('title')
    Sistema Menús
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            @if ($message = session('mensaje'))
                <x-alert type="success" :message="$message" />
            @endif
            @if ($errors->any())
                <x-alert type="danger" :message="$errors" />
            @endif
            <div class="card">
                <div class="card-header bg-success">
                    <h5 class="text-white float-start">Editar Menu: {{$data->nombre}}</h5>
                    <a href="{{ route('menu') }}" class="btn btn-outline-light btn-sm float-end">Volver al listado</a>
                </div>
                <form action="{{ route('menu.update', $data->id) }}" id="form-general" class="form-horizontal" method="post">
                    @csrf @method('put')
                    <input type="hidden" name="menu_id" value="{{ $data->id }}">
                    <div class="card-body">
                        @include('theme.' . $theme . '.back.menu.form')
                    </div>
                    <div class="border-top">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-3"></div>
                                <div class="col-sm-5">
                                    <button type="submit" class="btn btn-success">Actualizar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('assets/back/' . $theme . '/js/scripts/menu/crear.js') }}"></script>
@endsection
