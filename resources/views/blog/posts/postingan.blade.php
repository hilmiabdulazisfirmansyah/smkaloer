  <div class="row mb-2">
  @foreach ($posts as $post)
    <div class="col-md-6">
      <div class="card flex-md-row mb-4 box-shadow h-md-250 bg-dark text-light">
        <div class="card-body d-flex flex-column align-items-start">
          <strong class="d-inline-block mb-2 text-info">{{ucwords($post->judul)}}</strong>
          <h4 class="mb-0">
            <a class="text-info" href="#">{{ucwords($post->sub_judul)}}</a>
          </h4>
          <div class="mb-1 text-muted">{{$post->created_at->locale('ID')->isoFormat('LLLL')}}
            <p class="post-meta"><i>Di Posting Oleh -</i>
        <a class="text-info" href="#">
          @php
          $writer = App\User::find($post->user_id);
          @endphp
          {{$writer->name}}
        </a></p></div>
          <div class="card-text mb-auto text-wrap" style="overflow: hidden;">
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
        <a class="text-info" href="{{ url('postingan/detail/') }}/{{$post->id}}">Baca Selengkapnya</a>
      </div>
      <img class="card-img-right flex-auto d-none d-md-block" data-src="holder.js/200x250?theme=thumb" alt="Thumbnail [200x250]" style="width: 200px; height: 250px;" src="{{ asset($post->thumb) }}" data-holder-rendered="true">
    </div>
  </div>
@endforeach
</div>