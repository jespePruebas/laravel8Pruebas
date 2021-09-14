@extends('layouts.template')
@section('title','Incio-Cursos')
@section('content')
<p>Pagina principal de los cursos</p>
 <!--
 la siguiente linea de codigo se usa para 
 que no se desabilite la pagina  y cierre la terminal 
 por  causa de tiempo de inactividad en la pagina-->
<input type="hidden" name="_token" value="{{ csrf_token() }}">


@endsection