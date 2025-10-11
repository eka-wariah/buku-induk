@extends('administration.master')

@push('link')
    <link rel="stylesheet" href="{{ asset('assets/libs/datatables.net-bs5/css/dataTables.bootstrap5.min.css') }}">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.2/css/buttons.dataTables.min.css">
@endpush

@section('title')
  SITAW | PPDB
@endsection

@section('content')
<div class="content-wrapper">
  <div class="content-body">
<div class="container-fluid">
  <!-- Breadcrumb -->
  <div class="card bg-info-subtle shadow-none position-relative overflow-hidden mb-4">
    <div class="card-body px-4 py-3">
      <div class="row align-items-center">
        <div class="col-9">
          <h4 class="fw-semibold mb-8">LAMARAN</h4>
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item" aria-current="page">Biodata</li>
              <li class="breadcrumb-item">
                <a class="text-muted text-decoration-none" href="../main/index.html">Persyaratan Lamaran</a>
              </li>
            </ol>
          </nav>
        </div>
        <div class="col-3">
          <div class="text-center mb-n5">
            <img src="../assets/images/breadcrumb/ChatBc.png" alt="modernize-img" class="img-fluid mb-n4" />
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Card Tabs -->
  <div class="card">
    <ul class="nav nav-pills user-profile-tab" id="pills-tab" role="tablist">
  <li class="nav-item" role="presentation">
    <button class="nav-link position-relative rounded-0 active d-flex align-items-center justify-content-center bg-transparent fs-3 py-3"
      id="pills-biodata-tab" data-bs-toggle="pill" data-bs-target="#biodata" type="button" role="tab"
      aria-controls="biodata" aria-selected="true">
      <i class="ti ti-user-circle me-2 fs-6"></i>
      <span class="d-none d-md-block">Biodata Siswa</span>
    </button>
  </li>

  <li class="nav-item" role="presentation">
    <button class="nav-link position-relative rounded-0 d-flex align-items-center justify-content-center bg-transparent fs-3 py-3"
      id="pills-alamat-tab" data-bs-toggle="pill" data-bs-target="#alamat" type="button" role="tab"
      aria-controls="alamat" aria-selected="false">
      <i class="ti ti-map-pin me-2 fs-6"></i>
      <span class="d-none d-md-block">Alamat</span>
    </button>
  </li>

  <li class="nav-item" role="presentation">
    <button class="nav-link position-relative rounded-0 d-flex align-items-center justify-content-center bg-transparent fs-3 py-3"
      id="pills-asal-sekolah-tab" data-bs-toggle="pill" data-bs-target="#asal-sekolah" type="button" role="tab"
      aria-controls="asal-sekolah" aria-selected="false">
      <i class="ti ti-school me-2 fs-6"></i>
      <span class="d-none d-md-block">Asal Sekolah</span>
    </button>
  </li>

  <li class="nav-item" role="presentation">
    <button class="nav-link position-relative rounded-0 d-flex align-items-center justify-content-center bg-transparent fs-3 py-3"
      id="pills-orangtua-tab" data-bs-toggle="pill" data-bs-target="#orangtua" type="button" role="tab"
      aria-controls="orangtua" aria-selected="false">
      <i class="ti ti-users me-2 fs-6"></i>
      <span class="d-none d-md-block">Biodata Orang Tua</span>
    </button>
  </li>

  <li class="nav-item" role="presentation">
    <button class="nav-link position-relative rounded-0 d-flex align-items-center justify-content-center bg-transparent fs-3 py-3"
      id="pills-ijazah-tab" data-bs-toggle="pill" data-bs-target="#ijazah" type="button" role="tab"
      aria-controls="ijazah" aria-selected="false">
      <i class="ti ti-certificate me-2 fs-6"></i>
      <span class="d-none d-md-block">Ijazah SMP</span>
    </button>
  </li>

  <li class="nav-item" role="presentation">
    <button class="nav-link position-relative rounded-0 d-flex align-items-center justify-content-center bg-transparent fs-3 py-3"
      id="pills-persyaratan-tab" data-bs-toggle="pill" data-bs-target="#persyaratan" type="button" role="tab"
      aria-controls="persyaratan" aria-selected="false">
      <i class="ti ti-file-description me-2 fs-6"></i>
      <span class="d-none d-md-block">Persyaratan</span>
    </button>
  </li>

  <li class="nav-item" role="presentation">
    <button class="nav-link position-relative rounded-0 d-flex align-items-center justify-content-center bg-transparent fs-3 py-3"
      id="pills-jurusan-tab" data-bs-toggle="pill" data-bs-target="#jurusan" type="button" role="tab"
      aria-controls="jurusan" aria-selected="false">
      <i class="ti ti-book me-2 fs-6"></i>
      <span class="d-none d-md-block">Pilih Jurusan</span>
    </button>
  </li>
