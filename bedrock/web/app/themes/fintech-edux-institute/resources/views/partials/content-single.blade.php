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
    </div>
    <div class="content-single-noticias">
            @php the_content() @endphp
            @php comments_template('/partials/comments.blade.php') @endphp
    </div>
    

    