<form action="{{$url}}" method="post" class="form-inline" onsubmit="return confirm('Yakin ingin menghapus file ini?')">
    @csrf
    @method("delete")
    <button class="btn btn-danger"><i class="mdi mdi-trash-can"></i></button>
</form>
