<div class="portadas">
    <h1>cursos y talleres</h1>
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
<div class="cursos-content">
        <div class="columns conte">   
            @foreach ($cursos_loop as $cursos)
            <div class="curso column is-3">
                <div class="colums">
                    <div style="background:url('{{$cursos['thumbnail']}}'); background-size: contain; height: 60px; width: 60px;">
                    </div>
                    <h2>{{$cursos['title']}}</h2>
                    <p>{!! $cursos['resumen'] !!}</p>
                    <a class="boton" href="{{$cursos['link']}}">Ir Al curso</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>