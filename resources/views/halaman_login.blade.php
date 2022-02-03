
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Lockscreen</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('template/')}}/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('template/')}}/dist/css/adminlte.min.css">
</head>
<style> 
        body {
            background-color: yellow;
        }
    </style>
<body class="hold-transition lockscreen">
<!-- Automatic element centering -->
<div class="lockscreen-wrapper">
  <div class="lockscreen-logo">
    <a href="">
    <font color="black">
        <script type="text/javascript">
            now = new Date();
            if (now.getTimezoneOffset() == 0) (a=now.getTime() + ( 7 *60*60*1000))
            else (a=now.getTime());
            now.setTime(a);
            var tahun= now.getFullYear ()
            var hari= now.getDay ()
            var bulan= now.getMonth ()
            var tanggal= now.getDate ()
            var hariarray=new Array("Minggu,","Senin,",
            "Selasa,","Rabu,","Kamis,","Jum'at,","Sabtu,")
            var bulanarray=new Array("Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","Nopember","/ 12 /")
            document.write(hariarray[hari]+" "+tanggal+" "+bulanarray[bulan]+" "+tahun)
        </script>
        <script type="text/javascript">
            now = new Date();
            if (now.getTimezoneOffset() == 0) (a=now.getTime() + ( 7 *60*60*1000))
            else (a=now.getTime());
            now.setTime(a);
            document.write("<br> Jam " + ((now.getHours() < 10) ? "0" : "") + now.getHours() + ":" + ((now.getMinutes() < 10)? "0" : "") + now.getMinutes() + (" W.I.B "))
        </script>
    </font>
    </a>
  </div>
  <!-- User name -->
  <div class="lockscreen-name">ADMIN</div>

  <!-- START LOCK SCREEN ITEM -->
  <div class="lockscreen-item">
    <!-- lockscreen image -->
    <div class="lockscreen-image">
      <img src="{{asset('template/')}}/dist/img/user1-128x128.jpg" alt="User Image">
    </div>
    <!-- /.lockscreen-image -->

    <!-- lockscreen credentials (contains the form) -->
    <form class="lockscreen-credentials">
      <div class="input-group">
        <input type="password" class="form-control" placeholder="password : admin">

        <div class="input-group-append">
          <button type="button" class="btn">
           <a href="/home"> <i class="fas fa-arrow-right text-muted"></i></a>
          </button>
        </div>
      </div>
    </form>
    <!-- /.lockscreen credentials -->

  </div>
  <!-- /.lockscreen-item -->
 <center><a href="/" type="button" class="btn btn-secondary btn-sm">BACK</a></center>
</div>
<!-- /.center -->

<!-- jQuery -->
<script src="{{asset('template/')}}/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('template/')}}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
