{{--
  Template Name: Pagina de Servicios
--}}

@extends('layouts.app')

@section('content')
@while(have_posts()) @php the_post() @endphp
@include('partials.page-header')
@include('partials.content-page')
@endwhile
<div class="contenedor-padre-servicios">
    <div class="contenedor-title-servicios animate fadeInUp">
        <h3>Nuestros servicios</h3>
        <p>Servicios de transporte ejecutivo seguro para el mercado venezolano desde el año 2015, con una experiencia exitosa, reflejada en la satisfaccion de nuestros clientes</p>
    </div>
    <div class="conte-servicios columns is-multiline">   
        @foreach ($servicios_loop as $servicios)
        <div class="contenedor-padre-tarjeta column is-4 animate fadeInUp">
            <div class="contenedortarjeta ">
                <div class="img-noticias" style="background:url('{{$servicios['thumbnail']}}'); height:200px; background-size:cover; border-radius: 6px 6px 0px 0px;"></div>
                <div class="contenido-pasos ">
                    <h2 class="titulo">{{$servicios['title']}}</h2>
                    <p class="resumen">{!! $servicios['resumen'] !!}</p>   
                    <a class="boton-registrar" href="{{$servicios['link']}}">Leer mas</a>
                </div> 
            </div>
        </div>
        @endforeach
    </div>
</div>
<div class="contenedor-padre-conocer-nuestro-servicios animate fadeInUp">
        <div class="contenedor-title-nuestro-servicio ">
            <h3>si quieres contratar alguno de nuestros servicios primero debes registrarte</h3>
        </div>
        <div class="contenedor-boton-ir-servicios">
            <a href="" class="ver-servicios">Registrate</a>
        </div>
    </div>
@endsection 
