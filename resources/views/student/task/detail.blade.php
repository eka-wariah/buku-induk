@extends('administration.master')

@push('link')
    <link rel="stylesheet" href="{{ asset('assets/libs/datatables.net-bs5/css/dataTables.bootstrap5.min.css') }}">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.2/css/buttons.dataTables.min.css">
@endpush

@section('title')
    SITAW | Daftar Jurusan
@endsection

@section('content')

<div class="card overflow-hidden">
    <div class="position-relative">
      <a href="javascript:void(0)">
        <img src="{{ asset('assets/images/blog/blog-img5.jpg')}}" class="card-img-top rounded-0 object-fit-cover" alt="modernize-img" height="100">
      </a>
      <img src="{{ asset('assets/images/profile/user-5.jpg')}}" alt="modernize-img" class="img-fluid rounded-circle position-absolute bottom-0 start-0 mb-n9 ms-9" width="40" height="40" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Esther Lindsey">
    </div>
    <div class="card-body p-4">
      <span class="badge text-bg-light mt-3">Nama Guru</span>
      <h2 class="fs-9 fw-semibold my-4">Latihan Bab 1 - PKN</h2>
      <div class="d-flex align-items-center gap-4">
        <div class="d-flex align-items-center fs-2 ms-auto">
          <i class="ti ti-point text-dark"></i>Sat, Jan 14
        </div>
      </div>
    </div>
    <div class="card-body border-top p-4">
      <h2 class="fs-8 fw-semibold mb-3">Deskripsi Tugas</h2>
      <div class="task-body">
        <div class="task-desc">
            Jawablah soal-soal berikut untuk menguji pemahaman kamu tentang nilai-nilai Pancasila.
        </div>

        <div class="task-info-grid mt-4">
            <div>
                <p><strong>Waktu Mulai:</strong><br> 12 Oktober 2025, 08:00 WIB</p>
            </div>
            <div>
                <p><strong>Deadline:</strong><br> 13 Oktober 2025, 23:59 WIB</p>
            </div>
            <div>
                <p><strong>Durasi:</strong><br> 30 menit</p>
            </div>
            <div>
                <p><strong>Jumlah Soal:</strong><br> 10 Soal</p>
            </div>
        </div>
    </div>
      <div class="border-top mt-7 pt-7">
        <h3 class="fw-semibold mb-2"></h3>
        <div class="p-3 bg-light rounded border-start border-2 border-primary">
            <div class="task-footer">
                <center>
                <a href="/student/task" class="btn btn-primary">
                    <i class="ti ti-arrow-left"></i> Kembali
                </a>
                <a href="/student/task/{id}/assignment" class="btn btn-primary">
                    <i class="ti ti-edit"></i> Kerjakan Sekarang
                </a>
            </center>
                 {{-- Jika tugas belum aktif / sudah lewat waktu:
                <button class="btn btn-outline-secondary" disabled>
                    <i class="ti ti-lock"></i> Tidak Bisa Dikerjakan
                </button> --}}
                
            </div>
        </div>
      </div>
    </div>
  </div>

  @endsection



  @push('script')
      <script src="{{ asset('assets/libs/datatables.net/js/jquery.dataTables.min.js') }}"></script>
      <script src="https://cdn.datatables.net/buttons/2.4.2/js/dataTables.buttons.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
      <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.html5.min.js"></script>
      <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.print.min.js"></script>
  
      <script src="{{ asset('assets/js/datatable/datatable-advanced.init.js') }}"></script>
  @endpush
{{-- @extends('administration.master')

@push('link')
    <style>
        .task-container {
            max-width: 800px;
            margin: 40px auto;
            background: #fff;
            border-radius: 16px;
            box-shadow: 0 4px 16px rgba(0,0,0,0.08);
            overflow: hidden;
            transition: all 0.3s ease;
        }

        .task-header {
            background: linear-gradient(135deg, #7367f0, #9b8cf9);
            color: white;
            padding: 25px 30px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .task-header .icon-circle {
            background: rgba(255, 255, 255, 0.15);
            border-radius: 50%;
            padding: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .task-header i {
            font-size: 28px;
        }

        .task-body {
            padding: 30px;
        }

        .task-body .badge-type {
            font-size: 0.9rem;
            padding: 6px 12px;
            border-radius: 8px;
        }

        .task-info-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 12px;
            margin-top: 20px;
        }

        .task-info-grid p {
            margin: 0;
            font-size: 0.95rem;
        }

        .task-footer {
            border-top: 1px solid #eaeaea;
            background-color: #f8f9fa;
            padding: 20px 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .btn-gradient {
            background: linear-gradient(135deg, #7367f0, #9b8cf9);
            border: none;
            color: white;
            transition: 0.3s;
        }

        .btn-gradient:hover {
            background: linear-gradient(135deg, #6052d9, #8771eb);
            color: white;
        }

        .task-desc {
            background: #f6f6fb;
            padding: 15px 20px;
            border-radius: 10px;
            font-size: 0.95rem;
        }
    </style>
@endpush

@section('title')
    SiTAW | Detail Tugas (Tampilan Modern)
@endsection

@section('content')
<div class="task-container">
    {{-- Header 
    <div class="task-header">
        <div>
            <h4 class="mb-1">Latihan Bab 1 - PKN</h4>
            <span class="badge bg-primary badge-type">Pilihan Ganda</span>
        </div>
        <div class="icon-circle">
            <i class="ti ti-notebook"></i>
        </div>
    </div>

    {{-- Body 
    <div class="task-body">
        <p class="fw-semibold mb-2">Deskripsi Tugas</p>
        <div class="task-desc">
            Jawablah soal-soal berikut untuk menguji pemahaman kamu tentang nilai-nilai Pancasila.
        </div>

        <div class="task-info-grid mt-4">
            <div>
                <p><strong>Waktu Mulai:</strong><br> 12 Oktober 2025, 08:00 WIB</p>
            </div>
            <div>
                <p><strong>Deadline:</strong><br> 13 Oktober 2025, 23:59 WIB</p>
            </div>
            <div>
                <p><strong>Durasi:</strong><br> 30 menit</p>
            </div>
            <div>
                <p><strong>Jumlah Soal:</strong><br> 10 Soal</p>
            </div>
        </div>
    </div>

 Footer 
    <div class="task-footer">
        <a href="#" class="btn btn-outline-secondary">
            <i class="ti ti-arrow-left"></i> Kembali
        </a>
        <a href="#" class="btn btn-gradient">
            <i class="ti ti-edit"></i> Kerjakan Sekarang
        </a>

         Jika tugas belum aktif / sudah lewat waktu:
        <button class="btn btn-outline-secondary" disabled>
            <i class="ti ti-lock"></i> Tidak Bisa Dikerjakan
        </button>
        
    </div>
</div>
@endsection --}}
