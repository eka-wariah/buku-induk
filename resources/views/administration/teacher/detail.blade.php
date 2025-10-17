@extends('administration.master')

@push('link')
    <link rel="stylesheet" href="{{ asset('assets/libs/datatables.net-bs5/css/dataTables.bootstrap5.min.css') }}">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.2/css/buttons.dataTables.min.css">
@endpush

@section('title')
    SITAW | Daftar Jurusan
@endsection

@section('content')
<div class="card bg-info-subtle shadow-none position-relative overflow-hidden mb-4">
    <div class="card-body px-4 py-3">
      <div class="row align-items-center">
        <div class="col-9">
            <h4 class="fw-semibold mb-8">GURU</h4>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                  <li class="breadcrumb-item" aria-current="page">Daftar Guru</a>
                    </li>
                <li class="breadcrumb-item">
                  <a class="text-muted text-decoration-none" href="/administration/teacher/{id}/edit">Edit Data Guru</a>
                </li>
                <li class="breadcrumb-item">
                    <a class="text-muted text-decoration-none" href="/administration/teacher/import">Import Data Guru</a>
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
            <h4 class="card-title mb-0">Daftar Guru</h4>
        </div>
<div class="card overflow-hidden chat-application">
    

  <div class="d-flex h-100">
    <!-- Sidebar -->
    <div class="min-width-340 border-end">
      <div class="px-4 pt-4 pb-3">
        <form class="position-relative">
          <input type="text" class="form-control py-2 ps-5" id="text-srh" placeholder="Search" />
          <i class="ti ti-search position-absolute top-50 start-0 translate-middle-y fs-6 text-dark ms-3"></i>
        </form>
      </div>
  
      <!-- Tabs as list -->
      <ul class="list-group list-group-flush nav flex-column" id="pills-tab" role="tablist" data-simplebar>
        <li class="list-group-item p-0">
          <button class="nav-link w-100 text-start py-3 px-4 active d-flex align-items-center"
            id="pills-account-tab" data-bs-toggle="pill" data-bs-target="#pills-account" type="button" role="tab"
            aria-controls="pills-account" aria-selected="true">
            <i class="ti ti-user-circle me-3 fs-5"></i> Biodata Diri
          </button>
        </li>
  
        <li class="list-group-item p-0">
          <button class="nav-link w-100 text-start py-3 px-4 d-flex align-items-center"
            id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab"
            aria-controls="pills-contact" aria-selected="false">
            <i class="ti ti-bell me-3 fs-5"></i> Informasi Kontak
          </button>
        </li>
  
        <li class="list-group-item p-0">
          <button class="nav-link w-100 text-start py-3 px-4 d-flex align-items-center"
            id="pills-wife-tab" data-bs-toggle="pill" data-bs-target="#pills-wife" type="button" role="tab"
            aria-controls="pills-wife" aria-selected="false">
            <i class="ti ti-heart me-3 fs-5"></i> Data Suami/Isteri
          </button>
        </li>
  
        <li class="list-group-item p-0">
          <button class="nav-link w-100 text-start py-3 px-4 d-flex align-items-center"
            id="pills-employee-tab" data-bs-toggle="pill" data-bs-target="#pills-employee" type="button" role="tab"
            aria-controls="pills-employee" aria-selected="false">
            <i class="ti ti-briefcase me-3 fs-5"></i> Status Kepegawaian
          </button>
        </li>

        <li class="list-group-item p-0">
          <button class="nav-link w-100 text-start py-3 px-4 d-flex align-items-center"
            id="pills-smk-tab" data-bs-toggle="pill" data-bs-target="#pills-smk" type="button" role="tab"
            aria-controls="pills-smk" aria-selected="false">
            <i class="ti ti-school me-3 fs-5"></i> Edit data mengajar di SMKS Mahaputra
          </button>
        </li>
  
        <li class="list-group-item p-0">
          <button class="nav-link w-100 text-start py-3 px-4 d-flex align-items-center"
            id="pills-teaching-tab" data-bs-toggle="pill" data-bs-target="#pills-teaching" type="button" role="tab"
            aria-controls="pills-teaching" aria-selected="false">
            <i class="ti ti-article me-3 fs-5"></i> Riwayat Mengajar
          </button>
        </li>
  
        <li class="list-group-item p-0">
          <button class="nav-link w-100 text-start py-3 px-4 d-flex align-items-center"
            id="pills-education-tab" data-bs-toggle="pill" data-bs-target="#pills-education" type="button" role="tab"
            aria-controls="pills-education" aria-selected="false">
            <i class="ti ti-school me-3 fs-5"></i> Riwayat Pendidikan
          </button>
        </li>



      </ul>
    </div>
  
    <!-- Content -->
    <div class="flex-grow-1">
      <div class="tab-content p-4" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-account" role="tabpanel" aria-labelledby="pills-account-tab">
          <h5>Biodata Diri</h5>
          <p class="card-subtitle mb-4">Untuk mengubah detail pribadi Anda, edit dan simpan dari sini</p>
                      <form>
                        <div class="row">
                          <div class="col-lg-6">
                            <div class="mb-3">
                                <label for="exampleInputtext" class="form-label">NIK</label>
                                <input type="text"
                                name="nik"
                                value=""
                                class="form-control"
                                inputmode="numeric"
                                pattern="[0-9]*"
                                maxlength="16"
                                oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 16)"
                                placeholder="Isi NIK Anda"
                                required />
                              </div>
                            
                            <div class="mb-3">
                                <label for="exampleInputtext" class="form-label">Tempat Lahir</label>
                                <input type="text" class="form-control" id="exampleInputtext" placeholder="Tempat Lahir">
                              </div>
                            <div class="mb-3">
                              <label class="form-label">Jenis Kelamin</label>
                              <select class="form-select" aria-label="Default select example">
                                <option selected>Pilih</option>
                                <option value="1">Laki-Laki</option>
                                <option value="2">Wanita</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-lg-6">
                            <div class="mb-3">
                                <label for="exampleInputtext" class="form-label">Nama Lengkap</label>
                                <input type="text" class="form-control" id="exampleInputtext" placeholder="Mathew Anderson">
                              </div>
                              <div class="mb-3">
                                <label for="exampleInputtext" class="form-label">Tanggal Lahir</label>
                                <input type="date" class="form-control" id="exampleInputtext" placeholder="Mathew Anderson">
                              </div>
                              <div class="mb-3">
                                <label class="form-label">Agama</label>
                                <select class="form-select" name="agama" aria-label="Pilih Agama" required>
                                  <option hidden value="">Pilih Agama</option>
                                  <option value="Islam">Islam</option>
                                  <option value="Kristen">Kristen</option>
                                  <option value="Katolik">Katolik</option>
                                  <option value="Hindu">Hindu</option>
                                  <option value="Buddha">Buddha</option>
                                  <option value="Konghucu">Konghucu</option>
                                </select>
                              </div>
                          </div>
                          <div class="col-12">
                            <div class="mb-3">
                              <label class="form-label d-block">Status Pernikahan</label>
                            
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="status_nikah" id="nikah1" value="Belum Menikah" required>
                                <label class="form-check-label" for="nikah1">Belum Menikah</label>
                              </div>
                            
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="status_nikah" id="nikah2" value="Menikah">
                                <label class="form-check-label" for="nikah2">Menikah</label>
                              </div>
                            
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="status_nikah" id="nikah3" value="Cerai Hidup">
                                <label class="form-check-label" for="nikah3">Cerai Hidup</label>
                              </div>
                            
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="status_nikah" id="nikah4" value="Cerai Mati">
                                <label class="form-check-label" for="nikah4">Cerai Mati</label>
                              </div>
                            </div>
                          </div>
                          <div class="col-12">
                            <div class="d-flex align-items-center justify-content-end mt-4 gap-6">
                              <button class="btn btn-primary">Save</button>
                              <button class="btn bg-danger-subtle text-danger">Cancel</button>
                            </div>
                          </div>
                        </div>
                      </form>
        </div>
  
        <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
          <h5>Informasi Kontak</h5>
          <p class="card-subtitle mb-4">Untuk mengubah detail pribadi Anda, edit dan simpan dari sini</p>
          <form>
            <div class="row">
              <div class="col-lg-6">
                
                <div class="mb-3">
                    <label for="exampleInputtext" class="form-label">Alamat</label>
                    <input type="text" class="form-control" id="exampleInputtext" placeholder="Tempat Lahir">
                  </div>
                  
                  <div class="mb-3">
                    <label for="exampleInputtext" class="form-label">RW</label>
                    <input type="text"
                    name=""
                    value=""
                    class="form-control"
                    inputmode="numeric"
                    pattern="[0-9]*"
                    maxlength="2"
                    oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 16)"
                    placeholder="Isi No. RW Anda"
                    required />
                  </div>
                 
                  <div class="mb-3">
                    <label for="exampleInputtext" class="form-label">Kecamatan</label>
                    <input type="text" class="form-control" id="exampleInputtext" placeholder="Kecamatan">
                  </div>
                 
                  <div class="mb-3">
                    <label for="exampleInputtext" class="form-label">Provinsi</label>
                    <input type="text" class="form-control" id="exampleInputtext" placeholder="Provinsi">
                  </div>
                 
                  <div class="mb-3">
                    <label for="exampleInputtext" class="form-label">No. Telepon</label>
                    <input type="text"
                    name=""
                    value=""
                    class="form-control"
                    inputmode="numeric"
                    pattern="[0-9]*"
                    maxlength="13"
                    oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 16)"
                    placeholder="No. Telepon"
                    required />
                  </div>
               
              </div>
              <div class="col-lg-6">
                <div class="mb-3">
                  <label for="exampleInputtext" class="form-label">RT</label>
                  <input type="text"
                  name=""
                  value=""
                  class="form-control"
                  inputmode="numeric"
                  pattern="[0-9]*"
                  maxlength="2"
                  oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 16)"
                  placeholder="Isi No. RT Anda"
                  required />
                </div>
                <div class="mb-3">
                  <label for="exampleInputtext" class="form-label">Desa/Kelurahan</label>
                  <input type="text" class="form-control" id="exampleInputtext" placeholder="Desa/Kelurahan">
                </div>
                <div class="mb-3">
                  <label for="exampleInputtext" class="form-label">Kabupaten</label>
                  <input type="text" class="form-control" id="exampleInputtext" placeholder="Kabupaten">
                </div>
                <div class="mb-3">
                  <label for="exampleInputtext" class="form-label">Kode Pos</label>
                  <input type="text"
                  name=""
                  value=""
                  class="form-control"
                  inputmode="numeric"
                  pattern="[0-9]*"
                  maxlength="5"
                  oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 16)"
                  placeholder="Kode Pos"
                  required />
                </div>
                 
        
              </div>
              
              <div class="col-12">
                <div class="d-flex align-items-center justify-content-end mt-4 gap-6">
                  <button class="btn btn-primary">Save</button>
                  <button class="btn bg-danger-subtle text-danger">Cancel</button>
                </div>
              </div>
            </div>
          </form>
        </div>
  
        <div class="tab-pane fade" id="pills-wife" role="tabpanel" aria-labelledby="pills-wife-tab">
          <h5>Data Suami/Isteri</h5>
          <p class="card-subtitle mb-4">Untuk mengubah detail pribadi Anda, edit dan simpan dari sini</p>
                      <form>
                        <div class="row">
                          <div class="col-lg-6">
                            
                            <div class="mb-3">
                                <label for="exampleInputtext" class="form-label">Nama Suami/Isteri</label>
                                <input type="text" class="form-control" id="exampleInputtext" placeholder="Tempat Lahir">
                              </div>
                              
                              <div class="mb-3">
                                <label for="exampleInputtext" class="form-label">Pekerjaan</label>
                                <input type="text"
                                name=""
                                value=""
                                class="form-control"
                                inputmode="numeric"
                                pattern="[0-9]*"
                                maxlength="2"
                                oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 16)"
                                placeholder="Isi No. RW Anda"
                                required />
                              </div>
                          </div>
                          <div class="col-lg-6">
                            <div class="mb-3">
                              <label for="exampleInputtext" class="form-label">NIK</label>
                              <input type="text"
                              name=""
                              value=""
                              class="form-control"
                              inputmode="numeric"
                              pattern="[0-9]*"
                              maxlength="13"
                              oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 16)"
                              placeholder="NIK"
                              required />
                            </div>
                            <div class="mb-3">
                              <label for="exampleInputtext" class="form-label">NIP</label>
                              <input type="text"
                              name=""
                              value=""
                              class="form-control"
                              inputmode="numeric"
                              pattern="[0-9]*"
                              maxlength="13"
                              oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 16)"
                              placeholder="NIP"
                              required />
                            </div>                    
                          </div>
                          
                          <div class="col-12">
                            <div class="d-flex align-items-center justify-content-end mt-4 gap-6">
                              <button class="btn btn-primary">Save</button>
                              <button class="btn bg-danger-subtle text-danger">Cancel</button>
                            </div>
                          </div>
                        </div>
                      </form>
        </div>
  
        <div class="tab-pane fade" id="pills-employee" role="tabpanel" aria-labelledby="pills-employee-tab">
          <h5>Status Kepegawaian</h5>
          <p class="card-subtitle mb-4">Untuk mengubah detail pribadi Anda, edit dan simpan dari sini</p>
                      <form>
                        <div class="row">
                          <div class="col-lg-6">
                            
                            <div class="mb-3">
                                <label for="exampleInputtext" class="form-label">TMT</label>
                                <input type="date" class="form-control" id="exampleInputtext" placeholder="Tempat Lahir">
                              </div>
                              
                              <div class="mb-3">
                                <label for="exampleInputtext" class="form-label">No. SK</label>
                                <input type="text" name="" class="form-control" placeholder="Nama Sekolah Dasar" required>
                              </div>
                              <div class="mb-3">
                                <label for="exampleInputtext" class="form-label">Durasi</label>
                                <input type="text" name="" class="form-control" placeholder="Nama Sekolah Dasar" required>
                              </div>
                          </div>
                          <div class="col-lg-6">
                            <div class="mb-3">
                              <label for="exampleInputtext" class="form-label">Status</label>
                              <select class="form-select" name="agama" aria-label="Pilih Agama" required>
                                <option hidden value="">Pilih</option>
                                <option value="Guru Tetap">Guru Tetap</option>
                                <option value="Guru Tidak Tetap">Guru Tidak Tetap</option>
                              </select>
                            </div>
                            <div class="mb-3">
                              <label for="exampleInputtext" class="form-label">Jabatan</label>
                              <input type="text" name="" class="form-control" placeholder="Nama Sekolah Dasar" required>
                            </div> 
                            <div class="mb-3">
                              <label for="exampleInputtext" class="form-label">Inpassing</label>
                              <select class="form-select" name="agama" aria-label="Pilih Agama" required>
                                <option hidden value="">Pilih</option>
                                <option value="Sudah">Sudah</option>
                                <option value="Belum">Belum</option>
                              </select>
                            </div>                    
                          </div>
                          
                          <div class="col-12">
                            <div class="d-flex align-items-center justify-content-end mt-4 gap-6">
                              <button class="btn btn-primary">Save</button>
                              <button class="btn bg-danger-subtle text-danger">Cancel</button>
                            </div>
                          </div>
                        </div>
                      </form>
        </div>

        <div class="tab-pane fade" id="pills-smk" role="tabpanel" aria-labelledby="pills-smk-tab">
          <h5>Riwayat Mengajar</h5>
          <p class="card-subtitle mb-4">Untuk mengubah detail pribadi Anda, edit dan simpan dari sini</p>
                      <form>
                        <div class="row">
                          <div class="col-lg-6">          
                            <div class="mb-3">
                                <label for="exampleInputtext" class="form-label">Mata Pelajaran</label>
                                <input type="text" name="" class="form-control" placeholder="Nama Sekolah Dasar" required>
                              </div>
                              <div class="mb-3">
                                <label for="exampleInputtext" class="form-label">Tahun Pelajaran</label>
                                <select class="form-select" name="agama" aria-label="Pilih Agama" required>
                                  <option hidden value="">Pilih</option>
                                  <option value=""></option>
                                  <option value=""></option>
                                </select>
                              </div>                    
                            </div>
                       
                          <div class="col-lg-6">
                            <div class="mb-3">
                              <label for="exampleInputtext" class="form-label">Tingkat/Kelas</label>
                              <select class="form-select" name="agama" aria-label="Pilih Agama" required>
                                <option hidden value="">Pilih</option>
                                <option value=""></option>
                                <option value=""></option>
                              </select>
                            </div>
                            
                          <br><br><br><br>
                          <div class="col-12">
                            <div class="d-flex align-items-center justify-content-end mt-4 gap-6">
                              <button class="btn btn-primary">Save</button>
                              <button class="btn bg-danger-subtle text-danger">Cancel</button>
                            </div>
                          </div>
                        </div>
                      </form>
                    </div>
      </div>
  
        <div class="tab-pane fade" id="pills-teaching" role="tabpanel" aria-labelledby="pills-teaching-tab">
          <h5>Riwayat Mengajar</h5>
          <p class="card-subtitle mb-4">
            Tambahkan pengalaman mengajar Anda, bisa lebih dari satu sekolah atau mata pelajaran.
          </p>

          <form>

            <div id="teaching-container">
              <div class="teaching-item border rounded p-3 mb-3">
                <div class="row">
                  <div class="col-lg-6">
                    <div class="mb-3">
                      <label class="form-label">Mata Pelajaran</label>
                      <input type="text" name="teaching[0][mapel]" class="form-control" placeholder="Mata Pelajaran" required>
                    </div>
                    <div class="mb-3">
                      <label class="form-label">Kelas/Tingkat</label>
                      <input type="number" name="teaching[0][kelas]" class="form-control" placeholder="Tingkat" required>
                    </div>
                    <div class="mb-3">
                      <label class="form-label">Tahun Masuk</label>
                      <select name="teaching[0][tahun_masuk]" class="form-control" required>
                        <option hidden value="">Pilih Tahun</option>
                        @for ($year = 2015; $year <= date('Y'); $year++)
                          <option value="{{ $year }}">{{ $year }}</option>
                        @endfor
                      </select>
                    </div>
                    <div class="mb-3">
                      <label class="form-label d-block">Status Mengajar</label>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="teaching[0][status]" value="Aktif" required>
                        <label class="form-check-label">Aktif</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="teaching[0][status]" value="Tidak Aktif">
                        <label class="form-check-label">Tidak Aktif</label>
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-6">
                    <div class="mb-3">
                      <label class="form-label">Nama Sekolah</label>
                      <input type="text" name="teaching[0][sekolah]" class="form-control" placeholder="Nama Sekolah" required>
                    </div>
                    <div class="mb-3">
                      <label class="form-label">Jumlah Jam/Minggu</label>
                      <input type="number" name="teaching[0][jam]" class="form-control" placeholder="Jam per minggu" required>
                    </div>
                    <div class="mb-3">
                      <label class="form-label">Tahun Keluar</label>
                      <select name="teaching[0][tahun_keluar]" class="form-control">
                        <option hidden value="">Pilih Tahun</option>
                        @for ($year = 2015; $year <= date('Y'); $year++)
                          <option value="{{ $year }}">{{ $year }}</option>
                        @endfor
                      </select>
                    </div>
                  </div>
                </div>

                <div class="text-end">
                  <button type="button" class="btn btn-danger btn-sm remove-item">Hapus</button>
                </div>
              </div>
            </div>

            <div class="mb-3 text-end">
              <button type="button" id="addTeaching" class="btn btn-secondary">
                + Tambah Riwayat Mengajar
              </button>
            </div>

            <div class="col-12">
              <div class="d-flex align-items-center justify-content-end mt-4 gap-6">
                <button class="btn btn-primary">Save</button>
                <button class="btn bg-danger-subtle text-danger">Cancel</button>
              </div>
            </div>
          </form>
        </div>
  
        <div class="tab-pane fade" id="pills-education" role="tabpanel" aria-labelledby="pills-education-tab">
          <h5>Riwayat Pendidikan</h5>
          <p class="card-subtitle mb-4">Silakan isi riwayat pendidikan formal Anda dari SD hingga perguruan tinggi.</p>
          <form>
            <div class="row">
              <div class="col-lg-6">
                
                <div class="mb-3">
                <label class="form-label">SD / Sederajat</label>
                <input type="text" name="" class="form-control" placeholder="Nama Sekolah Dasar" required>
              </div>
              <div class="mb-3">
                <label class="form-label">SMP / Sederajat</label>
                <input type="text" name="smp_nama" class="form-control" placeholder="Nama Sekolah Menengah Pertama" required>
              </div>
              <div class="md-3">
                <label class="form-label">SMA / Sederajat</label>
                <input type="text" name="sma_nama" class="form-control" placeholder="Nama Sekolah Menengah Atas" required>
              </div>
              
            </div>
            <div class="col-lg-6">
              <div class="mb-3">
                <label for="exampleInputtext" class="form-label">Tahun Lulus</label>
                <input type="text"
                name=""
                value=""
                class="form-control"
                inputmode="numeric"
                pattern="[0-9]*"
                maxlength="4"
                oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 16)"
                placeholder="Isi NIK Anda"
                required />
              </div>
              <div class="mb-3">
                <label for="exampleInputtext" class="form-label">Tahun Lulus</label>
                <input type="text"
                name=""
                value=""
                class="form-control"
                inputmode="numeric"
                pattern="[0-9]*"
                maxlength="4"
                oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 16)"
                placeholder="Isi NIK Anda"
                required />
              </div>
              <div class="mb-3">
                <label for="exampleInputtext" class="form-label">Tahun Lulus</label>
                <input type="text"
                name=""
                value=""
                class="form-control"
                inputmode="numeric"
                pattern="[0-9]*"
                maxlength="4"
                oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 16)"
                placeholder="Isi NIK Anda"
                required />
              </div>
            </div>
            <div class="mb-3">
              <label class="form-label">Nama Perguruan Tinggi</label>
              <input type="text" name="pt_nama" class="form-control" placeholder="Nama Universitas atau Institut">
            </div>
            <div class="row mb-3">
              <div class="col-md-6">
                <label class="form-label">Fakultas</label>
                <input type="text" name="pt_fakultas" class="form-control" placeholder="Contoh: Fakultas Teknik">
              </div>
              <div class="col-md-6">
                <label class="form-label">Jurusan</label>
                <input type="text" name="pt_jurusan" class="form-control" placeholder="Contoh: Informatika">
              </div>
            </div>
            <div class="row mb-3">
              <div class="col-md-6">
                <label class="form-label">Tahun Lulus</label>
                <input type="number" name="pt_tahun" class="form-control" placeholder="Tahun" min="1950" max="{{ date('Y') }}">
              </div>
              <div class="col-md-6">
                <label class="form-label">Gelar</label>
                <input type="text" name="pt_gelar" class="form-control" placeholder="Contoh: S.Kom, S.Pd, S.E, dll">
              </div>
            </div>

            <!-- Tombol aksi -->
            <div class="d-flex align-items-center justify-content-end gap-2 mt-4">
              <button type="submit" class="btn btn-primary">Simpan</button>
              <button type="reset" class="btn bg-danger-subtle text-danger">Batal</button>
            </div>
          </form>
        </div>

        

      </div>
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
    <script src="{{ asset('assets/js/vendor.min.js')}}"></script>
  <!-- Import Js Files -->
  <script src="{{ asset('assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{ asset('assets/libs/simplebar/dist/simplebar.min.js')}}"></script>
  <script src="{{ asset('assets/js/theme/app.init.js')}}"></script>
  <script src="{{ asset('assets/js/theme/theme.js')}}"></script>
  <script src="{{ asset('assets/js/theme/app.min.js')}}"></script>
  <script src="{{ asset('assets/js/theme/sidebarmenu.js')}}"></script>

  <!-- solar icons -->
  <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js"></script>
  <script src="{{ asset('assets/js/apps/chat.js')}}"></script>
@endpush