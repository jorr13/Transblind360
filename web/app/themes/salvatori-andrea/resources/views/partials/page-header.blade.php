<div class="main-cover">
        @if(has_post_thumbnail())
        <div class="featured">
           <img src="{!! App::thumbnail() !!}" alt="" >
        </div>
        <div class="tarjeta-video-texto">
                <div class="primer-title-tarjeta">
                        <h4>transblind 360/Nosotros</h4>
                </div>
                <div class="segundo-title-tarjeta">
                        <div class="contenedor-title-tarjeta">
                                <h2>{!! App::title() !!}</h2>
                        </div>
                </div>
        </div>
        @endif
</div>
