@extends('layout.layout')

@section('konten')
    <h5 class="fw-bold">
        Detail Progres {{ $title }} {{ $psikoedukasi->user->full_name }}
    </h5>
    <hr>
    <form action="{{ url('psikoedukasi/' . $psikoedukasi->id) }}" method="post">
        @csrf
        @method('PUT')
        <div class="row g-3">
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="catatan1" class="form-label">Apakah tahap ini dapat membantu kamu untuk lebih memahami
                        permasalahan yang kamu alami ? (Ya/Tidak)</label>
                    <input type="text" class="form-control" name="catatan1" id="catatan1" placeholder=""
                        value="{{ $psikoedukasi->catatan1 }}" disabled />
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="catatan2" class="form-label">Bagaimana perasaan dan pikirkan kamu setelah melewati tahap
                        ini? </label>
                    <textarea class="form-control" name="catatan2" id="catatan2" rows="3" disabled>{{ $psikoedukasi->catatan2 }}</textarea>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="catatan3" class="form-label">Apa harapan kamu ke depan setelah mengikuti tahap ini?</label>
                    <textarea class="form-control" name="catatan3" id="catatan3" rows="3" disabled>{{ $psikoedukasi->catatan3 }}</textarea>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="catatan4" class="form-label">Seberapa besar perubahan yang terjadi setelah kamu melewati
                        tahap psikoedukasi? (1-10)</label>
                    <input type="number" class="form-control" name="catatan4" id="catatan4" placeholder=""
                        value="{{ $psikoedukasi->catatan4 }}" disabled />
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="catatan5" class="form-label">Apakah kamu sudah siap untuk mengikuti tahap selanjutnya ?
                        (Ya/Tidak)</label>
                    <input type="text" class="form-control" name="catatan5" id="catatan5" placeholder=""
                        value="{{ $psikoedukasi->catatan5 }}" disabled />
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="pertanyaan" class="form-label">Kolom pertanyaan</label>
                    <textarea class="form-control" name="pertanyaan" id="pertanyaan" rows="3" disabled>{{ $psikoedukasi->pertanyaan }}</textarea>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-danger" value="3" name="status">Tolak</button>
        <button type="submit" class="btn btn-primary" value="1" name="status">Konfirmasi</button>
    </form>
@endsection
