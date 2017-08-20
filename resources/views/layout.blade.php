
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Laravel Simplegrid example application</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/styles.css" rel="stylesheet">

    <!-- ONLY INCLUDE IF YOU NOT HAVE THOSE DEPENDENCIES -->
    <link rel="stylesheet" href="vendor/rafwell/simple-grid/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css" />

    <!-- CSS LARAVEL-SIMPLEGRID -->
    <link rel="stylesheet" href="vendor/rafwell/simple-grid/css/simplegrid.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="https://github.com/rafwell/laravel-simplegrid">Simplegrid</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">        
          <ul class="nav navbar-nav">
            <li class="{!!url()->current()==url('/') ? 'active' : ''!!}"><a href="/">Home</a></li>
            <li class="{!!url()->current()==url('/demo') ? 'active' : ''!!}"><a href="/demo">Demo</a></li>
            <li><a href="https://github.com/rafwell/laravel-simplegrid">GIT</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container">

      @yield('content')

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="assets/bootstrap/assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>    
    <!-- ONLY INCLUDE IF YOU NOT HAVE THOSE DEPENDENCIES -->
    <script src="vendor/rafwell/simple-grid/moment/moment.js"></script>
    <script type="text/javascript" src="vendor/rafwell/simple-grid/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>

    <!-- JS LARAVELSIMPLEGRID -->
    <script src="vendor/rafwell/simple-grid/js/simplegrid.js"></script>   
  </body>
</html>
