<div class="noticias container">
        <h1>ULTIMAS NOTICIAS</h1>
    <div class="columns timeline-container is-multiline" style="position:relative">

        {{--Esto es la barra vertical--}}
        <div class="barra-vertical"></div>
        
        @foreach ($noticias_loop as $noticias)
            <div class="column timeline-item is-half">
                <div class="diamante">
                    <div class="rombo"></div>
                </div>
                <div style="background:url('{{$noticias['thumbnail']}}'); height:300px; background-size:cover"></div>
                <h2 class="titulo">{{$noticias['title']}}</h2>
                <p class="resumen">{!! $noticias['resumen'] !!}</p>
                <p class="date">{!! $noticias['date']!!}</p>
            </div>
        @endforeach
     
    </div>
    <div class="boton" style="margin: auto">Ultimas Noticias</div>
</div>