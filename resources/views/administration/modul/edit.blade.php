@extends('administration.master')

@push('link')
    
@endpush

@section('title')
    SiTAW | Tambah Kategori
@endsection

@section('content')
   <div class="row">
    <div class="col-lg-12">
      <div class="card bg-info-subtle shadow-none position-relative overflow-hidden mb-4">
        <div class="card-body px-4 py-3">
          <div class="row align-items-center">
            <div class="col-9">
              <h4 class="fw-semibold mb-8">MODUL</h4>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item">
                    <a class="text-muted text-decoration-none" href="/administration/module">Daftar Modul</a>
                  </li>
                  <li class="breadcrumb-item">
                    <a class="text-muted text-decoration-none" href="/administration/module/{id}/edit">Tambah Modul</a>
                  </li>
                <li class="breadcrumb-item" aria-current="page">Edit Modul</li>

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
          <div class="px-4 py-3 border-bottom">
            <h4 class="card-title mb-0">Edit Modul </h4>
          </div>
          <form action="" method="post">
            @csrf
            <div class="card-body">
                <div class="mb-4 row align-items-center">
                    <label for="exampleInputText1" class="form-label col-sm-3 col-form-label">Nama Modul</label>
                    <div class="col-sm-9">
                      <input type="text" name="" class="form-control" id="exampleInputText1" placeholder="Nama Jurusan" required oninvalid="this.setCustomValidity('Nama Jurusan Wajib Diisi')" 
                      onchange="this.setCustomValidity('')">
                    </div>
                    @error('')
                      <div>error</div>
                    @enderror
                  </div>
                  <div class="mb-4 row align-items-center">
                    <label for="exampleInputText1" class="form-label col-sm-3 col-form-label">Upload File Modul</label>
                    <div class="col-sm-9">
                        <input 
                        type="file" 
                        name="file_upload" 
                        class="form-control" 
                        id="file_upload" 
                        required 
                        oninvalid="this.setCustomValidity('File wajib diupload')" 
                        onchange="this.setCustomValidity('')"
                      >
                    </div>
                    @error('')
                      <div>error</div>
                    @enderror
                  </div>
                  <div class="mb-4 row align-items-center">
                    <label for="exampleInputText1" class="form-label col-sm-3 col-form-label">Tanggal Akses</label>
                    <div class="col-sm-9">
                      <input type="date" name="" class="form-control" id="exampleInputText1" placeholder="Singkatan Jurusan" required oninvalid="this.setCustomValidity('Nama Jurusan Wajib Diisi')" 
                      onchange="this.setCustomValidity('')">
                    </div>
                    @error('')
                      <div>error</div>
                    @enderror
                  </div>
                <div class="row">
                  <div class="col-sm-3"></div>
                  <div class="col-sm-9">
                    <input type="submit" class="btn btn-primary" value="Kirim" id="">
                  </div>
                </div>
              </div>
          </form>
          
        </div>
      </div>
   </div>
    
@endsection



@push('script')
    
@endpush
