@extends('layouts.template')

@section('content')

@foreach ($persos as $value)
  <p>{{ $value->name }}</p>
  <p>{{ $value->role }}</p>
  <br>
@endforeach

<p>acceuil</p>


@endsection
