<!-- Modal -->
<div class="modal fade" id="PermissionDelete-{{ $data->id }}" tabindex="-1" aria-labelledby="ModalDeleteLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ModalDeleteLabel">Permission Delete</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Yakin anda akan menghapus data ini?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <form method="POST" action="{{ route('admin.permission.destroy', $data) }}">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Yakin</button>
                </form>
            </div>
        </div>
    </div>
</div>
