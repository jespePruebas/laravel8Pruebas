@extends('layouts.template')
@section('title',$curso->name.'-Cursos')
@section('content')
<a href="{{route('cursos.index')}}">Volver a Cursos</a><br>
<a href="{{route('cursos.edit',$curso)}}">Editar Curso</a><br>
<h1>Curso de : {{$curso->name}} </h1>
<p><strong>Categoria:  </strong>{{$curso->category}}</p>
<p>{{$curso->description}} </p>
@endsection