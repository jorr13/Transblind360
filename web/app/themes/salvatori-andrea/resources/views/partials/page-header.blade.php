<div class="main-cover">
        @if(has_post_thumbnail())
        <div class="featured">
           <img src="{!! App::thumbnail() !!}" alt=" {!! App::title() !!}" >
        </div>
        @endif

</div>
