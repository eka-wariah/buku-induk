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
              <h4 class="fw-semibold mb-8">LAMARAN</h4>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                      <a class="text-muted text-decoration-none" href="/administration/applications">Data Pelamar</a>
                    </li>
                    <li class="breadcrumb-item" aria-current="page">Persyaratan Lamaran</li>
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
            <h4 class="card-title mb-0">Persyaratan Lamaran </h4>
          </div>
          <form action="" method="post">
            @csrf
            <div class="card-body">
                <div class="mb-4 row align-items-center">
                    <label for="exampleInputText1" class="form-label col-sm-3 col-form-label">Posisi yang di Lamar</label>
                    <div class="col-sm-9">
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Pilih</option>
                            <option value="1"></option>
                            <option value="2"></option>
                          </select>
                    </div>
                    @error('')
                      <div>error</div>
                    @enderror
                  </div>
                  <div class="mb-4 row align-items-center">
                    <label for="exampleInputText1" class="form-label col-sm-3 col-form-label">Upload File</label>
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
