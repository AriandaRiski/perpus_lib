@extends('template')
@section('content')

<head>
<meta name="csrf-token" content="{{ csrf_token() }}">
</head>

    <div class="col-md-12">    
      <div class="card card-primary">
              <div class="card-header">
                <h1 class="card-title">EDIT FORMULIR PENDAFTARAN ANGGOTA</h1>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <Form method="POST" action="{{url('/home/'.$c_daftar->id)}}">
              <div class="card-body">
                  <div class="form-group">
                    @csrf
                    <input type="hidden" name="_method" value="PATCH">
                    <label>No. Identitas <span style="color: Red;">*</span></label>
                    <div class="form-row mb-4">
                        <div class="col-md-3">
                            <select name="identitas" id="identitas" class="form-control" value="{{$c_daftar->identitas}}">
                                <option value="0">KTP / NIK</option>
                                <option value="1">KITAS (Khusus WNA)</option>
                            </select>
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" name="no_identitas" id="no_identitas" maxlength="16" size="40" value="{{$c_daftar->no_identitas}}" required="required"/>
                        </div>
                    </div>
                    </div>

        <!-- password -->
                <div class="form-group">
                    <label>Password<span style="color: Red;">*</span></label>
                    <input type="text" class="form-control" name="password" size="40"value="{{$c_daftar->password}}" aria-describedby="defaultRegisterFormPasswordHelpBlock" /> 
                    <span id="SpAlertPass" style="color:red"></span>
                        <small id="defaultRegisterFormPasswordHelpBlock" class="form-text text-muted mb-4">
                            (minimal 6 karakter)
                        </small>
                </div>
    
                <!-- nama -->
                <div class="form-group">
                    <label>Nama Lengkap<span style="color: Red;">*</span></label>
                    <input type="text" class="form-control" name="nama" size="40" value="{{$c_daftar->nama}}" />
                        <small id="defaultRegisterFormPasswordHelpBlock" class="form-text text-muted mb-4">
                            Sesuai dengan identitas
                        </small>
                </div>
                
                <!-- TTL -->
                <div class="form-group">
                    <label>Tempat / Tanggal Lahir<span style="color: Red;">*</span></label>
                    <div class="form-row mb-4">
                        <div class="col-md-3">
                        <input type="text" class="form-control" name="tempat_lahir" maxlength="16" size="40" value="{{$c_daftar->tempat_lahir}}" required="required"/>
                        </div>
                        <div><label class="form-control border-0">/</label></div>
                        <div class="col-md-3">
                        <div class="input-group date" id="reservationdate" data-target-input="nearest">
                        <input type="date" name="tgl_lahir" id="date" class="form-control datetimepicker-input" data-target="#reservationdate" value="{{$c_daftar->tgl_lahir}}" />
                        <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                            
                        </div>
                    </div>
                        </div>
                    </div>
                    </div>

                    <div class="row">
    <div class="col-lg-6 col-md-6 col-sm-12">
    <div class="card">
    <div class="card-body">
    <!-- Address -->
    <label for="txtAlamatRumah">Alamat Tinggal Sesuai Identitas <span style="color: Red;">*</span></label>
    <textarea name="alamat_identitas" rows="4" cols="40" id="alamat_identitas" class="form-control" data-toggle="popover" title="format penulisan" data-placement="bottom" data-content="&lt;b>&lt;i>format penulisan&lt;/b>&lt;/i> : Jalan/Gang/Blok/Dusun, RT, RW&lt;br/>Kelurahan, Kecamatan, KodePos&lt;br> &lt;br/>&lt;b>&lt;i>contoh&lt;/i>&lt;/b> : &lt;div style=&quot;padding:10px;border:1px solid #ccc;display:block;background:#fff;font-size:10pt !important&quot;>JL. Surabaya 281, RT.001, RW.009&lt;br/>Sukamaju, Subur Makmur&lt;br/>109202&lt;/div>">{{$c_daftar->alamat_identitas}}
</textarea>
<br />
    <div id="UpdatePanel1">
        <fieldset>
            <div class="form-row mb-4">
            <div class="col-lg-6 col-md-6 col-sm-12">
            <select name="provinsi" id="provinsi" class="form-control">
		<option selected="selected" value="{{ $c_daftar->provinsi }}">{{ $c_daftar->provinsi }}</option>
                    <!-- @foreach ($provinces as $prov )
                  <option value="{{ $prov->id }}">{{ $prov->name }}</option>
                    @endforeach -->
	        </select>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12">
            <select name="kabupaten" id="kabupaten" class="form-control" style="min-width:200px">
		<option value="{{$c_daftar->kabupaten}}">{{$c_daftar->kabupaten}}</option>
            </select>
            </div>
            </div>
        </fieldset>
        
</div>
    
    <!-- Adrress --> 
    </div>
    </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-12">
    <div class="card">
    <div class="card-body">
    <div id="UpdatePanel3">
	
        <!-- Current Address -->
    <label for="txtAlamatSekarang">Alamat Tinggal Saat Ini <span style="color: Red;">*</span></label> 
   
    <textarea name="alamat_sekarang" rows="4" cols="40" id="alamat_sekarang" class="form-control"  data-toggle="popover" title="format penulisan" data-placement="bottom" >
    {{$c_daftar->alamat_sekarang}}
</textarea>
    
                
        
