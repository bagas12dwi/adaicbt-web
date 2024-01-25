<div class="d-flex align-middle">

    @if ($user->document)
        <a href="{{ url('user/' . $user->id . '/edit') }}" class="btn btn-primary me-2">
            <i class="bi bi-pencil-fill"></i>
        </a>
        <a href="{{ $user->document->document_link }}" target="_blank" class="btn btn-info me-2">
            <i class="bi bi-eye"></i>
        </a>
    @else
        <a href="{{ url('user/' . $user->id) }}" class="btn btn-success me-2">
            <i class="bi bi-file-earmark"></i>
        </a>
    @endif
    <form action="{{ url('user/' . $user->id) }}" method="post">
        @csrf
        @method('delete')
        <button href="" class="btn btn-danger" data-toggle="tooltip" data-original-title="Hapus"
            onclick="return confirm('Apakah anda yakin?')">
            <i class="bi bi-trash3"></i>
        </button>
    </form>
</div>
