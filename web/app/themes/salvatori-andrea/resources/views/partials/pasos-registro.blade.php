<div class="noticias container ">
    <div class="container-title animate fadeInUp">
        <h2>nuestro proceso de contratacion </h2>
        <p>Comprometidos en siempre dar lo mejor de nosotros.
            ¿Quieres contratar un servicio?
        </p>
    </div>
    <div class="columns timeline-container is-multiline" style="position:relative">
        <div class="barra-vertical "></div>

        <div class="column timeline-item is-half">
            <div class="diamante">
                <div class="rombo"></div>
            </div>

            <div class="contenedortarjeta animate fadeInUp">
                @if(have_rows('paso_uno', 61))
                {{-- loop through the rows of data --}}
                @while (have_rows('paso_uno', 61))@php(the_row())
                <div class="img-noticias" style="background:url('{{ get_sub_field('imagen_uno') }}'); height:200px; background-size:cover; border-radius: 6px 6px 0px 0px;"></div>
                <div class="contenido-pasos ">
                    <h2 class="titulo">{{ get_sub_field('numero_paso_uno') }}</h2>
                    <h3 class="titulo">{{ get_sub_field('titulo_del_paso_uno') }}</h3>
                    <p class="resumen">{{ get_sub_field('instruccion_del_paso_uno') }}</p>   
                </div> 
                @endwhile
                @else      
                @endif
            </div>

        </div>

        
        <div class="column timeline-item is-half">
            <div class="diamante">
                <div class="rombo"></div>
            </div>
            <div class="contenedortarjeta animate fadeInUp">
                    @if(have_rows('paso_dos', 61))
                    {{-- loop through the rows of data --}}
                    @while (have_rows('paso_dos', 61))@php(the_row())
                    <div class="img-noticias" style="background:url('{{ get_sub_field('imagen_dos') }}'); height:200px; background-size:cover; border-radius: 6px 6px 0px 0px;"></div>
                    <div class="contenido-pasos ">
                        <h2 class="titulo">{{ get_sub_field('numero_paso_dos') }}</h2>
                        <h3 class="titulo">{{ get_sub_field('titulo_del_paso_dos') }}</h3>
                        <p class="resumen">{{ get_sub_field('instruccion_del_paso_dos') }}</p>   
                    </div> 
                    @endwhile
                    @else      
                    @endif
            </div>
        </div>

        
        <div class="column timeline-item is-half">
            <div class="diamante">
                <div class="rombo"></div>
            </div>
            <div class="contenedortarjeta animate fadeInUp">
                    @if(have_rows('paso_tres', 61))
                    {{-- loop through the rows of data --}}
                    @while (have_rows('paso_tres', 61))@php(the_row())
                    <div class="img-noticias" style="background:url('{{ get_sub_field('imagen_tres') }}'); height:200px; background-size:cover; border-radius: 6px 6px 0px 0px;"></div>
                    <div class="contenido-pasos ">
                        <h2 class="titulo">{{ get_sub_field('numero_paso_tres') }}</h2>
                        <h3 class="titulo">{{ get_sub_field('titulo_del_paso_tres') }}</h3>
                        <p class="resumen">{{ get_sub_field('instruccion_del_paso_tres') }}</p>   
                    </div> 
                    @endwhile
                    @else      
                    @endif
            </div>
        </div>
    </div>
    <a class="boton-registrar animate fadeInUp" style="margin: auto">Registrate</a>
</div>