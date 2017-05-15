<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Conferentiesite Rob</title>
        <!-- Bootstrap -->
        <link href="{{ URL::secure('src/css/robstyle.css') }}" rel="stylesheet">
        <link href="{{ URL::secure('src/css/bootstrap.min.css') }}" rel="stylesheet">
        
        
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        
        <script src="{{ URL::secure('src/jquery/jquery.min.js') }}"></script>
        
    </head>
    <body>
        @include('includes.header')
        <div class="container">
            @include('includes.navbar')
            @yield('content')
        </div>
        <footer class="footer">
            <div class="container col-lg-12">
                <p class="text-muted">Bunky™ corp.&copy;</p>
            </div>
        </footer>
        
         <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="{{ URL::secure('src/js/bootstrap.min.js') }}"></script>
    </body>
</html>