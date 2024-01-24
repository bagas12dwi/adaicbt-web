@extends('layout.layout')

@section('konten')
    <h5 class="fw-bold">
        Detail Progres {{ $title }} {{ $restrukturisasi->user->full_name }}
    </h5>
    <hr>
    <form action="{{ url('restrukturisasi/' . $restrukturisasi->id) }}" method="post">
        @csrf
        @method('PUT')
        <div class="row g-3">
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="catatan1" class="form-label">Apa yang kamu rasakan dan pikirkan setelah mengerjakan tugas di
                        blangko pola pikir ?</label>
                    <textarea class="form-control" name="catatan1" id="catatan1" rows="3" disabled>{{ $restrukturisasi->catatan1 }}</textarea>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="catatan2" class="form-label">Apakah tugas ini cukup membantu kamu untuk mengidentifikasi
                        pikiran negatif yang kamu alami selama ini dan mengubahnya menjadi pola pikir positif ?</label>
                    <textarea class="form-control" name="catatan2" id="catatan2" rows="3" disabled>{{ $restrukturisasi->catatan2 }}</textarea>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="catatan3" class="form-label">Apakah ada hambatan ketika mengerjakan tugas di blangko pola
                        pikir ?</label>
                    <textarea class="form-control" name="catatan3" id="catatan3" rows="3" disabled>{{ $restrukturisasi->catatan3 }}</textarea>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="catatan4" class="form-label">Apakah kamu bersedia untuk mengerjakan tugas rumah yang
                        diberikan oleh terapis ?</label>
                    <textarea class="form-control" name="catatan4" id="catatan4" rows="3" disabled>{{ $restrukturisasi->catatan4 }}</textarea>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="catatan5" class="form-label">Perubahan apa saja yang terjadi setelah kamu melewati tahap
                        restrukturisasi kognitif ?</label>
                    <textarea class="form-control" name="catatan5" id="catatan5" rows="3" disabled>{{ $restrukturisasi->catatan5 }}</textarea>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="pertanyaan" class="form-label">Kolom pertanyaan</label>
                    <textarea class="form-control" name="pertanyaan" id="pertanyaan" rows="3" disabled>{{ $restrukturisasi->pertanyaan }}</textarea>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-danger" value="3" name="status">Tolak</button>
        <button type="submit" class="btn btn-primary" value="1" name="status">Konfirmasi</button>
    </form>
@endsection
