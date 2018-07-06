<div class="contenedor-de-cursos">
    <h1>NUESTROS CURSOS</h1>
    <div class="columns conti">   
        @foreach ($cursos_loop as $cursos)
        <div class="curso column is-3">
            <div class="colums">
                <div class="img-container" style="background:url('{{$cursos['thumbnail']}}'); background-size: contain;">
                </div>
                <h2>{{$cursos['title']}}</h2>
                <p>{!! $cursos['resumen'] !!}</p>
                <a class="boton" href="{{$cursos['link']}}">Ir Al curso</a>
            </div>
        </div>
        @endforeach
    </div>
</div>