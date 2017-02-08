@extends('app')
@section('content')
<form method="POST" action="{{ url('admin/pesanan/inputkue/submit') }}" enctype="multipart/form-data">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
              <div class="form-group">
                  <label for="exampleInputEmail1">Nama Kue</label>
                  <input name="nama" required="" class="form-control" id="exampleInputEmail1" placeholder="Nama" type="text" value="{{old('nama')}}">
                </div>
              <div class="form-group">
                  <label>Jenis Kue</label>
                  <select name="jeniskue" class="form-control">
                    <option value="Kue Tart">Kue Tart</option>
                    <option value="Kue Black Forest">Kue Black Forest</option>
                    <option value="Kue Lapis">Kue Lapis</option>
                    <option value="Kue Pelangi">Kue Pelangi</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Rasa Kue</label>
                  <select name="rasa" class="form-control">
                    <option value="Coklat">Coklat</option>
                    <option value="Strawberry">Strawberry</option>
                    <option value="Vanilla">Vanilla</option>
                    <option value="Tiramisu">Tiramisu</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputHarga">Harga</label>
                  <input name="harga" required="" class="form-control" id="exampleInputHarga" placeholder="Harga" type="text" value="{{old('email')}}">
                </div>

                <div class="form-group">
                  <label for="exampleInputFile">Masukan Gambar Kue</label>
                  <input id="exampleInputFile" type="file" name="gambar_pesanan" required="">
                  <input type="hidden" name="image" id="image">
                  <input type="hidden" name="mime" id="mime">
                </div>

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
