@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <img src="/uploads/avatars/{{ $user->avatar }}" style="width:150px; height:150px; float:left; border-radius:50%; margin-right:25px;">
           <h2>{{ $user->name}}'s profile</h2>
           <form enctype="multipart/form-data" action="/profile" method="POST">
           <label>Update Profile Image</label>
           <input type="file" name="avatar">
           <input type ="hidden" name="_token" value="{{csrf_token() }}">
           <input type="submit" class="pull-right btn btn-sm btn-primary">
    </div>
    
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h2>User Images</h2>
            @foreach($images as $image)
              <div class="col-md-4">
                {{ $image->title }}
                <br>
                <img src="{{ url('uploads/images/'.$image->image) }}" style="height: 400px; width:400px; overflow: hidden;">
              </div>
            @endforeach
        </div>
    </div>

</div>

@endsection
