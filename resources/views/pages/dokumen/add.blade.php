@extends('layout.layout')

@section('konten')
    <h5 class="fw-bold">
        Tambah {{ $title }}
    </h5>
    <hr>
    <form action="{{ url('user') }}" method="post">
        @csrf
        <input type="hidden" name="user_id" value="{{ $user->id }}">
        <div class="mb-3">
            <label for="document_link" class="form-label">Link Dokumen</label>
            <input type="text" class="form-control" name="document_link" id="document_link"
                aria-describedby="helpDocumentLink" placeholder="Link Dokumen" />
            <small id="helpDocumentLink" class="form-text text-muted">Masukkan Link Dokumen (http://www.....)</small>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
@endsection
