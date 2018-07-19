<div class="servicios columns">
    <div class="img-servicios-1 column" style="background:url('{{ home_url('/app/uploads/2018/07/foto3.jpeg') }}'); background-size: contain; background-repeat: no-repeat;  background-attachment: fixed;"></div>
    <div class="contenido-servicios column">
        <div class="columns is-multiline">
            @foreach ($servicios_loop as $servicios )
                <div class="servicio-item column is-4">
                    <div class="img-serv" style="background:url('{{$servicios['thumbnail']}}'); background-size: contain;">
                    </div>
                    <h2>{{$servicios['title']}}</h2>
                    <p>{!! $servicios['resumen'] !!}</p>
                </div>
            @endforeach
            
        </div>
        <a class="boton" href="/index.php/nuestros-servicios/">Ver Servicios</a>
    </div>
    <div class="img-servicios column" style="background:url('{{ home_url('/app/uploads/2018/07/foto3.jpeg') }}'); background-size: cover;  background-attachment: fixed;"></div>
</div>