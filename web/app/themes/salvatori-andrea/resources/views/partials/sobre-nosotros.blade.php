<div class="sobre-nosotros ">
    <div class="contenedor-titulo-principal animate fadeInUp">
        <h3>Conoce sobre nosotros</h3>
        <p>Nuestra prioridad es alcanzar la excelencia en todos los servicios, poniendo atencion a los mas pequeños detalles en el control de la calidad de sus procesos y equipos</p>
    </div>
    <div class="contenedor-padre-tarjeta-nosotros columns is-multiline animate fadeInUp">
        <div class="contenedor-padre-tres-tarjeta column is-7">
            <div class="contenedor-tres-tarjeta columns is-mobile is-12  is-paddingless">
                <a href="javascript:void(0)" id="que-hacemos" class="tres-tarjeta column is-4">
                    <span>que hacemos</span>
                </a>
                <a href="javascript:void(0)" id="porque" class="tres-tarjeta column is-4">
                    <span>porque lo hacemos</span>
                </a>
                <a href="javascript:void(0)" id="motiva" class="tres-tarjeta column is-4">
                    <span>que nos motiva</span>
                </a>
            </div>
            <div class="contenedor-padre-info-nosotros column is-12">


                @if(have_rows('contenido_mision', 82))
                {{-- loop through the rows of data --}}
                @while (have_rows('contenido_mision', 82))@php(the_row())
                <div class="contenedor-info-nosotros" id="mision" style="display:block;">
                    <h3>{{ get_sub_field('titulo_mision') }}</h3>
                    <p>{{ get_sub_field('extracto_de_la_mision') }} </p>
                    <a href="/nosotros/" class="boton-sobre-nosotros">mas sobre nosotros</a>
                </div>
                @endwhile 
                @else      
                @endif


                @if(have_rows('contenido_vision', 82))
                {{-- loop through the rows of data --}}
                @while (have_rows('contenido_vision', 82))@php(the_row())
                <div class="contenedor-info-nosotros" id="vision" style="display:none;">
                    <h3>{{ get_sub_field('titulo_vision') }}</h3>
                    <p>{{ get_sub_field('extracto_de_la_vision') }}</p>
                    <a href="/nosotros/" class="boton-sobre-nosotros">mas sobre nosotros</a>
                </div>
                @endwhile 
                @else      
                @endif

                @if(have_rows('contenido_motivacion', 82))
                {{-- loop through the rows of data --}}
                @while (have_rows('contenido_motivacion', 82))@php(the_row())
                <div class="contenedor-info-nosotros" id="motivacion" style="display:none;">
                    <h3>{{ get_sub_field('titulo_motivacion') }}</h3>
                    <p>{{ get_sub_field('extracto_de_la_motivacion') }}</p>
                    <a href="/nosotros/" class="boton-sobre-nosotros">mas sobre nosotros</a>
                </div>
                @endwhile 
                @else      
                @endif
            </div>
        </div>
        


        <div class="contenedor-padre-imagen-nosotros column is-5" style="background:url( {{ get_field('imagen_home_nosotros', 82 )}} ); background-size: cover; background-repeat: no-repeat; border: 1px solid white; height: 420px;"></div>

        
    </div>
</div>