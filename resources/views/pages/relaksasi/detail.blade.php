@extends('layout.layout')

@section('konten')
    <h5 class="fw-bold">
        Detail Progres {{ $title }} {{ $relaksasi->user->full_name }}
    </h5>
    <hr>
    <form action="{{ url('relaksasi/' . $relaksasi->id) }}" method="post">
        @csrf
        @method('PUT')
        <div class="row g-3">
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="catatan1" class="form-label">Seberapa rileks dan nyaman kamu setelah melakukan teknik
                        relaksasi ? (1-10)</label>
                    <input type="number" class="form-control" name="catatan1" id="catatan1" placeholder=""
                        value="{{ $relaksasi->catatan1 }}" disabled />
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="catatan2" class="form-label">Apa yang kamu rasakan setelah melakukan teknik relaksasi
                        pernapasan dalam ?</label>
                    <textarea class="form-control" name="catatan2" id="catatan2" rows="3" disabled>{{ $relaksasi->catatan2 }}</textarea>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="catatan3" class="form-label">Apakah ada hambatan saat melakukan teknik relaksasi pernapasan
                        dalam ? (Ya/Tidak)</label>
                    <input type="text" class="form-control" name="catatan3" id="catatan3" placeholder=""
                        value="{{ $relaksasi->catatan3 }}" disabled />
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="catatan4" class="form-label">Perubahan apa saja yang terjadi setelah kamu melewati tahap
                        relaksasi ?</label>
                    <textarea class="form-control" name="catatan4" id="catatan4" rows="3" disabled>{{ $relaksasi->catatan4 }}</textarea>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="pertanyaan" class="form-label">Kolom pertanyaan</label>
                    <textarea class="form-control" name="pertanyaan" id="pertanyaan" rows="3" disabled>{{ $relaksasi->pertanyaan }}</textarea>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-danger" value="3" name="status">Tolak</button>
        <button type="submit" class="btn btn-primary" value="1" name="status">Konfirmasi</button>
    </form>
@endsection
