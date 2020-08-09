@extends('layouts.master')

@section('content')
<div class="container pt-3">
  <h1>{{ $show->judul }}</h1>
    <p>{{ $show->isi }}</p>
  </div>
@endsection