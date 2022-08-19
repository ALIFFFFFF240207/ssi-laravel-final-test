<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">  
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <script src="{{asset('js/javascript.js')}}"></script>
    <title>DioToy's - @yield('title')</title>
</head>

  <body id="body-pd">
    <header class="header" id="header">
        <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
        <div class="header_img"> <img src="https://i.imgur.com/hczKIze.jpg" alt=""> </div>
    
    </header>
    <div class="l-navbar" id="nav-bar">
        <nav class="nav">
            <div>
                 <a href="#" class="nav_logo">
                     <i class='bx bx-layer nav_logo-icon'>
                        </i> 
                        <span class="nav_logo-name">DioToy's</span> 
                    </a>
                <div class="nav_list"> 
                    <a href="/" class="nav_link "> 
                        <i class='bx bx-grid-alt nav_icon'>
                            </i> 
                            <span class="nav_name">Dashboard</span> 
                        </a> 
                        <a href="/mainan#" class="nav_link"> 
                            <i class='bx bx-package nav_icon'></i> 
                            <span class="nav_name">Master Barang</span> 
                        </a> 
                        </div>
            </div> <a href="#" class="nav_link"> <i class='bx bx-log-out nav_icon'></i> <span class="nav_name">SignOut</span> </a>
        </nav>
    </div>
    @yield('content')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>