@extends('layouts.app')
@section('content')
    <div class="card bg-info text-white" style="width: 18rem;">
        <div class="card-body" style="color: black;">
            @if (auth()->check())
                <h5 class="card-title">Bienvenido, {{ auth()->user()->nombre }}! 😊</h5>
            @else
                <h5 class="card-title">Bienvenido a mi sitio web</h5>
                <p class="card-text">Para comenzar, por favor inicia sesión 😊</p>
            @endif
        </div>
    </div>
@endsection