</ul>


    <div class="card-body">
      <div class="tab-content">

        {{-- TAB 1 - BIODATA SISWA --}}
        <div class="tab-pane fade show active" id="biodata" role="tabpanel" aria-labelledby="biodata-tab" tabindex="0">
            <div class="row">
              <div class="col-12">
                <div class="card w-100 border position-relative overflow-hidden mb-0">
                  <div class="card-body p-4">
                    <h4 class="card-title">Biodata Siswa</h4>
                    <p class="card-subtitle mb-4">Lengkapi data diri siswa dengan benar sebelum melanjutkan ke tahap berikutnya.</p>
          
                    <form>
                      <div class="row">
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label">NISN</label>
                                <input type="text" class="form-control" placeholder="Nama Lengkap Siswa" required>
                              </div>
                          <div class="mb-3">
                            <label class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control" placeholder="Nama Lengkap Siswa" required>
                          </div>
                          <div class="mb-3">
                            <label class="form-label">Tempat Lahir</label>
                            <input type="text" class="form-control" placeholder="Nama Lengkap Siswa" required>
                          </div>
                          <div class="mb-3">
                            <label class="form-label">Agama</label>
                            <select class="form-select" required>
                              <option hidden>Pilih Agama</option>
                              <option>Islam</option>
                              <option>Kristen</option>
                              <option>Katolik</option>
                              <option>Hindu</option>
                              <option>Buddha</option>
                              <option>Konghucu</option>
                            </select>
                          </div>
                          <div class="mb-3">
                            <label class="form-label">Tinggi Badan</label>
                            <input type="text" class="form-control" placeholder="Nama Lengkap Siswa" required>
                          </div>
                          <div class="mb-3">
                            <label class="form-label">No. Telp Siswa</label>
                            <input type="text" class="form-control" placeholder="Nama Lengkap Siswa" required>
                          </div>
                         
          
                          
                        </div>
          
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label">NIK</label>
                                <input type="text" class="form-control" placeholder="Nama Lengkap Siswa" required>
                              </div>
                          <div class="mb-3">
                            <label class="form-label">Jenis Kelamin</label>
                            <select class="form-select" required>
                              <option hidden>Pilih Jenis Kelamin</option>
                              <option value="Laki-laki">Laki-laki</option>
                              <option value="Perempuan">Perempuan</option>
                            </select>
                          </div>

                          <div class="mb-3">
                            <label class="form-label">Tanggal Lahir</label>
                            <input type="date" class="form-control" required>
                          </div>
          
                          
          
                          <div class="mb-3">
                            <label class="form-label">Usia</label>
                            <input type="text" class="form-control" placeholder="Nama Lengkap Siswa" required>
                          </div>
                          <div class="mb-3">
                            <label class="form-label">Berat Badan</label>
                            <input type="text" class="form-control" placeholder="Nama Lengkap Siswa" required>
                          </div>
                        </div>
          
                        <div class="col-12">
                          <div class="d-flex align-items-center justify-content-end mt-4 gap-3">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <button type="reset" class="btn bg-danger-subtle text-danger">Batal</button>
                          </div>
                        </div>
                      </div>
                    </form>
          
                  </div>
                </div>
              </div>
            </div>
          </div>
          

        {{-- TAB 2 - ALAMAT --}}
        <div class="tab-pane fade" id="alamat" role="tabpanel" aria-labelledby="alamat-tab" tabindex="0">
            <div class="row">
              <div class="col-12">
                <div class="card w-100 border position-relative overflow-hidden mb-0">
                  <div class="card-body p-4">
                    <h4 class="card-title">Alamat Lengkap</h4>
                    <p class="card-subtitle mb-4">Lengkapi informasi alamat tempat tinggal siswa secara lengkap dan benar.</p>
          
                    <form>
                      <div class="row">
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label">Provinsi</label>
                                <select class="form-select" required>
                                  <option hidden>Pilih Provinsi</option>
                                  <option value=""></option>
                                  <option value=""></option>
                                </select>
                              </div>
          
                              <div class="mb-3">
                                <label class="form-label">Kecamatan</label>
                                <select class="form-select" required>
                                  <option hidden>Pilih Kecamatam</option>
                                  <option value=""></option>
                                  <option value=""></option>
                                </select>
                              </div>
          
                              <div class="mb-3">
                                <label class="form-label">Kode Pos</label>
                                <select class="form-select" required>
                                  <option hidden>Pilih Kode Pos</option>
                                  <option value=""></option>
                                  <option value=""></option>
                                </select>
                              </div>
          
                          
          
                          
                        </div>
          
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label">Kabupaten/Kota</label>
                                <select class="form-select" required>
                                  <option hidden>Pilih Kabupaten/Kota</option>
                                  <option value=""></option>
                                  <option value=""></option>
                                </select>
                              </div>
          
                          <div class="mb-3">
                            <label class="form-label">Desa</label>
                            <select class="form-select" required>
                              <option hidden>Pilih Desa</option>
                              <option value=""></option>
                              <option value=""></option>
                            </select>
                          </div>
          
                          <div class="mb-3">
                            <label class="form-label">Detail Alamat</label>
                            <textarea 
                              class="form-control" 
                              rows="3" 
                              placeholder="Masukkan alamat lengkap di sini..."
                            ></textarea>
                          </div>
                          
          
                         
                        </div>
          
                        <div class="col-12">
                          <div class="d-flex align-items-center justify-content-end mt-4 gap-3">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <button type="reset" class="btn bg-danger-subtle text-danger">Batal</button>
                          </div>
                        </div>
                      </div>
                    </form>
          
                  </div>
                </div>
              </div>
            </div>
          </div>
          

        {{-- TAB 3 - ASAL SEKOLAH --}}
        <div class="tab-pane fade" id="asal-sekolah" role="tabpanel" aria-labelledby="asal-sekolah-tab" tabindex="0">
          <div class="row">
            <div class="col-12">
              <div class="card w-100 border position-relative overflow-hidden mb-0">
                <div class="card-body p-4">
                  <h4 class="card-title">Asal Sekolah</h4>
                  <p class="card-subtitle mb-4">Masukkan data sekolah asal siswa dengan lengkap dan benar.</p>
        
                  <form>
                    <div class="row">
                      <div class="col-lg-6">
                        <div class="mb-3">
                          <label class="form-label">Nama Sekolah Asal</label>
                          <input type="text" class="form-control" placeholder="Contoh: SMP Negeri 1 Bandung" required>
                        </div>
                      </div>
        
                      <div class="col-lg-3">
                        <div class="mb-3">
                          <label class="form-label">Tahun Lulus</label>
                          <input type="number" class="form-control" min="2000" max="2099" placeholder="Contoh: 2024" required>
                        </div>
                      </div>
        
                      <div class="col-lg-3">
                        <div class="mb-3">
                          <label class="form-label">NPSN Sekolah</label>
                          <input type="text" class="form-control" maxlength="8" inputmode="numeric" pattern="[0-9]*" 
                            oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0,8)" placeholder="Masukkan NPSN" required>
                        </div>
                      </div>
        
                      <div class="col-12">
                        <div class="d-flex align-items-center justify-content-end mt-4 gap-3">
                          <button type="submit" class="btn btn-primary">Simpan</button>
                          <button type="reset" class="btn bg-danger-subtle text-danger">Batal</button>
                        </div>
                      </div>
                    </div>
                  </form>
        
                </div>
              </div>
            </div>
          </div>
      </div>

          

        {{-- TAB 4 - BIODATA ORANG TUA --}}
        <div class="tab-pane fade" id="orangtua" role="tabpanel" aria-labelledby="orangtua-tab" tabindex="0">
            <div class="row">
              <div class="col-12">
                <div class="card w-100 border position-relative overflow-hidden mb-0">
                  <div class="card-body p-4">
                    <h4 class="card-title">Biodata Orang Tua</h4>
                    <p class="card-subtitle mb-4">Lengkapi data orang tua untuk keperluan administrasi pendaftaran.</p>
          
                    <form>
                      <div class="row">
                        <!-- Ayah -->
                        <div class="col-lg-6">
                          <div class="mb-3">
                            <label class="form-label">Nama Ayah</label>
                            <input type="text" class="form-control" placeholder="Nama lengkap ayah kandung" required>
                          </div>
                        </div>
          
                        <div class="col-lg-6">
                          <div class="mb-3">
                            <label class="form-label">Pekerjaan Ayah</label>
                            <input type="text" class="form-control" placeholder="Pekerjaan ayah" required>
                          </div>
                        </div>
          
                        <!-- Ibu -->
                        <div class="col-lg-6">
                          <div class="mb-3">
                            <label class="form-label">Nama Ibu</label>
                            <input type="text" class="form-control" placeholder="Nama lengkap ibu kandung" required>
                          </div>
                        </div>
                        
                      

                        <div class="col-lg-6">
                          <div class="mb-3">
                            <label class="form-label">Pekerjaan Ibu</label>
                            <input type="text" class="form-control" placeholder="Pekerjaan ibu" required>
                          </div>
                        </div>

                        <div class="mb-3">
                          <label class="form-label">Penghasilan</label>
                          <select class="form-select" required>
                            <option hidden>Pilih Penghasilan</option>
                            <option></option>
                            <option></option>
                            <option></option>
                            <option></option>
                            <option></option>
                            <option></option>
                          </select>
                        </div> 
          
                        <div class="col-lg-6">
                          <div class="mb-3">
                            <label class="form-label">No. Ayah</label>
                            <input type="text" class="form-control" maxlength="13" inputmode="numeric"
                            oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0,13)" placeholder="08xxxxxxxxxx" required>
                          </div>
                          <div class="mb-3">
                            <label class="form-label">Mampu/Tidak Mampu</label>
                            <select class="form-select" required>
                              <option hidden>Pilih</option>
                              <option></option>
                              <option></option>
                              <option></option>
                              <option></option>
                              <option></option>
                              <option></option>
                            </select>
                          </div> 
                        </div>
                        <!-- Kontak -->
                        <div class="col-lg-6">
                          <div class="mb-3">
                            <label class="form-label">No. Ibu</label>
                            <input type="text" class="form-control" maxlength="13" inputmode="numeric"
                              oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0,13)" placeholder="08xxxxxxxxxx" required>
                          </div>
                          <div class="mb-3">
                            <label class="form-label">Yatim/Piatu</label>
                            <select class="form-select" required>
                              <option hidden>Pilih</option>
                              <option></option>
                              <option></option>
                              <option></option>
                              <option></option>
                              <option></option>
                              <option></option>
                            </select>
                          </div>
                          
                        </div>
                        
                        </div>
                        <!-- Tombol -->
                        <div class="col-12">
                          <div class="d-flex align-items-center justify-content-end mt-4 gap-3">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <button type="reset" class="btn bg-danger-subtle text-danger">Batal</button>
                          </div>
                        </div>
                      </div>
                    </form>
          
                  </div>
                </div>
              </div>
            </div>
          
          

        {{-- TAB 5 - IJAZAH SMP --}}
        <div class="tab-pane fade" id="ijazah" role="tabpanel" aria-labelledby="ijazah-tab" tabindex="0">
            <div class="row">
                <div class="col-12">
                  <div class="card w-100 border position-relative overflow-hidden mb-0">
                    <div class="card-body p-4">
            <h4 class="card-title mb-3">Ijazah SMP</h4>
            <form enctype="multipart/form-data">
              <div class="row">
                <div class="col-lg-3">
                  <div class="mb-3">
                    <label class="form-label">Tanggal</label>
                    <input type="text" class="form-control" placeholder="Masukkan Tanggal" required>
                  </div>
                </div>
                <div class="col-lg-3">
                  <div class="mb-3">
                    <label class="form-label">Tahun</label>
                    <input type="number" class="form-control" min="2000" max="2099" placeholder="Masukkan Tahun" required>
                  </div>
                </div>
                <div class="col-lg-3">
                  <div class="mb-3">
                    <label class="form-label">Nomor</label>
                    <input type="text" class="form-control" maxlength="8" inputmode="numeric" pattern="[0-9]*" 
                      oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0,8)" placeholder="Masukkan Nomor" required>
                  </div>
                </div>
  
                
                <div class="col-md-12 mb-3">
                  <label class="form-label">Upload File Ijazah (PDF/JPG/PNG)</label>
                  <input 
                    type="file" 
                    name="ijazah" 
                    class="form-control" 
                    accept=".pdf,.jpg,.jpeg,.png" 
                    required
                  >
                </div>
              </div>
              <p class="text-muted small mb-0">Ukuran maksimal file 2MB</p>
              <div class="col-12">
                <div class="d-flex align-items-center justify-content-end mt-4 gap-3">
                  <button type="submit" class="btn btn-primary">Simpan</button>
                  <button type="reset" class="btn bg-danger-subtle text-danger">Batal</button>
                </div>
              </div>
            </form>
          </div>
                  </div>
                </div>
            </div>
        </div>

      {{-- TAB 6 - PERSYARATAN --}}
