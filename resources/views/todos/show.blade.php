@extends('layouts.app')

@section('content')
  <a class="btn btn-default" href="/">Go Back</a>
  <h1 class="well">{{$todo->text}}</h1>
  <div class="label label-danger">{{$todo->due}}</div>
  <hr>
  <p>{{$todo->body}}</p>
@endsection