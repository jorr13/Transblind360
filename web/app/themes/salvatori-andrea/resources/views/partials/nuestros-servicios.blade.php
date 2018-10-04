<div class="contenedor-padre-nuestros-servicios ">
    <div class="contenedor-title-nuestro-servicios animate fadeInUp">
        <h2>Nuestros Servicios</h2>
        <p>Servicios de transporte ejecutivo seguro para el mercado venezolano desde el año 2015 con una experiencia exitosa, reflejada en la satifaccion de nuestros clientes.</p>
    </div>
    <div class="contenedor-padre-tarjetas-servicios columns is-multiline animate fadeInUp">
            @foreach(array_slice($servicios_loop,0,1) as $servicios)
            <div class="tarjeta-grande column is-6"  style="background:url('{{$servicios['thumbnail']}}'); background-size: cover; background-repeat: no-repeat;">
                <div class="contenedor-contenido-servicio">
                    <div class="contenedor-title-grande">
                        <span class="contenedortitle">{{$servicios['title']}}</span>
                    </div>
                    <p class="extracto-tarjeta-grande">{!! $servicios['resumen'] !!}</p>
                    <div class="contenedor-boton-tarjeta">
                        <a href="{{$servicios['link']}}" class="boton-tarjeta">Leer mas</a>
                    </div>
                </div>
            </div>
            @endforeach
        <div class="cuatrotarjetas column is-6 is-paddingless">   
            @foreach(array_slice($servicios_loop,1,4) as $servicios)
            <div class="tarjeta-peque" style="background:url('{{$servicios['thumbnail']}}'); background-size: cover; background-repeat: no-repeat;">
                <div class="contenedor-contenido-servicio-cuatro-tarjeta">
                    <div class="contenedor-title-peque">
                        <span class="contenedortitle-peque">{{$servicios['title']}}</span>  
                    </div>
                    <p class="extracto-tarjeta-peque">{!! $servicios['resumen'] !!}</p>
                    <div class="contenedor-boton-tarjeta-peque">
                        <a href="{{$servicios['link']}}" class="boton-tarjeta-peque">Leer mas</a>
                    </div>  
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <div class="contenedor-boton-vermas">
        <a href="/nuestros-servicios/" class="boton-vermas">Ver mas servicios</a>
    </div>
</div>