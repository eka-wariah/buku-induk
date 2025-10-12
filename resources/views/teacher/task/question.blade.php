@extends('administration.master')

@push('link')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@endpush

@section('title')
    SiTAW | Tambah Soal
@endsection

@section('content')
<section class="section">
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h4 class="card-title mb-0">Buat Soal</h4>
            
        </div>

        <div class="card-body">
            <form id="form_soal">
                @csrf
                <div id="soalContainer">
                    {{-- Soal dinamis akan muncul di sini --}}
                </div>

                <div class="text-end mt-3">
                    <button class="btn btn-primary" id="btnAddSoal">
                        <i class="fas fa-plus me-1"></i> Tambah Soal
                    </button>
                    <button type="submit" class="btn btn-success">Simpan Semua Soal</button>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection

@push('script')
<script>
let indexSoal = 0;

// Tambah blok soal baru
document.getElementById('btnAddSoal').addEventListener('click', function () {
    indexSoal++;

    const html = `
    <div class="card border mb-3 p-3 soal-block" data-index="${indexSoal}">
        <div class="d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Soal ${indexSoal}</h5>
            <button type="button" class="btn btn-sm btn-danger btnRemoveSoal">Hapus</button>
        </div>
        <hr>
        <div class="mb-3">
            <label class="form-label">Jenis Soal</label>
            <select class="form-select jenis-soal" name="soal[${indexSoal}][jenis]" required>
                <option value="" disabled selected>-- Pilih Jenis Soal --</option>
                <option value="pg">Pilihan Ganda</option>
                <option value="essai">Essai</option>
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Pertanyaan</label>
            <textarea class="form-control" name="soal[${indexSoal}][pertanyaan]" rows="3" required></textarea>
        </div>

        <div class="opsi-container d-none">
            <label class="form-label">Pilihan Jawaban</label>
            <input type="text" class="form-control mb-2" name="soal[${indexSoal}][opsi_a]" placeholder="A. ...">
            <input type="text" class="form-control mb-2" name="soal[${indexSoal}][opsi_b]" placeholder="B. ...">
            <input type="text" class="form-control mb-2" name="soal[${indexSoal}][opsi_c]" placeholder="C. ...">
            <input type="text" class="form-control mb-2" name="soal[${indexSoal}][opsi_d]" placeholder="D. ...">

            <label class="form-label">Kunci Jawaban</label>
            <select class="form-select" name="soal[${indexSoal}][kunci]">
                <option value="">-- Pilih Kunci Jawaban --</option>
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="C">C</option>
                <option value="D">D</option>
            </select>
        </div>
    </div>`;

    document.getElementById('soalContainer').insertAdjacentHTML('beforeend', html);
});

// Event Delegation: Ubah jenis soal → tampilkan opsi PG
document.addEventListener('change', function (e) {
    if (e.target.classList.contains('jenis-soal')) {
        const parent = e.target.closest('.soal-block');
        const opsiContainer = parent.querySelector('.opsi-container');
        if (e.target.value === 'pg') {
            opsiContainer.classList.remove('d-none');
        } else {
            opsiContainer.classList.add('d-none');
        }
    }
});

// Hapus soal
document.addEventListener('click', function (e) {
    if (e.target.classList.contains('btnRemoveSoal')) {
        e.target.closest('.soal-block').remove();
    }
});


</script>
@endpush
