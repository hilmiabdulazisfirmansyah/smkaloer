  @foreach ($posts as $post)
<div style="background-color: #efefef;border-radius:5px;margin-top: 10px;margin-bottom: 10px;padding: 1vw">
  <div class="post-preview">
    <div class="col-md-2" style="display: inline-block;"><img src="{{$post->thumb}}" style="width: 24vh;vertical-align: baseline;"></div>
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
          echo htmlspecialchars_decode($post->postingan);
        @endphp
      </div>
      <p class="post-meta"><i>Posted by</i>
        <a href="#">{{$post->username}}</a>
      <i>pada hari Senin, 24 September 2018</i></p>
    </div>
  </div>
</div>
  @endforeach