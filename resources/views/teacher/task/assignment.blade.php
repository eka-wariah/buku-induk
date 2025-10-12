@extends('administration.master')

@push('link')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
        .progress {
            height: 20px;
            border-radius: 10px;
            overflow: hidden;
        }
        .progress-bar {
            transition: width 1s linear;
        }
    </style>
@endpush

@section('title')
    SiTAW | Pengerjaan Tugas (Tampilan)
@endsection

@section('content')
<section class="section">
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h4 class="card-title mb-0">Latihan Soal Bab 1</h4>
            <div class="text-end">
                <span class="badge bg-primary fs-6" id="timer">--:--</span>
                <audio id="alarmAudio" preload="auto">
                    <source src="https://actions.google.com/sounds/v1/alarms/beep_short.ogg" type="audio/ogg">
                </audio>
            </div>
        </div>

        <div class="card-body">
            <div class="mb-3">
                <div class="progress">
                    <div class="progress-bar bg-success" id="progressBar" role="progressbar" style="width: 100%"></div>
                </div>
            </div>

            <form id="formJawaban">
                <input type="hidden" name="tugas_id" value="1">

                {{-- Contoh soal pilihan ganda --}}
                <div class="mb-4 border-bottom pb-3">
                    <p class="fw-bold mb-2">Soal 1:</p>
                    <p>Ibukota negara Indonesia adalah...</p>

                    <div class="ms-3">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="jawaban[1]" id="soal1A" value="A">
                            <label class="form-check-label" for="soal1A">A. Surabaya</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="jawaban[1]" id="soal1B" value="B">
                            <label class="form-check-label" for="soal1B">B. Jakarta</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="jawaban[1]" id="soal1C" value="C">
                            <label class="form-check-label" for="soal1C">C. Bandung</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="jawaban[1]" id="soal1D" value="D">
                            <label class="form-check-label" for="soal1D">D. Medan</label>
                        </div>
                    </div>
                </div>

                {{-- Contoh soal essay --}}
                <div class="mb-4 border-bottom pb-3">
                    <p class="fw-bold mb-2">Soal 2:</p>
                    <p>Jelaskan peran pahlawan nasional dalam perjuangan kemerdekaan!</p>
                    <textarea name="jawaban[2]" class="form-control mt-2" rows="3" placeholder="Tulis jawaban kamu..."></textarea>
                </div>

                <button type="button" id="btnKumpulkan" class="btn btn-success">Kumpulkan Sekarang</button>
            </form>
        </div>
    </div>
</section>
@endsection

@push('script')
<script>
let totalMenit = 1; // ubah durasi disini (menit)
let waktuTersisa = totalMenit * 60;
let waktuAwal = waktuTersisa;
let sudahPeringatan = false;
const alarmAudio = document.getElementById('alarmAudio');

function updateTimer() {
    const menit = Math.floor(waktuTersisa / 60);
    const detik = waktuTersisa % 60;
    document.getElementById('timer').textContent =
        `${menit.toString().padStart(2, '0')}:${detik.toString().padStart(2, '0')}`;

    // progress bar
    const progress = (waktuTersisa / waktuAwal) * 100;
    const progressBar = document.getElementById('progressBar');
    progressBar.style.width = progress + '%';
    if (progress <= 30) progressBar.classList.replace('bg-success', 'bg-danger');
    else if (progress <= 60) progressBar.classList.replace('bg-success', 'bg-warning');

    // peringatan 1 menit terakhir
    if (waktuTersisa === 10 && !sudahPeringatan) {
        alarmAudio.play();
        Swal.fire({
            icon: 'warning',
            title: '⚠️ Waktu Hampir Habis!',
            text: 'Segera selesaikan jawaban kamu!',
            timer: 3000,
            showConfirmButton: false
        });
        sudahPeringatan = true;
    }

    if (waktuTersisa <= 0) {
        clearInterval(timerInterval);
        autoSubmit();
    } else {
        waktuTersisa--;
    }
}

const timerInterval = setInterval(updateTimer, 1000);
updateTimer();

// Tombol manual
document.getElementById('btnKumpulkan').addEventListener('click', () => {
    Swal.fire({
        title: 'Kumpulkan Tugas?',
        text: "Pastikan semua jawaban sudah benar.",
        icon: 'question',
        showCancelButton: true,
        confirmButtonText: 'Ya, Kumpulkan!',
        cancelButtonText: 'Batal'
    }).then((result) => {
        if (result.isConfirmed) {
            Swal.fire({
                icon: 'success',
                title: 'Tugas Berhasil Dikirim!',
                text: 'Simulasi pengumpulan berhasil.',
                timer: 2000,
                showConfirmButton: false
            });
        }
    });
});

function autoSubmit() {
    Swal.fire({
        icon: 'warning',
        title: 'Waktu Habis!',
        text: 'Jawaban kamu dikumpulkan otomatis (simulasi).',
        timer: 2500,
        showConfirmButton: false
    });
}
</script>
@endpush
  