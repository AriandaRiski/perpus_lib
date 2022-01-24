@extends('template')

@section('content')
<head>
<meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<div class="container">
<div class="content-wrapper">
<div class="row mt-5 pt-5">
<section class="pb-4 text-center text-lg-left">

    <div class="col-12">
    <!--Section heading-->
    <h1 class="h1 font-weight-bold text-center mb-5 pt-2">Pendaftaran Anggota Online</h1>
    <!--Section description-->

    <!--Grid row-->
    <div class="row">
        <!--Grid column-->
        <div class="col-lg-3 col-xl-3 pb-3">
            <!--Featured image-->
            <div class="view overlay rounded z-depth-2">
            <!-- <img src="images/Header-Register.jpg" alt="Header image" class="img-fluid"> -->
            <a>
                <div class="mask waves-effect waves-light"></div>
            </a>
            </div>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-7 col-xl-7">
            <!--Excerpt-->
            <a href="" class="green-text">
            <h6 class="font-weight-bold pb-1">
            </a>
            <h3 class="mb-4 font-weight-bold dark-grey-text">
            <strong>Petunjuk Pengisian Form</strong>
            </h3>
            <p>
            <ul>
                <li class="letterLi2">Pastikan data yang anda masukkan sesuai kartu identitas yang berlaku, benar, dan dapat dipertanggungjawabkan.</li>
                <li class="letterLi2">Silahkan hubungi bagian layanan <span id="lbNamaPerpus2">Perpustakaan Nasional RI</span>, jika anda pernah mendaftarkan diri sebelumnya namun akun anda tidak aktif.</li>
                <li class="letterLi2">Inputan dengan tanda <span class="mandatory">*</span> wajib diisi.</li>
                <li class="letterLi2">Klik <a href="aktifkanuser.aspx">disini</a>, jika anda telah terdaftar sebagai anggota, namun belum memiliki user dan password akses layanan Keanggotaan Online.</li>
            </ul>
            </p>
        </div>
        <!--Grid column-->
        </div>
    </div>
</section>

    <div class="col-md-12">    
      <div class="card card-primary">
              <div class="card-header">
                <h1 class="card-title">FORMULIR PENDAFTARAN ANGGOTA</h1>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <Form method="POST" action="{{url('/home')}}">
              <div class="card-body">
                  <div class="form-group">
                    @csrf
                    <label>No. Identitas <span style="color: Red;">*</span></label>
                    <div class="form-row mb-4">
                        <div class="col-md-3">
                            <select name="identitas" id="identitas" class="form-control">
                                <option value="0">KTP / NIK</option>
                                <option value="1">KITAS (Khusus WNA)</option>
                            </select>
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" name="no_identitas" id="no_identitas" maxlength="16" size="40" placeholder="Masukkan Nomor Identitas" required="required"/>
                        </div>
                    </div>
                    </div>

        <!-- password -->
                <div class="form-group">
                    <label>Password<span style="color: Red;">*</span></label>
                    <input type="text" class="form-control" name="password" minlength="12" size="40" placeholder="Password" aria-describedby="defaultRegisterFormPasswordHelpBlock" required/> 
                    <span id="SpAlertPass" style="color:red"></span>
                        <small id="defaultRegisterFormPasswordHelpBlock" class="form-text text-muted mb-4">
                            (minimal 6 karakter)
                        </small>
                </div>
    
                <!-- nama -->
                <div class="form-group">
                    <label>Nama Lengkap<span style="color: Red;">*</span></label>
                    <input type="text" class="form-control" name="nama" size="40"placeholder="Masukkan nama lengkap anda" />
                        <small id="defaultRegisterFormPasswordHelpBlock" class="form-text text-muted mb-4">
                            Sesuai dengan identitas
                        </small>
                </div>
                
                <!-- TTL -->
                <div class="form-group">
                    <label>Tempat / Tanggal Lahir<span style="color: Red;">*</span></label>
                    <div class="form-row mb-4">
                        <div class="col-md-3">
                        <input type="text" class="form-control" name="tempat_lahir" maxlength="16" size="40" placeholder="Tempat lahir" required="required"/>
                        </div>
                        <div><label class="form-control border-0">/</label></div>
                        <div class="col-md-3">
                        <div class="input-group date" id="reservationdate" data-target-input="nearest">
                        <input type="date" name="tgl_lahir" id="date" class="form-control datetimepicker-input" data-target="#reservationdate" placeholder="tahun - bulan - tanggal" />
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
    <textarea name="alamat_identitas" rows="4" cols="40" id="alamat_identitas" class="form-control" placeholder="Masukan alamat Anda sesuai identitas" data-placement="bottom" >
