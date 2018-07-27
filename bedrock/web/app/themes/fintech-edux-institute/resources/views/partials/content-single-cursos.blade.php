<div class="portadas">
    <h1>{!! App::title() !!}</h1>
      <div class="quienessomos">
              <p>{{ get_field('subtitulo') }}</p>
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

<div class="content-single-cursos ">
    <div class="content-1-cursos">
        @php the_content() @endphp
    </div>
    </div>
    <div class="barra-vertical"></div>
    <div class="content-2-cursos">
        @if(have_rows('contenido-curso'))
        {{-- loop through the rows of data --}}
        @while (have_rows('contenido-curso'))@php(the_row())
        <div class="curso column is-4">
        <h2>{{ get_sub_field('titulo') }}</h2>
        <h3>{{ get_sub_field('subtitulo') }}</h3>
        <p>{!! get_sub_field('contenido') !!}</p>
      </div>
        @endwhile
        @else      
        @endif
    </div>
</div>
  
    