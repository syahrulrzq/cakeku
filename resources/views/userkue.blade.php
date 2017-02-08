@extends('app_user')
@section('content')

<script type="text/javascript">
    $(document).ready(function(){
        $('#up-btn').on('click',function(){
            var a = parseInt($('input[name=jumlah_pesanan]').val());
            var total = parseInt($('input[name=harga_total]').val());
            var harga_awal = {{ $kue['harga'] }};
            $('input[name=jumlah_pesanan]').val(a+=1);
            $('input[name=harga_total]').val(harga_awal*a);
        });
        $('#down-btn').on('click',function(){
            var a = parseInt($('input[name=jumlah_pesanan]').val());
            var b = parseInt($('input[name=harga_total]').val());
            var total = {{ $kue['harga'] }};

            if (a<=0) {
                $('input[name=jumlah_pesanan]').val(0);
                $('input[name=harga_total]').val(0);
            }
            else{
                $('input[name=jumlah_pesanan]').val(a-=1);
                $('input[name=harga_total]').val(b-total);   
            }
        });
    });
</script>

<style type="text/css">
    .none{
        display: none!important;
    }
</style>

             <div  style="margin: auto;" id="info-message">
            <table class="table">
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                      <label for="usr">Jumlah Pesanan:</label>
                      <input type="text" class="form-control" id="usr" name="jumlah_pesanan" id="jumlah_pesanan" readonly value="0">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                      <button type="button" class="btn btn-primary" id="up-btn">+</button>
                      <button type="button" class="btn btn-primary" id="down-btn">-</button>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <label for="usr">Total Harga</label>
                    <input type="text" class="form-control" name="harga_total" readonly value="0"> 
                </div>
            </div>
                <tr>
                    <td>Nama Kue</td>
                    <td id="namakue">{{ $kue['nama'] }}</td>
                </tr>
                <tr>
                    <td>Jenis Kue</td>
                    <td id="jeniskue">{{ $kue['jeniskue'] }}</td>
                </tr>
                <tr>
                    <td>Rasa Kue</td>
                    <td id="rasa">{{ $kue['rasa'] }}</td>
                </tr>
                <tr>
                    <td>Harga</td>
                    <td id="harga">{{ $kue['harga'] }}</td>
                </tr>
                <tr>
                    <td>Gambar</td>
                    <td id="telp-pesan"><img src="{{ url('img/'.$kue['gambar_pemesanan']) }}"></td>
                </tr>
              
            </table>
        </div>
@endsection