<div class="tab-pane fade" id="persyaratan" role="tabpanel" aria-labelledby="persyaratan-tab" tabindex="0">
  <div class="card border mb-0">
    <div class="card-body">
      <h4 class="card-title mb-3">Upload Persyaratan</h4>
      <form enctype="multipart/form-data">
        <div class="mb-3">
          <label class="form-label">Upload File Persyaratan (PDF/JPG/PNG)</label>
          <input 
            type="file" 
            name="ijazah" 
            class="form-control" 
            accept=".pdf,.jpg,.jpeg,.png" 
            required
          >
        </div>
        <p class="text-muted small mb-0">Ukuran maksimal file 2MB</p>
        <div class="col-12">
          <div class="d-flex align-items-center justify-content-end mt-4 gap-3">
            <button type="submit" class="btn btn-primary">Simpan</button>
            <button type="reset" class="btn bg-danger-subtle text-danger">Batal</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div> 

{{-- TAB 7 - PILIH JURUSAN --}}
<div class="tab-pane fade" id="jurusan" role="tabpanel" aria-labelledby="jurusan-tab" tabindex="0">
  <div class="card border mb-0">
    <div class="card-body">
      <h4 class="card-title mb-3">Pilih Jurusan</h4>
      <form>
        <div class="mb-3">
          <label class="form-label">Jurusan yang Dipilih</label>
          <select class="form-select" required>
            <option value="" selected disabled>Pilih salah satu</option>
            <option value="ipa">IPA</option>
            <option value="ips">IPS</option>
            <option value="bahasa">Bahasa</option>
            <option value="teknik">Teknik</option>
          </select>
        </div>
        <div class="col-12">
          <div class="d-flex align-items-center justify-content-end mt-4 gap-3">
            <button type="submit" class="btn btn-primary">Simpan</button>
            <button type="reset" class="btn bg-danger-subtle text-danger">Batal</button>
          </div>
        </div>
      </form>
    </div>
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
@endpush
