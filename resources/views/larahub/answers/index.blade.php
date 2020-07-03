@extends('adminlte.master')

@push('style')
<link rel="stylesheet" href="{{ asset('/adminlte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('/adminlte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
@endpush

@section('content')
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>List Jawaban</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="/">Home</a></li>
          <li class="breadcrumb-item"><a href="/pertanyaan">Pertanyaan</a></li>
          <li class="breadcrumb-item active">Jawaban</li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>

<section class="content">
  <div class="card">
      <div class="card-header">
        @foreach ($asks as $key => $ask)
          <h3 class="card-title">{{ $ask->isi }}</h3>  
        @endforeach

      </div>
      <!-- /.card-header -->
      <div class="card-body">
        @if (count($answers) > 0)
          @foreach ($answers as $key => $answer)  
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">
                  {{ $answer->isi }}
                </h3>
              </div>
            </div>
          @endforeach
        @else 
        <div class="card card-warning">
          <div class="card-header">
            <h3 class="card-title">
                Pertanyaan belum ada jawaban
              </h3>
            </div>
          </div>
        @endif
      </div>
      <!-- /.card-body -->
    </div>
</section>
@endsection

@push('scripts')
<script src="{{ asset('/adminlte/plugins/datatables/jquery.dataTables.js') }}"></script>
<script src="{{ asset('/adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.js') }}"></script>
<script>
  $(function () {
    $("#example1").DataTable();
  });
</script>
@endpush