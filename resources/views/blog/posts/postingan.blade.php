  @foreach ($posts as $post)
  <div style="background-color: #efefef;border-radius:5px;margin-top: 10px;margin-bottom: 10px;padding: 1vw">
    <div class="post-preview">
      <div class="col-md-2" style="display: inline-block;"><img src="{{ asset($post->thumb) }}" style="width: 24vh;vertical-align: baseline;"></div>
      <div class="col-md-8" style="display: inline-block;vertical-align: top;">
        <a href="#">
          <h2 class="post-title" style="color:darkcyan">
            {{ucwords($post->judul)}}
          </h2>
          <h3 class="post-subtitle" style="color:cadetblue">
            {{ucwords($post->sub_judul)}}
          </h3>
        </a>
        <hr>
        <div class="big-text">
          @php
          $string = strip_tags($post->postingan);
          if (strlen($string) > 500) {

    // truncate string
            $stringCut = substr($string, 0, 500);
            $endPoint = strrpos($stringCut, ' ');

    //if the string doesn't contain any space then it will cut without word basis.
            $string = $endPoint? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
          }
          echo $string;
          // echo htmlspecialchars_decode($post->postingan);
          @endphp
        </div>
          ....
          <a href="{{ url('postingan/detail/') }}/{{$post->id}}">Baca Selengkapnya</a>
        <p class="post-meta"><i>Posted by</i>
          <a href="#">
            @php
              $writer = App\User::find($post->user_id);
            @endphp
            {{$writer->name}}
          </a>
          <i>pada hari {{$post->created_at->locale('ID')->isoFormat('LLLL')}}</i></p>
        </div>
      </div>
    </div>
    @endforeach