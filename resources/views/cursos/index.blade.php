@extends('layouts.template')
@section('title','Principal-Cursos')
@section('content')
<h1>Pagina principal de Cursos </h1>
<a href="{{route('cursos.create')}}">Crear Curso</a>
<ul>
@foreach ($cursos  as $curso) 
<li>
<a href="{{route('cursos.show',$curso->id)}}">{{$curso->name}}</a>
</li>

@endforeach
</ul>
{{$cursos->links()}}
@endsection