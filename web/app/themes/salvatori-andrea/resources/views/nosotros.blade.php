{{--
  Template Name: Pagina de nosotros
--}}

@extends('layouts.app')

@section('content')
@while(have_posts()) @php the_post() @endphp
@include('partials.page-header')
@include('partials.content-page')
@endwhile
<div class="contenedor-padre-nosotros">
  <div class="contenedor-titulo-nosotros animate fadeInUp">
      <h3>Quienes somos</h3>
      <p>Transblind 360, C.A., presta servicios de transporte ejecutivo seguro para el mercado venezolano desde el año 2015, con una experiencia exitosa, reflejada en la satisfacción de nuestros clientes.</p>
  </div>
  <div class="contenedor-cuadro-primario columns is-multiline is-paddingless animate fadeInUp">

      @if(have_rows('contenido_mision_nosotros', 12))
      {{-- loop through the rows of data --}}
      @while (have_rows('contenido_mision_nosotros', 12))@php(the_row())
    <div class="contenedor-texto-left column is-6">
      <h3>{{ get_sub_field('titulo-mision-nosotros') }}</h3>
      <p>{{ get_sub_field('contenido_mision_nosotros') }}</p>
    </div>
    <div class="contenedor-img-right column is-6" style="background: url('{{ get_sub_field('imagen_mision_nosotros') }}'); border-radius: 6px; background-repeat: no-repeat; background-size: cover; height: 400px;"></div>  
    @endwhile 
    @else      
    @endif
  </div>

  <div class="contenedor-cuadro-secundario columns is-multiline is-paddingless animate fadeInUp">
      @if(have_rows('contenido_vision_nosotros', 12))
      @while (have_rows('contenido_vision_nosotros', 12))@php(the_row())
    <div class="contenedor-img-left column is-6" style="background: url('{{ get_sub_field('imagen_vision_nosotros') }}');border-radius: 6px; background-repeat: no-repeat; background-size: cover;  height: 400px;"></div>
    <div class="contenedor-texto-right column is-6">
        <h3>{{ get_sub_field('titulo-vision-nosotros') }}</h3>
        <p>{{ get_sub_field('contenido_vision_nosotros') }}</p>  
    </div>

    @endwhile 
    @else      
    @endif
  </div>

  <div class="contenedor-padre-nuestro-valores is-multiline columns is-paddingless">
    <div class="contenedor-tarjeta-valores column is-5 animate fadeInUp">
      @if(have_rows('nuestros_valores', 12))
        @while (have_rows('nuestros_valores', 12))@php(the_row())
          <div class="contenedor-hijo-tarjeta-valores">
              <span>{{ get_sub_field('titulo_nuestro_valores') }}</span>
              <p>{{ get_sub_field('extracto_nuestros_valores') }}</p>   
          </div>
        @endwhile 
        @else      
      @endif
    </div>

    <div class="contenedor-padre-descrip-valores column is-7 is-paddingless animate fadeInUp">
      <div class="contenedor-tarjetas columns is-multiline">
        @if(have_rows('detalle_nuestros_valores', 12))
        @while (have_rows('detalle_nuestros_valores', 12))@php(the_row())
        <div class="tarjeta-descrip-valores column is-4">
          <div class="contendor-img-valores">
            <img src="{{ get_sub_field('imagen_nuestros_valores') }}" alt="">
          </div>
          <div class="contendor-descrip-valores">
              <h3>{{ get_sub_field('titulo_detalle_nuestros_valores') }}</h3>
              <p>{{ get_sub_field('extracto_detalle_nuestros_valores') }}</p>
          </div>
        </div>
        @endwhile 
        @else      
      @endif
      </div>
    </div>
  </div>

  <div class="contenedor-padre-conocer-nuestro-servicios animate fadeInUp">
    <div class="contenedor-title-nuestro-servicio ">
      <h4>¡Conozca nuestros servicios!</h4>
      <p>Nuestra prioridad es alcanzar la excelencia en todos los servicios, poniendo atencion a los mas pequeños detalles en el control de la calidad de sus procesos y equipos, logrando una experiencia placentera para nuestros pasajeros</p>
    </div>
    <div class="contenedor-boton-ir-servicios">
      <a href="/nuestros-servicios/" class="ver-servicios">Ver servicios</a>
    </div>
  </div>
</div>
@endsection