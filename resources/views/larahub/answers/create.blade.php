@extends('adminlte.master')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Create Jawaban</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item"><a href="/jawaban/{{ $id }}">Jawaban</a></li>
                <li class="breadcrumb-item active">Create Jawaban</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>
  
      <!-- Main content -->
      <section class="content">
  
        <!-- Default box -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Create Jawaban</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form role="form" action="/jawaban/{{$id}}" method="POST">
            @csrf
            <input type="hidden" name="pertanyaan_id" value="{{$id}}" />
            <div class="card-body">
              <div class="form-group">
                <label for="isi">Isi: </label>
                <textarea name="isi" class="form-control" id="isi" placeholder="Enter isi"></textarea>
              </div>
            <!-- /.card-body -->
            <div class="card-footer">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>
        </div>
        <!-- /.card -->
  
      </section>
      <!-- /.content --> 
@endsection