<!-- /resources/views/post/create.blade.php -->

<h1>Create Post</h1>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="/post" method="POST">
@csrf
<label for="title">Post Title</label>

<input id="title" type="text" class="@error('title') is-invalid @enderror">
<input id="body" type="text" class="@error('body') is-invalid @enderror">

@error('title')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror

@error('body')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
<input type="submit" name="">
</form>
<!-- Create Post Form -->