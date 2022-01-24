@extends('template')
@section('content')
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->  
  <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Anggota Perpus</h3>
                <a  type="button" class="btn btn-success btn-lg float-right" href="{{url ('home/create')}}"> 
                <i class="fa fa-plus-circle"></i>
                 </a>
              </div>
              
              <!-- /.card-header -->
              <div class="card-body">
                @if(Session::has('success'))
                <p class="alert alert-success">{{Session::get('success')}}</p></br>
                @endif
                <table id="example1" class="table table-bordered table-hover table-responsive-sm">
                  <thead>
				        <tr>
                   <th>NO</th>
                   <th>NAMA</th>
                    <th>No. Identitas</th>
                    <th>TEMPAT / TANGGAL LAHIR</th>
                    <th>EMAIL</th>
                    <th>PASSWORD</th>
                    <th>AKSI</th>
		           </tr>
					      </thead>
						    <tbody>
                <?php $no=1; ?>
                  @foreach ($daftar as $pro)
                      
                  <tr>
                    <td>{{$no++}}</td>
                    <td>{{$pro->nama}}</td>
                    <td>{{$pro->no_identitas}} </td>
                    <td>{{$pro->tempat_lahir}}/{{$pro->tgl_lahir}} </td>
                    <td>{{$pro->email}} </td>
                    <td>{{$pro->password}} </td>

                   <td> <div class="btn-group">
                   <a href="{{url('home/'.$pro->id)}}" type="button" class="btn btn-info"
                         >
                          <i class="fas fa-eye"></i>
                        </a>    
                   <a href="{{url('home/'.$pro->id.'/edit')}}" type="button" class="btn btn-warning"
                         >
                          <i class="fas fa-pen"></i>
                        </a>
                        <form method="POST" action="{{ url('/home/'.$pro->id) }}" class="d-inline" onsubmit="return confirm('yakin hapus data?')">
                        @csrf
                        <input type="hidden" name="_method" value="DELETE">
                        <button type="submit" class="btn btn-danger btn-flat">
                          <i class="fas fa-trash"></i>
                        </button>
                        </form>
                      </div>
                    </td>
                    
                  </tr>
                  @endforeach
                 </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
</div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  
  <!-- /.content-wrapper -->
 
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{asset('template')}}/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('template')}}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="{{asset('template')}}/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="{{asset('template')}}/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="{{asset('template')}}/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="{{asset('template')}}/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="{{asset('template')}}/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="{{asset('template')}}/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="{{asset('template')}}/plugins/jszip/jszip.min.js"></script>
<script src="{{asset('template')}}/plugins/pdfmake/pdfmake.min.js"></script>
<script src="{{asset('template')}}/plugins/pdfmake/vfs_fonts.js"></script>
<script src="{{asset('template')}}/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="{{asset('template')}}/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="{{asset('template')}}/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="{{asset('template')}}/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('template')}}/dist/js/demo.js"></script>
<!-- Page specific script -->
<!-- Bootstrap Switch -->
<script src="{{asset('template')}}/plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>

</body>
<script>
  $(document).ready(function() {
    $('#example1').DataTable( {
        dom: 'Bfrtip',
        buttons: [
          
        ]
    } );
} );

    
</script>


@endsection
