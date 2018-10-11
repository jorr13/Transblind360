<div class="contenedor-video">
    <video autoplay muted loop id="myVideo" style="max-width: inherit;">
        <source src="{{ home_url('/app/uploads/2018/09/video-transblind.mp4') }}" type="video/mp4">
    </video>
    <div class="tarjeta-video-texto">
        <div class="primer-title-tarjeta">
            <h4>transblind 360</h4>
        </div>
        <div class="segundo-title-tarjeta">
            <div class="contenedor-title-tarjeta">
                <h2>servicios de traslado vip</h2>
            </div>

            <p>una experiencia placentera para nuestro clientes.</p>
        </div>
        <div class="contenedor-botones-tarjeta">
            <div class="contenedor-padre-hover">
                <a href="#" class="boton-amarillo">Empresariales</a>
                <div class="contenedor-listado-empresariales">
                    <ul>
                        @foreach ($empresarial_loop as $empresarial)
                        <li>
                            <a href="{{$empresarial['link']}}">
                                {{$empresarial['title']}}
                            </a>
                        </li>
                        @endforeach

                    </ul>
                </div>
            </div>
            <div class="contenedor-padre-hover2" >
                <a href="#" class="boton-gris">Personales</a>
                <div class="contenedor-listado-personales" >
                    <ul>
                        @foreach ($personal_loop as $personal)
                        <li>
                            <a href="{{$personal['link']}}">
                                {{$personal['title']}}
                            </a>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>    
        </div>
    </div>
</div>
