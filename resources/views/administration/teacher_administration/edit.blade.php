@extends('administration.master')

@section('title')
    SiTAW | Edit Administrasi Guru
@endsection

@section('content')
<div class="row">
  <div class="col-lg-12">
    <div class="card bg-info-subtle shadow-none position-relative overflow-hidden mb-4">
      <div class="card-body px-4 py-3">
        <div class="row align-items-center">
          <div class="col-9">
            <h4 class="fw-semibold mb-8">EDIT ADMINISTRASI GURU</h4>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a class="text-muted text-decoration-none" href="/administration/teacher-administration">Daftar Administrasi Guru</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Edit Administrasi</li>
              </ol>
            </nav>
          </div>
          <div class="col-3 text-center">
            <img src="{{ asset('assets/images/breadcrumb/ChatBc.png')}}" alt="modernize-img" class="img-fluid mb-n4" />
          </div>
        </div>
      </div>
    </div>

    <div class="card">
      <div class="px-4 py-3 border-bottom">
        <h4 class="card-title mb-0">Edit Data Administrasi</h4>
      </div>
      <form action="" method="post" enctype="multipart/form-data">
        @csrf
        <div class="card-body">
          <div class="mb-4 row align-items-center">
            <label class="form-label col-sm-3 col-form-label">Nama Administrasi</label>
            <div class="col-sm-9">
              <input type="text" name="tad_name" class="form-control" value="{{ old('tad_name', $EditTeacherAdm->tad_name) }}" required>
            </div>
          </div>

          <div class="mb-4 row align-items-center">
            <label class="form-label col-sm-3 col-form-label">File Saat Ini</label>
            <div class="col-sm-9">
              @if($EditTeacherAdm->tad_file)
                <a href="{{ asset('storage/'.$EditTeacherAdm->tad_file) }}" target="_blank" class="btn btn-info btn-sm">
                  Lihat File
                </a>
                <span class="ms-2 text-muted">
                  {{ basename($EditTeacherAdm->tad_file) }}
                </span>
              @else
                <span class="text-muted">Belum ada file</span>
              @endif
            </div>
          </div>

          <div class="mb-4 row align-items-center">
            <label class="form-label col-sm-3 col-form-label">Upload File Baru (Opsional)</label>
            <div class="col-sm-9">
              <input type="file" name="tad_file" class="form-control" accept=".xlsx,.csv">
              <small class="text-muted">Kosongkan jika tidak ingin mengganti file.</small>
            </div>
          </div>

          <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-9">
              <button type="submit" class="btn btn-primary">Update</button>
              <a href="/administration/teacher-administration" class="btn btn-secondary">Batal</a>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection
