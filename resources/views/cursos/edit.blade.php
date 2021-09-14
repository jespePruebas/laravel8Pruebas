@extends('layouts.template')
@section('title','Editar-Cursos')
@section('content')
<h1>Editar un curso</h1>
<form action="{{route('cursos.update',$curso)}}" method="POST">
@csrf
@method('PUT')
<input type="text" name="name" placeholder="Nombre del curso" value="{{old('name',$curso->name)}}">
@error('name')
<br>
<small>{{$message}}</small>
@enderror
<br><br>
<textarea name="description" placeholder="Descripcion" rows="5">
{{old('description',$curso->description)}}
</textarea>
<br>
@error('description')
<small>{{$message}}</small>
<br>
@enderror
<br>
<input type="text" name="category" placeholder="Categoria" value="{{old('category',$curso->category)}}">
@error('category')<br>
<small>{{$message}}</small>
@enderror
<br><br>
<input type="submit" value="Actualizar">

</form>


@endsection