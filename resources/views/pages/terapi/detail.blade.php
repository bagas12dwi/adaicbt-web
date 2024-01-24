@extends('layout.layout')

@section('konten')
    <h5 class="fw-bold">
        Detail Progres {{ $title }} {{ $terapi->user->full_name }}
    </h5>
    <hr>
    <form action="{{ url('terapi/' . $terapi->id) }}" method="post">
        @csrf
        @method('PUT')
        <div class="row g-3">
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="catatan1" class="form-label">Apa yang kamu rasakan dan pikirkan setelah mengerjakan tugas di
                        blangko exposure? </label>
                    <textarea class="form-control" name="catatan1" id="catatan1" rows="3" disabled>{{ $terapi->catatan1 }}</textarea>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="catatan2" class="form-label">Apakah tugas ini cukup membantu kamu untuk menghadapi situasi
                        yang menyebabkan kecemasan atau keraguan bagi kamu ? (Ya/Tidak)</label>
                    <input type="text" class="form-control" name="catatan2" id="catatan2" placeholder=""
                        value="{{ $terapi->catatan2 }}" disabled />
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="catatan3" class="form-label">Perubahan apa saja yang kamu rasakan setelah melewati tahap
                        terapi perilaku ?</label>
                    <textarea class="form-control" name="catatan3" id="catatan3" rows="3" disabled>{{ $terapi->catatan3 }}</textarea>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="catatan4" class="form-label">Seberapa besar manfaat yang kamu dapatkan setelah melaksanakan
                        tahap ini? (1-10)</label>
                    <input type="number" class="form-control" name="catatan4" id="catatan4" placeholder=""
                        value="{{ $terapi->catatan4 }}" disabled />
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="catatan5" class="form-label">Apakah kamu bersedia untuk menerapkan teknik ini secara mandiri
                        ketika proses terapi selesai ?</label>
                    <textarea class="form-control" name="catatan5" id="catatan5" rows="3" disabled>{{ $terapi->catatan5 }}</textarea>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="catatan6" class="form-label">Apakah ada hambatan ketika mengerjakan tugas di blangko
                        exposure ? (Ya/Tidak)</label>
                    <input type="text" class="form-control" name="catatan6" id="catatan6" placeholder=""
                        value="{{ $terapi->catatan6 }}" disabled />
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="pertanyaan" class="form-label">Kolom pertanyaan</label>
                    <textarea class="form-control" name="pertanyaan" id="pertanyaan" rows="3" disabled>{{ $terapi->pertanyaan }}</textarea>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-danger" value="3" name="status">Tolak</button>
        <button type="submit" class="btn btn-primary" value="1" name="status">Konfirmasi</button>
    </form>
@endsection
