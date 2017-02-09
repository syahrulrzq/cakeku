@extends('app_user')
@section('content')

<script type="text/javascript">
    $(document).ready(function(){
        @if(session('message'))
        $('#myModal').modal();
        @endif
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

<script type="text/javascript">
  $(document).ready(function(){
    // $('#nomor_telepon').on('keyup',function(){
    //   var phone = $(this).val();
    //   alert(phone.replace("-",""));
    //   // $('#hidden_phone').val(phone);
    //   // alert($('#hidden_phone').val());
    // });
    $('#modal_form').submit(function(e){
      // formData = new FormData($('#modal_form')[0]);
      e.preventDefault();
      $.ajax({
        url: '{{url('userkue/submit2')}}',
        type: 'POST',
        data: $('#modal_form').serializeArray(),
        success:function(data){
          // if (data.success==true) {
            if (data.success==false) {
              alert(data.error_msg);
            }
            else{
              $('#p_id').html(' </p> <h3><b>SILAHKAN CEK EMAIL ANDA UNTUK MENGETAHUI NOMOR PESANAN</b></3> </p>');
              $('#no_pesanan').modal();
            }
          // }

          // else{
          //   console.log('fail');
          // }
        },
        error:function(){
          console.log('error');
        }
      });
    });
  });
</script>

<style type="text/css">
    .none{
        display: none!important;
    }
</style>

<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Terimakasih sudah memesan :)</h4>
      </div>
      <div class="modal-body">
        <p>SILAHKAN CEK EMAIL ANDA UNTUK MENGETAHUI NOMOR PESANAN</p>
      </div>
      <div class="modal-footer">
        <a href="{{url('/')}}" class="btn btn-default">Close</a>
      </div>
    </div>

  </div>
</div>

<div class="example-modal">
<div>
        <div class="modal" id="no_pesanan">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title">Terimakasih sudah memesan :)</h4>
              </div>
              <div class="modal-body">
                <p id="p_id"></p>
              </div>
              <div class="modal-footer">
                <a href="{{ url('/') }}"><button type="button" class="btn btn-default pull-right">Close</button></a>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
      </div>
      </div>
      <!-- /.example-modal -->
<!--  -->
            <div  style="margin: auto;" id="info-message">
            <table class="table">
            <form action="{{url('userkue/submit2')}}" method="post" id="modal_form">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="hidden" name="kue_id" value="{{ $kue['id']}}">
            <div class="row">
                <div class="form-group">
                  <label for="exampleInputEmail1">Nama Pemesan</label>
                  <input name="nama" required="" class="form-control" id="exampleInputEmail1" placeholder="Nama" type="text" value="{{old('nama')}}">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Alamat</label>
                  <input name ="alamat" required="" class="form-control" id="exampleInputPassword1" placeholder="Alamat" type="text" value="{{old('alamat')}}">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Nomor Telepon</label>
                  <input name="telp" class="form-control" id="nomor_telepon" required="" placeholder="Nomor Telepon" type="text" value="{{old('telp')}}" data-inputmask='"mask": "9999-9999-9999"' data-mask>
                  <input type="hidden" name="hidden_phone">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Email</label>
                  <input name="email" required="" class="form-control" id="exampleInputEmail1" placeholder="email" type="email" value="{{old('email')}}">
                </div>
               <div class="form-group">
                <label>Tanggal</label>
                  <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" class="form-control pull-right" name="hari" required="" readonly="" id="datepicker" value="{{old('hari')}}">
                </div>
                <!-- /.input group -->
              </div>
              <!-- /.form group -->
                <div class="bootstrap-timepicker">
                <div class="form-group">
                  <label>Jam:</label>

                  <div class="input-group">
                    <input name="pukul" required="" readonly="" type="text" class="form-control timepicker" value="{{old('pukul')}}">

                    <div class="input-group-addon">
                      <i class="fa fa-clock-o"></i>
                    </div>
                  </div>
                  <!-- /.input group -->
                </div>
                </div>
            </div>
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
                    <button type="submit" class="btn btn-primary" id="submit2">Submit</button>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <label for="usr">Total Harga</label>
                    <input type="text" class="form-control" name="harga_total" readonly value="0"> 
                </div>
            </div>
            </form>
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