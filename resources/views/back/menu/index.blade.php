@extends('layouts.back.app')
@section('title')
    Menú
@endsection

@section('styles')
    <link rel="stylesheet" href="{{ asset('assets/back/matrix-admin-bootstrap5/extra-libs/nestable/jquery.nestable.css') }}">
@endsection

@section('scriptsPlugins')
    <script src="{{ asset('assets/back/matrix-admin-bootstrap5/extra-libs/nestable/jquery.nestable.js') }}"></script>
@endsection

@section('scripts')
    <script src="{{ asset('assets/back/matrix-admin-bootstrap5/js/scripts/menu/index.js') }}"></script>
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12">
            @if ($mensaje = session('mensaje'))
                <x-alert type="success" :message="$mensaje" />
            @endif
            <div class="card">
                <div class="card-header bg-info">
                    <h5 class="text-white float-start">Menús</h5>
                    <a href="{{ route('menu.create') }}" class="btn btn-outline-light btn-sm float-end">Crear</a>
                </div>
                <div class="card-body">
                    @csrf
                    <div class="dd" id="nestable">
                        <ol class="dd-list">
                            @foreach ($menus as $key => $item)
                                @if ($item['menu_id'] != null)
                                    break;
                                @endif
                                @include('back.menu.menu-item', ['item' => $item])
                            @endforeach
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
