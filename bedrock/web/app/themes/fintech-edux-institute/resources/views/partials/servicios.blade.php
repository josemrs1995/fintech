<div class="servicios columns">
    <div class="contenido-servicios column">
        <div class="columns is-multiline">
            @foreach ($servicios_loop as $servicios )
                <div class="column is-4">
                    <div class="img-serv" style="background:url('{{$servicios['thumbnail']}}'); background-size:cover; height: 250px;">
                    </div>
                    <h2>{{$servicios['title']}}</h2>
                    <p>{!! $servicios['resumen'] !!}</p>
                </div>
            @endforeach
        </div>
        <a class="boton" href="{{$servicios['link']}}">Ver Servicios</a>
        
    </div>
    <div class="img-servicios column">
        <h1>hola mundo</h1>
    </div>
    
</div>