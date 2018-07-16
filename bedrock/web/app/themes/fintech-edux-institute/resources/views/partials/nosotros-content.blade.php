{{-- Repeater Content
{{-- check if the repeater field has rows of data --}}
@if(have_rows('seccion1', 8))
{{-- loop through the rows of data --}}
@while (have_rows('seccion1', 8))@php(the_row())
    @php( $titulo = get_sub_field('title'))
    @php( $contenido = get_sub_field('contenido'))
    @php( $imagen = get_sub_field('imagen'))
@endwhile
@else      
@endif
@if(have_rows('seccion3', 8))
{{-- loop through the rows of data --}}
@while (have_rows('seccion3', 8))@php(the_row())
    @php( $titulo3 = get_sub_field('titulo'))
    @php( $contenido3 = get_sub_field('contenido'))
    @php( $imagen3 = get_sub_field('imagen'))
    @php( $boton = get_sub_field('boton'))
@endwhile
@else      
@endif
<div class="portadas">
    <h1>NOSOTROS</h1>
    <div class="quienessomos">
            <p>QUIENES SOMOS</p>
            <div class="diamante">
                <div class="rombo"></div>
            </div>
    </div>
    <div class="svgclip">
        <svg width='100%' height='100%' viewBox="0 0 100 100">
                <polygon fill="white"  points="0,90 50,99 100,90  100,100 0,100" />
        </svg>
    </div>
    <div class="linea-pequeña"></div>
</div>
<div class="seccion-1">
    <h1>{{$titulo}}</h1>
    <div style="background: url('{{$imagen}}'); height:400px; background-size: cover"></div>
    <p>{{$contenido}}</p>
    <div class="diamante-seccion">
        <div class="rombo-seccion"></div>
    </div>
<div class="seccion-2 columns">
        @if(have_rows('seccion2', 8))
        {{-- loop through the rows of data --}}
        @while (have_rows('seccion2', 8))@php(the_row())
            @php( $column = get_sub_field('columna'))
            <div class="column"><div class="content">{!!$column!!}</div></div>
        @endwhile
        @else      
        @endif
        <div class="linea-grande"></div>
</div>
    <div class="seccion-3">
        <div class="diamante-seccion">
            <div class="rombo-seccion"></div>
    </div>
    <h1>{{$titulo3}}</h1>
    <div style="background: url('{{$imagen3}}'); height:400px; background-size: cover"></div>
    <p>{{$contenido3}}</p>
    <div class="linea-pequeña"></div> 
    <a class="boton" href="{{$boton}}">Cursos y Talleres</a>
</div>



