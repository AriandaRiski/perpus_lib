@extends('template')
@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Detail</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card card-solid">
        <div class="card-body pb-0">
          <div class="row">
            <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
              <div class="card bg-light d-flex flex-fill">
                <div class="card-header text-muted border-bottom-0">
                  Anggota Perpustakaan
                </div>
                <div class="card-body pt-0">
                  <div class="row">
                    <div class="col-7">
                    <!-- NAMA -->
                    <h2 class="lead"><b>{{$daftar->nama}}</b></h2>
                      <p class="text-muted text-sm">
                      
                      <!-- KTP/KITAS -->
                        <b> @if($daftar->identitas == 0 )
                                NIK
                                @else
                                KITAS
                            @endif 
                        : </b> {{$daftar->no_identitas}} </p>
                      <ul class="ml-4 mb-0 fa-ul text-muted">
                      
                      <!-- TTL   -->
                      <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> TTL: {{$daftar->tempat_lahir}} / {{$daftar->tgl_lahir}}</li>
                        
                      <!-- KELAMIN -->
                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Jenis Kelamin: {{$daftar->jenis_kelamin}}
                        </li>

                        <!-- ALAMAT IDENTITAS -->
                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Alamat: {{$daftar->alamat_identitas}}, {{$daftar->kabupaten}}, {{$daftar->provinsi}}</li>

                        <!-- ALAMAT SEKARANG -->
                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Alamat Skrg: {{$daftar->alamat_sekarang}}</li>

                        <!-- HP -->
                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> HP : {{$daftar->hp}}</li>

                        <!-- TLP -->
                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Telepon : {{$daftar->tlp}}</li>

                        
                      </ul>
                    </div>
                    <div class="col-5">
                        <!-- EMAIL PASS -->
                      <p class="small">{{$daftar->email}}<br>Password : {{$daftar->password}}</p>

                      <!-- INSTITUSI -->
                      <li class="small"> Institusi : {{$daftar->institusi}}</li>
                      <li class="small"> Alamat Institusi : {{$daftar->alamat_ins}}</li>


                      <!-- PENDIDIKAN -->
                      <li class="small"> 
                        Pendidikan: {{$daftar->pendidikan}}
                        </li>

                        <!-- PEKERJAAN -->
                        <li class="small"> Pekerjaan : {{$daftar->pekerjaan}}</li>

                        <!-- STATUS -->
                        <li class="small">
                         Status : 
                         @switch($daftar->status)
                            @case(0)
                            Belum Menikah
                                @break
                            @case(1)
                            Menikah
                                @break
                        @endswitch
                        </li>

                        <!-- TLP INS -->
                      <li class="small">Telepon Institusi : {{$daftar->tlp_ins}}</li>
                    </div>
                  </div>
                </div>
                <div class="card-footer">
                  <div class="text-right">
                    
                    <a href="{{url('home')}}" class="btn btn-sm btn-primary">
                      <i class="fas fa-back"></i> Kembali
                    </a>
                  </div>
                </div>
              </div>
            </div>
           
            
          </div>
        </div>
        <!-- /.card-body -->
       
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@endsection