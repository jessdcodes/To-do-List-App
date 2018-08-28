@extends('layouts.app')

@section('content')
  <a class="btn btn-default" href="/todolist/public">Go Back</a>
  <h1 class="well">{{$todo->text}}</h1>
  <div class="label label-danger">{{$todo->due}}</div>
  <hr>
  <p>{{$todo->body}}</p>
  <br>
  <a href="{{$todo->id}}/edit" class ="btn btn-default">Edit</a>
@endsection
