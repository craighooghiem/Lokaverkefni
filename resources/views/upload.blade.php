@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row">
      <h1 class="flex-center position-ref full-heightr">Upload a new image to your gallery</h1>

      <form action="{{ URL::to('upload') }}" method="post" enctype="multipart/form-data">
          
          Image name  <input type="text" name="name">
            <input type="file" name="file" id="file">
            <input type="submit" value="Upload" name="submit">
          <input type="hidden" value="{{ csrf_token() }}" name="_token">
        </form>
    </div>
</div>
@endsection
