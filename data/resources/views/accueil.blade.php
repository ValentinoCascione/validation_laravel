@extends('layouts.template')

@section('content')

@foreach ($concerts as $value)
  <p>{{ $value->name }}</p>
  <p>{{ $value->city }}</p>
  <br>
@endforeach




@endsection
