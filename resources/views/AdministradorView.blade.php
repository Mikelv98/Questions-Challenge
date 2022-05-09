@extends('plantilla')
@extends('layouts.app')

@section('content')
    <section id="Administrador">
        <h1 class="titulo">Administrador</h1>
    </section>
    <button href="{{ route('logout') }}" onclick="event.preventDefault();
    this.closest('form').submit();">
{{ __('Cerrar Sesión') }}
</button>
@endsection