</textarea>
    <br />
    <div id="UpdatePanel1">
        <fieldset>
            <div class="form-row mb-4">
            <div class="col-lg-6 col-md-6 col-sm-12">
            <select name="provinsi" id="provinsi" class="form-control">
		<option selected="selected" value="0">- Pilih Provinsi -</option>
                    @foreach ($provinces as $prov )
                  <option value="{{ $prov->id }}">{{ $prov->name }}</option>
                    @endforeach
	        </select>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12">
            <select name="kabupaten" id="kabupaten" class="form-control" style="min-width:200px">
		<option value="0">- Pilih Kota -</option>
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
    <textarea name="alamat_sekarang" rows="4" cols="40" id="alamat_sekarang" class="form-control" placeholder="CONTOH : Jalan, Desa , Kabupaten, Provinsi">
</textarea>

    <br />
    <!-- <div id="UpdatePanel2">
		
    <fieldset>
            <div class="form-row mb-4">
            <div class="col-lg-6 col-md-6 col-sm-12">
            <select name="provinsi" id="provinsi" class="form-control">
		<option selected="selected" value="0">- Pilih Provinsi -</option>
                    @foreach ($provinces as $prov )
                  <option value="{{ $prov->id }}">{{ $prov->name }}</option>
                    @endforeach
	        </select>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12">
            <select name="kabupaten" id="kabupaten" class="form-control" style="min-width:200px">
		<option value="0">- Pilih Kota -</option>
            </select>
            </div>
            </div>
        </fieldset>
                    
	</div> -->
                
        
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
                    <input type="text" class="form-control" name="hp" size="40" />
                        <small id="defaultRegisterFormPasswordHelpBlock" class="form-text text-muted mb-4">
                        Masukan tanpa pemisah (mis.0217714718)
                        </small>
                </div>

                 <!-- Nomor Telepon Rumah -->
        <label for="txtTeleponRumah">Nomor Telepon Rumah</label>
        <input name="tlp" type="text" maxlength="18" size="40" id="tlp" class="form-control" />
        <small id="Small2" class="form-text text-muted mb-4">
            Masukan tanpa pemisah (mis.0217714718)
        </small>

        <!-- Jenis Anggota -->
        

        <!-- Pendidikan Terakhir -->
        <label for="cboPendidikan">Pendidikan Terakhir <span style="color: Red;">*</span></label>
        <select name="pendidikan" id="pendidikan" class="form-control mb-4">
	<option value="SD">SD</option>
	<option value="SMP">SMP</option>
	<option value="SMA">SMA / SMK</option>
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
	<option value="Laki">Laki-Laki</option>
	<option value="Perempuan">Perempuan</option>

</select>

        <!-- Pekerjaan -->
        <label for="cboPekerjaan">Pekerjaan <span style="color: Red;">*</span></label>
        <select name="pekerjaan" id="pekerjaan" class="form-control mb-4">
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
<option value="0">Belum Menikah</option>
<option value="1">Menikah</option>

</select>

<!-- Agama -->

</div>

<div class="col-lg-6 col-md-6 col-sm-12">
<!-- Nama Institusi -->
<label for="txtNamaInstitusi">Nama Institusi</label>
<input name="institusi" type="text" size="40" id="institusi" class="form-control" />
<small id="Small3" class="form-text text-muted mb-4">
    (Sekolah, Universitas, Instansi, Kantor)
</small>

<!-- Alamat Institusi -->
<label for="txtAlamatInstitusi">Alamat Institusi</label>
<textarea name="alamat_ins" rows="2" cols="40" id="alamat_ins" class="form-control mb-4">
</textarea>

<!-- Telepon Institusi -->
<label for="txtTeleponInstitusi">Telepon Institusi</label>
<input name="tlp_ins" type="text" size="40" id="tlp_ins" class="form-control" />
<small id="Small4" class="form-text text-muted mb-4">
    Masukan tanpa pemisah (mis.0217714718)
</small>

<!-- Alamat email anda / pribadi -->
<label for="txtEmailAddress">Alamat email anda / pribadi <span style="color: Red;">*</span></label>
<input name="email" type="text" size="40" id="email" class="form-control mb-4" required/>

                    </div>
                    </div>

                <div class="card-footer">
                  <input  id="CheckDisclaimer" type="checkbox" name="CheckDisclaimer" required /><label class="small">Saya menyatakan data yang diisi benar dan dapat dipertanggungjawabkan, serta setuju untuk mentaati segala peraturan Perpustakaan Nasional RI</label>  
                  <br>
                <a href="{{url('/home')}}" class="btn btn-danger">KEMBALI</a>
                  <button type="submit" class="btn btn-primary">Simpan</button>
                  
                </div>
              </Form>
            </div>


            <script src="http://code.jquery.com/jquery-3.4.1.min.js"></script>

            @include('sweetalert::alert')

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

@endsection


