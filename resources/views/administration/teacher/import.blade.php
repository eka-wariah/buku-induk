@extends('administration.master')

@push('link')
    <link rel="stylesheet" href="{{ asset('assets/libs/datatables.net-bs5/css/dataTables.bootstrap5.min.css') }}">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.2/css/buttons.dataTables.min.css">
@endpush

@section('title')
    SITAW | Daftar Jurusan
@endsection

@section('content')
    <div class="datatables">
        <div class="card bg-info-subtle shadow-none position-relative overflow-hidden mb-4">
            <div class="card-body px-4 py-3">
              <div class="row align-items-center">
                <div class="col-9">
                  <h4 class="fw-semibold mb-8">GURU</h4>
                  <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a class="text-muted text-decoration-none" href="/administration/teacher2">Daftar Guru</a>
                          </li>
                      <li class="breadcrumb-item">
                        <a class="text-muted text-decoration-none" href="/administration/major/create">Edit Data Guru</a>
                      </li>
                      <li class="breadcrumb-item" aria-current="page">Import Data Guru</a>
                      </li>
                    </ol>
                   
                  </nav>
                </div>
                <div class="col-3">
                  <div class="text-center mb-n5">
                    <img src="{{ asset('assets/images/breadcrumb/ChatBc.png')}}" alt="modernize-img" class="img-fluid mb-n4" />
                  </div>
                </div>
              </div>
            </div>
          </div>
       
        <div class="card">
            <div class="card-body">
                <div class="mb-5 position-relative">
                    <h4 class="card-title mb-0">Import File Data Guru</h4>
                </div>
                
                <form>
                    <div class="mb-3">
                        <label class="form-label fw-semibold">Pilih File (.xlsx atau .csv)</label>
                        <input type="file" name="file" class="form-control" accept=".xlsx,.csv" required>
                        <small class="text-muted">
                            Pastikan format sesuai template. <a class="text-primary">Unduh Template</a>
                        </small>
                    </div>
                    <button type="submit" class="btn btn-primary">
                        <i class="ti ti-upload me-1"></i> Import Sekarang
                    </button>
                    <button type="submit" class="btn btn-primary">
                        <i class="ti ti-upload me-1"></i> Kembali
                    </button>
                </form>
            </div>
        </div>
    
        <!-- Optional Preview Table -->
        @isset($preview)
        <div class="card mt-4">
            <div class="card-header bg-light">
                <h5 class="card-title mb-0"><i class="ti ti-table me-2"></i> Preview Data</h5>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="previewTable" class="table table-bordered align-middle">
                        <thead class="table-light">
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>NIP</th>
                                <th>Jabatan</th>
                                <th>Mapel</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($preview as $index => $guru)
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        @endisset
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
    <script src="{{ asset('assets/libs/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/libs/datatables.net-bs5/js/dataTables.bootstrap5.min.js') }}"></script>
    <script>
    $(document).ready(function() {
        $('#previewTable').DataTable();
    });
</script>

@endpush
