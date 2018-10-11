@extends('layouts.app')

@section('content')
@include('partials.page-header')
<div class="contenedor-padre-articulo">
    @while(have_posts()) @php the_post() @endphp
        @include('partials.content-single-servicios'.get_post_type())
    @endwhile
</div>
<div class="contenedor-padre-detalles-del-servicio">
    <div class="contenedor-titulo-detalle-servicio">
        <h3>{{ get_field('titulo_servicio')}}</h3>
    </div>

    @if(have_rows('detalle_caracteristica'))
    <div class="contenedor-tarjetas columns is-multiline">
        @while(have_rows('detalle_caracteristica')) @php the_row() @endphp
        <div class="tarjeta-descrip-valores column is-2">
            <div class="contendor-img-valores">
                <img src="{{ get_sub_field('icono_caracteristica')}}" alt="">
            </div>
            <div class="contendor-descrip-valores">
                <h3>{{ get_sub_field('titulo_descripcion')}}</h3>
                <p>{{ get_sub_field('parrafo_descripcion')}}</p>
            </div>
        </div>
        @endwhile
    </div>
    @endif 
</div>
<div class="contenedor-padre-conocer-nuestro-servicios ">
    <div class="contenedor-title-nuestro-servicio ">
        <h3>si quieres contratar alguno de nuestros servicios primero debes registrarte</h3>
    </div>
    <div class="contenedor-boton-ir-servicios">
        <a href="" class="ver-servicios">Registrate</a>
    </div>
</div>
@endsection
