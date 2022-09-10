@extends ('template.base')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12 mt-5">
            <div class="card">
                <div class="card-header">
                    Alamat
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-3">
                            <label for="" class="control-label">Provinsi</label>
                            <select name="" class="form-control" onchange="gantiProvinsi(this.value)">
                                <option value="">Pilih Provinsi</option>
                                @foreach ($list_provinsi as $provinsi)
                                <option value="{{$provinsi->id}}">{{$provinsi->nama}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label for="" class="control-label">Kabupaten/Kota</label>
                            <select name="" class="form-control" id="kabupaten" onchange="gantiKabupaten(this.value)">
                                <option value="">Pilih Provinsi terlebih dahulu</option>
                            </select>
                        </div>
                        <div class=" col-md-3">
                            <label for="" class="control-label">Kecamatan</label>
                            <select name="" class="form-control" id="kecamatan" onchange="gantiKecamatan(this.value)">
                                <option value="">Pilih Kabupaten terlebih dahulu</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label for="" class="control-label">Kelurahan/Desa</label>
                            <select name="" class="form-control" id="desa">
                                <option value="">Pilih Kecamatan terlebih dahulu</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

