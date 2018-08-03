<div class="nosotros-home columns">
    <div class="img column" >
        <div class="img-1" >
        </div>
    <div class="img-2" style="background: url('{!! the_field('imagen_1', 'options') !!}')">
            
    </div>
    <div class="img-3" style="background: url('{!! the_field('imagen_2', 'options') !!}')">
            
    </div>    
    </div>
    <div class="conte-nosotros column">
        <h1>{{ get_field('titulo-Infoindex', 'options') }}</h1>
        <h2>{{ get_field('subtitulo-Infoindex', 'options') }}</h2>
        <p>{{ get_field('resumen', 'options') }}</p>
        @php($boton = get_field('boton', 'options'))
        <a class="boton" href="{{ $boton['url']}}">{{ $boton['title']}}</a>
    </div>
</div>