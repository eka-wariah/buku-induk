@extends('administration.master')

@push('link')
@endpush

@section('title')
    SiMaput | Persyaratan Lamaran
@endsection

@section('content')
    <div class="card bg-info-subtle shadow-none position-relative overflow-hidden mb-4">
        <div class="card-body px-4 py-3">
            <div class="row align-items-center">
                <div class="col-9">
                    <h4 class="fw-semibold mb-8">Persyaratan Lamaran</h4>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a class="text-muted text-decoration-none" href="../main/index.html">Home</a>
                            </li>
                            <li class="breadcrumb-item" aria-current="page">Daftar Persysratan Lamaran</li>
                            <li class="breadcrumb-item" aria-current="page">Tambah Persyartan Lamaran</li>


                        </ol>
                    </nav>
                </div>
                <div class="col-3">
                    <div class="text-center mb-n5">
                        <img src="{{ asset('assets/images/breadcrumb/ChatBc.png') }}" alt="modernize-img"
                            class="img-fluid mb-n4" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="px-4 py-3 border-bottom">
                    <h4 class="card-title mb-0">Tambah Persyaratan Lamaran</h4>
                </div>
                <form action="" method="post">
                    @csrf
                    <div class="card-body">
                     
                       
                        <div class="mb-4 row align-items-center">
                            <label for="exampleInputText2" class="form-label col-sm-3 col-form-label">Persyartan</label>
                            <div class="col-sm-9">
                                <input type="text" name="cls_number" class="form-control" id="exampleInputText2"
                                    placeholder="" required oninvalid="this.setCustomValidity('Singkatan Wajib Diisi')"
                                    onchange="this.setCustomValidity('')">
                            </div>
                            @error('mjr_prefix')
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