</div>
    </div>
    </div>
    </div>
    </div>


                    <hr class="mb-4" />

    <div class="row">
    <div class="col-lg-6 col-md-6 col-sm-12">
                       <!-- HP -->
                <div class="form-group">
                    <label>Nomor HP<span style="color: Red;">*</span></label>
                    <input type="tel" class="form-control" name="hp" size="40" value="{{$c_daftar->hp}}" />
                        <small id="defaultRegisterFormPasswordHelpBlock" class="form-text text-muted mb-4">
                        Masukan tanpa pemisah (mis.0217714718)
                        </small>
                </div>

                 <!-- Nomor Telepon Rumah -->
        <label for="txtTeleponRumah">Nomor Telepon Rumah</label>
        <input name="tlp" type="tel" maxlength="18" size="40" id="tlp" class="form-control" value="{{$c_daftar->tlp}}"/>
        <small id="Small2" class="form-text text-muted mb-4">
            Masukan tanpa pemisah (mis.0217714718)
        </small>

        <!-- Jenis Anggota -->
        

        <!-- Pendidikan Terakhir -->
        <label for="cboPendidikan">Pendidikan Terakhir <span style="color: Red;">*</span></label>
        <select name="pendidikan" id="pendidikan" class="form-control mb-4" >
        <option value="{{$c_daftar->pendidikan}}">{{$c_daftar->pendidikan}}</option>
        <option value="SD">SD</option>
	<option value="SMP">SMP</option>
	<option value="SMA/SMK">SMA / SMK</option>
	<option value="D1">D1</option>
	<option value="D2">D2</option>
	<option value="D3">D3</option>
	<option value="D4/S1">S1 / D4</option>
	<option value="S2">S2</option>
	<option value="S3">S3</option>

</select>

  <!-- Jenis Kelamin -->
  <label for="cboJenisKelamin">Jenis Kelamin <span style="color: Red;">*</span></label>
        <select name="jenis_kelamin" id="jenis_kelamin" class="form-control mb-4">
        <option value="{{$c_daftar->jenis_kelamin}}">{{$c_daftar->jenis_kelamin}}</option>
        <option value="Laki">Laki-Laki</option>
	<option value="Perempuan">Perempuan</option>

</select>

        <!-- Pekerjaan -->
        <label for="cboPekerjaan">Pekerjaan <span style="color: Red;">*</span></label>
        <select name="pekerjaan" id="pekerjaan" class="form-control mb-4">
        <option value="{{$c_daftar->pekerjaan}}">{{$c_daftar->pekerjaan}}</option>
        <option value="BUMN">BUMN</option>
	<option value="PNS">Pegawai Negeri</option>
	<option value="Peneliti">Peneliti</option>
	<option value="TNI/POLRI">TNI/POLRI</option>
	<option value="Pegawai_Swasta">Pegawai Swasta</option>
	<option value="Dosen">Dosen</option>
	<option value="Pensiunan">Pensiunan</option>
	<option value="Wiraswasta">Wiraswasta</option>
	<option value="Guru">Guru</option>
	<option value="Pelajar">Pelajar</option>
	<option value="Mahasiswa">Mahasiswa</option>
	<option value="Lainnya">Lainnya</option>

</select>
	    <!-- <input name="txtlainnya" type="text" maxlength="50" size="40" id="txtlainnya" class="form-control mb-4" /> -->

<!-- Status Perkawinan -->
<label for="cboStatusKawin">Status Perkawinan <span style="color: Red;">*</span></label>
<select name="status" id="status" class="form-control mb-4">
<option value="{{$c_daftar->status}}">{{$c_daftar->status}}</option>
<option value="0">Belum Menikah</option>
<option value="1">Menikah</option>

</select>

<!-- Agama -->

</div>

<div class="col-lg-6 col-md-6 col-sm-12">
<!-- Nama Institusi -->
<label for="txtNamaInstitusi">Nama Institusi</label>
<input name="institusi" type="text" size="40" id="institusi" class="form-control" value="{{$c_daftar->institusi}}"/>
<small id="Small3" class="form-text text-muted mb-4">
    (Sekolah, Universitas, Instansi, Kantor)
</small>

<!-- Alamat Institusi -->
<label for="txtAlamatInstitusi">Alamat Institusi</label>
<textarea name="alamat_ins" rows="2" cols="40" id="alamat_ins" class="form-control mb-4" >
{{$c_daftar->alamat_ins}}
</textarea>

<!-- Telepon Institusi -->
<label for="txtTeleponInstitusi">Telepon Institusi</label>
<input name="tlp_ins" type="tel" size="40" id="tlp_ins" class="form-control" value="{{$c_daftar->tlp_ins}}"/>
<small id="Small4" class="form-text text-muted mb-4">
    Masukan tanpa pemisah (mis.0217714718)
</small>

<!-- Alamat email anda / pribadi -->
<label for="txtEmailAddress">Alamat email anda / pribadi <span style="color: Red;">*</span></label>
<input name="email" type="text" size="40" id="email" class="form-control mb-4" value="{{$c_daftar->email}}" />

                    </div>
                    </div>

                <div class="card-footer">
                  <a href="{{url('/home')}}" class="btn btn-danger">Batal</a>
                  <button type="submit" class="btn btn-primary">Simpan</button>
                 
            
                </div>
              </Form>
            </div>
            <!-- date-range-picker -->
<script src="{{asset('template/')}}/plugins/daterangepicker/daterangepicker.js"></script>

  
@endsection
<script>
$(function(){
    $.ajaxSetup({
        headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}
    });

$(function(){
    $('#provinsi').on('change', function(){
       let  id_provinsi = $('#provinsi').val();
      console.log(id_provinsi);
      $.ajax({
          type: "POST",
          url: "{{route('getkabupaten')}}",
          data: {id_provinsi:id_provinsi},
          cache: false,

          success: function(msg){
              $('#kabupaten').html(msg);
          },
          error: function(data){
              console.log('error:',data)
          },
      })
        })
    })
});

</script>