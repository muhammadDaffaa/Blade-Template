@extends('layouts.master')

@section('content')
<div class="card card-primary ml-3">
  <div class="card-header">
    <h3 class="card-title">Edit Form {{ $show->id }}</h3>
  </div>
  <!-- /.card-header -->
  <!-- form start -->
  <form role="form" action="/pertanyaan/{{ $show->id }}" method="POST">
    @csrf
    @method('put')
    <div class="card-body">
      <div class="form-group">
        <label for="judul">Tittle</label>
        <input type="text" class="form-control" id="judul" name="judul" value="{{ old('judul', $show->judul) }}" placeholder="Masukkan Tittle">
        @error('judul')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
      </div>

      <div class="form-group">
        <label for="isi">Question</label>
        <input type="text" class="form-control" id="isi" name="isi" value="{{ old('isi', $show->isi) }}"" placeholder="Masukkan Isi">
        @error('isi')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
      </div>

    </div>
    <!-- /.card-body -->
    <div class="card-footer">
      <button type="submit" class="btn btn-primary">Create</button>
    </div>
  </form>

</div>
@endsection