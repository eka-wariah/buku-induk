@extends('administration.master')

@push('link')
    <link rel="stylesheet" href="{{ asset('assets/libs/datatables.net-bs5/css/dataTables.bootstrap5.min.css') }}">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.2/css/buttons.dataTables.min.css">
@endpush

@section('title')
    SITAW | Daftar Jurusan
@endsection

@section('content')
<div class="container-xxl py-4">
  <div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">
      <h4 class="card-title mb-0">Daftar Guru</h4>
      <a class="btn btn-primary btn-sm">
        <i class="ti ti-plus"></i> Tambah Guru
      </a>
    </div>

    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-striped align-middle">
          <thead class="table-light">
            <tr>
              <th>#</th>
              <th>Nama Lengkap</th>
              <th>NIP</th>
              <th>Jenis Kelamin</th>
              <th>Status</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td>
                <span class="badge bg-success"></span>
              </td>
              <td>
                <div class="btn-group" role="group">
                  <a class="btn btn-outline-primary btn-sm" title="Edit Biodata">
                    <i class="ti ti-user"></i>
                  </a>
                  <a class="btn btn-outline-info btn-sm" title="Edit Kontak">
                    <i class="ti ti-phone"></i>
                  </a>
                  <a class="btn btn-outline-warning btn-sm" title="Edit Suami/Isteri">
                    <i class="ti ti-heart"></i>
                  </a>
                  <a class="btn btn-outline-secondary btn-sm" title="Edit Kepegawaian">
                    <i class="ti ti-briefcase"></i>
                  </a>
                  <a  class="btn btn-outline-success btn-sm" title="Edit Data Mengajar">
                    <i class="ti ti-school"></i>
                  </a>
                  <a  class="btn btn-outline-dark btn-sm" title="Edit Riwayat Mengajar">
                    <i class="ti ti-history"></i>
                  </a>
                  <a  class="btn btn-outline-primary btn-sm" title="Edit Riwayat Pendidikan">
                    <i class="ti ti-book"></i>
                  </a>
                  <a  class="btn btn-outline-info btn-sm" title="Detail Guru">
                    <i class="ti ti-eye"></i>
                  </a>
                  <a  target="_blank" class="btn btn-outline-danger btn-sm" title="Print Kartu Guru">
                    <i class="ti ti-printer"></i>
                  </a>
                </div>
              </td>
            </tr>
       
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
@endsection
