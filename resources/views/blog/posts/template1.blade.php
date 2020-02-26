<div id="main">
  <div class="container">
    <div class="row">
     <div class="col-md-9">
      <div class="col-md-12 page-body">
        <div class="row">
          <div class="sub-title">
            <h2>Postingan Terbaru</h2>
          </div>
          <div class="col-md-12 content-page">

           @foreach ($posts as $post)
           <!-- Blog Post Start -->
           <div class="col-md-12 blog-post" style="display: block;">
            <div class="post-title">
              <a href="{{ url('postingan/detail/') }}/{{$post->id}}"><h1>{{ucwords($post->judul)}} - {{ucwords($post->sub_judul)}}</h1></a>
            </div>  
            <div class="post-info">
              <span>{{$post->created_at->locale('ID')->isoFormat('LLLL')}} <a href="#" target="_blank">
                @php
                $writer = App\User::find($post->user_id);
                @endphp
                {{$writer->name}}</a>
              </span>
            </div>  
            <p>
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
            </p>                                
            <a href="{{ url('postingan/detail/') }}/{{$post->id}}" class="button button-style button-anim fa fa-long-arrow-right"><span>Baca Selengkapnya</span></a>
          </div>
          <!-- Blog Post End -->
          @endforeach

          <div class="col-md-12 text-center">
           <a href="javascript:void(0)" id="load-more-post" class="load-more-button">Load</a>
           <div id="post-end-message"></div>
         </div>

       </div>

     </div>

   </div>

 </div>
 <!-- Blog Post (Right Sidebar) End -->

</div>
</div>
</div>