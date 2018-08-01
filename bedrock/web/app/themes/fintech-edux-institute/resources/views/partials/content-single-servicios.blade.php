<div class="portadas">
<h1>{!! App::title() !!}</h1>
  <div class="quienessomos">
          <p>{{ get_field('sub_titulo') }}</p>
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
<div class="entry-content">
    @php the_content() @endphp
</div>
<div class="servicios-rombo">
  <div class="diamente-seccion">
    <div class="rombo-seccion"></div>
  </div>
</div>
<div class="titulo"><h1>CARACTERISTICAS DEL SERVICIO</h1></div>
<div class="columns conte is-multiline caracteristica-servicios">
    
    @if(have_rows('caracteristicas_de_servicio'))
    {{-- loop through the rows of data --}}
    @while (have_rows('caracteristicas_de_servicio'))@php(the_row())
    <div class="curso column is-4">
    <div style="background:url('{{ get_sub_field('imagen') }}'); background-size: contain; height: 60px; width: 60px;"></div>
    <h2>{{ get_sub_field('titulo') }}</h2>
    <p>{{ get_sub_field('parrafo') }}</p>
  </div>
    @endwhile
    @else      
    @endif
<a class="boton" href="{{ get_sub_field('boton') }}">Consultar Servicio</a> 
</div>
