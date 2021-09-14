@extends('layouts.template')
@section('title','Crear-Cursos')
@section('content')
<h1>Crear un curso</h1>
<form action="{{route('cursos.store')}}" method="POST">
@csrf
<input type="text" name="name" placeholder="Nombre del curso" value="{{old('name')}}">
@error('name')
<br>
<small>{{$message}}</small>
@enderror
<br><br>
<textarea  name="description" placeholder="Descripcion" rows="5">
{{old('description')}}
</textarea>
<br>
@error('description')
<small>{{$message}}</small>
<br>
@enderror
<br>
<input type="text" name="category" placeholder="Categoria" value="{{old('category')}}">
@error('category')<br>
<small>{{$message}}</small>
@enderror
<br><br>
<input type="submit" value="Enviar">

</form>
<!--
Para modificar el idioma de los mensajes ir a: resources/lang/es
y luego a  config/app.php
-->

@endsection