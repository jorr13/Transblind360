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
    <div class="contenedor-texto-left column is-6">
      <h3>Mision</h3>
      <p>Ofrecer servicios y productos para el manejo integral de valores y riesgos asociados, con seguridad, confort y respaldo, en un marco de principios éticos, y a través del mejoramiento continuo, agregar valor a nuestros clientes.</p>
    </div>
    <div class="contenedor-img-right column is-6" style="background: url('{{ home_url('app/uploads/2018/09/portada.jpg') }} '); background-repeat: no-repeat; background-size: cover; height: 400px;"></div>  
  </div>
  <div class="contenedor-cuadro-secundario columns is-multiline is-paddingless animate fadeInUp">
    <div class="contenedor-img-left column is-6" style="background: url('{{ home_url('app/uploads/2018/09/portada.jpg') }} '); background-repeat: no-repeat; background-size: cover;  height: 400px;"></div>
    <div class="contenedor-texto-right column is-6">
      <h3>Vision</h3>
      <p>Ser líderes a escala nacional, saber manejar los posibles riesgos asociados a los servicios; sustentados en la capacitación y mística de nuestro personal, la calidad de los servicios, que permiten garantizar nuestra solidez.</p>
    </div>
  </div>

  <div class="contenedor-padre-nuestro-valores is-multiline columns is-paddingless">
    <div class="contenedor-tarjeta-valores column is-5 animate fadeInUp">
      <div class="contenedor-hijo-tarjeta-valores">
        <h3>nuestros valores</h3>
        <p>En Transblind 360, C.A. promovemos y nos comprometemos con valores específicos que caracterizan nuestros servicios, con la convicción de cumplir con las demandas de nuestros clientes.</p>
      </div>
      
    </div>
    <div class="contenedor-padre-descrip-valores column is-7 is-paddingless animate fadeInUp">
      <div class="contenedor-tarjetas columns is-multiline">

      <div class="tarjeta-descrip-valores column is-4">
          <div class="contendor-img-valores">
            <img src="{{ home_url('app/uploads/2018/09/seguridad.png') }}" alt="">
          </div>
          <div class="contendor-descrip-valores">
            <h3>Seguridad</h3>
            <p>Nos enorgullecemos por mantener la seguridad de nuestros clientes</p>
          </div>
        </div>
  
        <div class="tarjeta-descrip-valores column is-4">
          <div class="contendor-img-valores">
            <img src="{{ home_url('app/uploads/2018/09/foco.png') }}" alt="">
          </div>
          <div class="contendor-descrip-valores">
            <h3>Foco en el cliente</h3>
            <p>Entendemos y nos anticipamos a satisfacer las necesidades de nuestros clientes</p>
          </div>
        </div>
  
        <div class="tarjeta-descrip-valores column is-4">
          <div class="contendor-img-valores">
            <img src="{{ home_url('app/uploads/2018/09/integridad.png') }}" alt="">
          </div>
          <div class="contendor-descrip-valores">
            <h3>Integridad</h3>
            <p>Siempre mantenemos un trato cordial y respetuoso con nuestros clientes</p>
          </div>
        </div>
  
        <div class="tarjeta-descrip-valores column is-4">
          <div class="contendor-img-valores">
            <img src="{{ home_url('app/uploads/2018/09/compromiso.png') }}" alt="">
          </div>
          <div class="contendor-descrip-valores">
            <h3>Compromiso</h3>
            <p>Mantenemos un ambiente confortable, comprometidos siempre con el tiempo de nuestros clientes</p>
          </div>
        </div>
  
        <div class="tarjeta-descrip-valores column is-4">
          <div class="contendor-img-valores">
            <img src="{{ home_url('app/uploads/2018/09/mejora.png') }}" alt="">
          </div>
          <div class="contendor-descrip-valores">
            <h3>Mejora Continua</h3>
            <p>Siempre estamos en búsqueda de optimizar nuestros servicios, garantizando así la comodidad del cliente</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="contenedor-padre-conocer-nuestro-servicios animate fadeInUp">
    <div class="contenedor-title-nuestro-servicio ">
      <h3>¡Conozca nuestros servicios!</h3>
      <p>Nuestra prioridad es alcanzar la excelencia en todos los servicios, poniendo atencion a los mas pequeños detalles en el control de la calidad de sus procesos y equipos, logrando una experiencia placentera para nuestros pasajeros</p>
    </div>
    <div class="contenedor-boton-ir-servicios">
      <a href="/nuestros-servicios/" class="ver-servicios">Ver servicios</a>
    </div>
  </div>
</div>
@endsection