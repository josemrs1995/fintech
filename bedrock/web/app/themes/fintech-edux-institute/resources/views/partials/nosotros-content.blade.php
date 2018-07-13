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
            <div class="column">{!!$column!!}</div>
        @endwhile
        @else      
        @endif
        <div class="linea-grande"></div>
</div>



