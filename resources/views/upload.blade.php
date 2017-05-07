@extends('layouts.app')





@section('content')
<h3>Image uplaod</h3>
{{Form::open(array('url'=>'upload', 'files'=>true))}}
  title: {{Form::text('title')}}
  <br>
  image: {{Form::file('image')}}
  <br>
  {{Form::Submit('submit')}}
  {{Form::close()}}
@endsection

