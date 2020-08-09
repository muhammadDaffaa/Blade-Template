@extends('layouts.master')

@section('content')
<div class="container">
<div class="col pt-5">
  <div class="card">
    <div class="card-header">
      <h3 class="card-title">Daftar Pertanyaan</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      @if (session('success'))
      <div class="alert alert-success">
        {{ session('success') }}
      </div>
      @endif
      <a href="/pertanyaan/create" class="btn btn-primary mb-2">Create New</a>
      <table class="table table-bordered">
        <thead>                  
          <tr>
            <th style="width: 10px">NO</th>
            <th>Tittle</th>
            <th>Question</th>
            <th style="width: 40px">Action</th>
          </tr>
        </thead>

        <tbody>
          @forelse($post as $key => $pst)
          <tr>
            <td> {{ $key + 1 }} </td>
            <td> {{ $pst->judul }} </td>
            <td> {{  $pst->isi  }} </td>
            <td>
              <div class="btn-group">
                <button type="button" class="btn btn-info">Action</button>
                <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
                </button>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="/pertanyaan/{{ $pst->id }}">Show</a></li>
                  <li><a href="/pertanyaan/{{ $pst->id }}/edit">Edit</a></li> 
                  <li>
                    <form action="/pertanyaan/{{ $pst->id }}" method="post">
                      @csrf
                    @method('delete')
                      <input type="submit" value="delete">
                    </form>
                  </li>
                </div>
            </td>
          </tr>
          @empty
              <tr>
                <td colspan="4" align="center">No Data</td>
              </tr>
          @endforelse
        </tbody>
        
      </table>
     
    </div>
  </div>
  <!-- /.card -->
  </div>
</div>
@endsection