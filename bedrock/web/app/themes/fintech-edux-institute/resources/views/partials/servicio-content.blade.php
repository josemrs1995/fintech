<div class="talleres-content">
    <div class="columns conte is-multiline">   
        @foreach ($servicios_loop as $servicios)
        <div class="curso column is-4">
            <div class="dentro">
            <div class="colums">
                <div style="background:url('{{$servicios['thumbnail']}}'); background-size: contain; height: 60px; width: 60px;">
                </div>
                <h2>{{$servicios['title']}}</h2>
                <p>{!! $servicios['resumen'] !!}</p>
                <a class="boton" href="{{$servicios['link']}}">Ir Al Taller</a>
            </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
</div>