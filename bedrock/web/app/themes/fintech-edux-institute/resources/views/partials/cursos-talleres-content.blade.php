<div class="portadas">
    <h1>cursos y talleres</h1>
    <div class="quienessomos">
            <p>PARA NO PARAR <br> DE APRENDER</p>
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


<div class="titulos-content">
    <a href="#" class="cursos-boton active">Cursos</a>
    <a href="#" class="taller-boton">Talleres</a>
</div>
<div class="cursos-content">
    <div class="columns conte is-multiline">   
        @foreach ($cursos_loop as $cursos)
        <div class="curso column is-4">
            <div class="dentro">
            <div class="colums">
                <div style="background:url('{{$cursos['thumbnail']}}'); background-size: contain; height: 60px; width: 60px;">
                </div>
                <h2>{{$cursos['title']}}</h2>
                <p>{!! $cursos['resumen'] !!}</p>
                <a class="boton" href="{{$cursos['link']}}">Ir Al curso</a>
            </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
<div class="talleres-content" hidden>
    <div class="columns conte is-multiline">   
        @foreach ($talleres_loop as $talleres)
        <div class="curso column is-4">
            <div class="dentro">
            <div class="colums">
                <div style="background:url('{{$talleres['thumbnail']}}'); background-size: cover; height: 200px; max-width: 300px;">
                </div>
                <h2>{{$talleres['title']}}</h2>
                <p>{!! $talleres['resumen'] !!}</p>
                <a class="boton" href="{{$talleres['link']}}">Ir Al Taller</a>
            </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
</div>