@extends('layouts.master')

@section('content')
<div class="card card-primary ml-3">
  <div class="card-header">
    <h3 class="card-title">Create New Form</h3>
  </div>
  <!-- /.card-header -->
  <!-- form start -->
  <form role="form" action="/pertanyaan" method="POST">
    @csrf
    <div class="card-body">
      <div class="form-group">
        <label for="judul">Tittle</label>
        <input type="text" class="form-control" id="judul" name="judul" value="{{ old('judul', '') }}" placeholder="Masukkan Tittle">
        @error('judul')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
      </div>

      <div class="form-group">
        <label for="isi">Question</label>
        <input type="text" class="form-control" id="isi" name="isi" value="{{ old('isi', '') }}"" placeholder="Masukkan Isi">
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