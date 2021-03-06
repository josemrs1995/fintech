<div class="contenedor-de-cursos">
    <h1>NUESTROS CURSOS</h1>
    <div class="columns conti">   
        @foreach (array_slice($cursos_loop,0,4) as $cursos)
        <div class="curso column is-3">
            <div class="cursos-contenido">
                <div class="img-container" style="background:url('{{$cursos['thumbnail']}}'); background-size: contain;">
                </div>
                <h2>{{$cursos['title']}}</h2>
                <p class="resumen">{!! $cursos['resumen'] !!}</p>
                <a class="boton" href="{{$cursos['link']}}">Ir Al curso</a>
            </div>
        </div>
        @endforeach
    </div>
</div>