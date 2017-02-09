@extends('app')

@section('content-header')
Data Pemesanan
@endsection

@section('content-2')
<form action="{{url('admin/pesanan/search')}}" method="get">
          <div class="input-group margin">
                <input type="text" class="form-control" name="cari">
                    <span class="input-group-btn">
                      <button type="button" class="btn btn-info btn-flat">Cari</button>
                    </span>
              </div>
              </form>
@endsection

@section('content')

<script type="text/javascript">
  function showData(nama,harga,gambar,jeniskue,rasa) {
    $('#namakue').html(nama);
    $('#harga').html(harga);
    $('#gambar-pesan').attr('src',gambar);
    $('#jeniskue').html(jeniskue);
    $('#rasa').html(rasa);
  }
</script>

                <table aria-describedby="example2_info" role="grid" id="example2" class="table table-bordered table-hover dataTable">
                <thead>
                <tr role="row">
            <th>No</th>
            <th>Nama Kue</th>
            <th>Harga</th>
            <th>Jenis Kue</th>
            <th>Rasa</th>
            <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                <?php $i = 1; ?>
                @foreach($data as $pesanan)
                    <tr>
                      <td><?php echo $i; $i++; ?></td>
                      <td>
                          <a href="#" data-toggle="modal" data-target="#detail" style="text-decoration: none;" onclick="showData('{{ $pesanan->nama }}','{{ $pesanan->harga }}','{{ url('img'.'/'.$pesanan->gambar_pemesanan) }}','{{ $pesanan->jeniskue }}','{{ $pesanan->rasa }}','{{ $pesanan->status }}')">{{$pesanan->nama}}</a>
                      </td>
                      <td>{{$pesanan->harga}}</td>
                      <td>{{$pesanan->jeniskue}}</td>
                      <td>{{$pesanan->rasa}}</td>
                      <td>
                      <a href="{{url('admin/pesanan/'.$pesanan->id.'/hapus')}}" onclick="return confirm('Apakah anda yakin ingin menyetujui pesanan?')" class="btn btn-primary">Hapus</a>
                        
                      </td>
                    </tr>
                @endforeach
                </tbody>
              </table>


<div class="modal fade" id="detail" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Pesanan <span id="title-pesan"></span></h4>
      </div>
      <div class="modal-body">
        <div class="row" style="margin: auto;">
            <table class="table">
                <tr>
                    <td>Harga</td>
                    <td id="harga"></td>
                </tr>
                <tr>
                    <td>Nama Kue</td>
                    <td id="namakue"></td>
                </tr>
                <tr>
                    <td>Jenis Kue</td>
                    <td id="jeniskue"></td>
                </tr>
                <tr>
                    <td>Rasa</td>
                    <td id="rasa"></td>
                </tr>
                
            </table>
        </div>
        <div>
          <img src="" style="max-width:100%; height:auto" id="gambar-pesan">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
@endsection
