<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>{{config('app.name', 'Deans')}}</title>
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" /> 
        <link rel="stylesheet" href="https://formden.com/static/cdn/font-awesome/4.4.0/css/font-awesome.min.css" />
        <style>.bootstrap-iso .form-group button, .bootstrap-iso form input.form-control, .bootstrap-iso form textarea.form-control, .bootstrap-iso form select.form-control{-webkit-border-radius: 0 !important;-moz-border-radius: 0; border-radius: 0;}.bootstrap-iso .formden_header h2, .bootstrap-iso .formden_header p, .bootstrap-iso form{font-family: Arial, Helvetica, sans-serif; color: #6a6666}.bootstrap-iso form button, .bootstrap-iso form button:hover{color: white !important;} .asteriskField{color: red;}.bootstrap-iso form .input-group-addon {color:#555555; background-color: #eeeeee; border-radius: 0px; padding-left:12px}</style>
        <link href="css/app.css" rel="stylesheet" />
        
    </head>
    <body class="sb-nav-fixed">
      @include('inc.nav')
      <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">Core</div>
                        <a class="nav-link" href="/">
                            <div class="sb-nav-link-icon"><i class="fas fa-home"></i></div>
                            Основная страница 
                            
                        </a>
                        <a class="nav-link" href="/sendzaev">
                            <div class="sb-nav-link-icon"><i class="far fa-edit"></i></div>
                            Подача заявлений 
                            
                        </a>
                        <a class="nav-link" href="/sendspravka">
                            <div class="sb-nav-link-icon"><i class="fas fa-pen"></i></div>
                            Подача справки
                        </a>
                        <a class="nav-link" href="/faqs">
                            <div class="sb-nav-link-icon"><i class="fa fa-question-circle"></i></div>
                            FAQs
                        </a>
                    </div>
                </div>
                <div class="sb-sidenav-footer">
                    <div class="small"></div>
                    
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid">
                    <h1 class="mt-4">@yield('breadcumbText')</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">@yield('breadcumbText')</li>
                    </ol>
                    
                    @yield('card')
                    <div class="card mb-4">
                        <div class="card-header">
                            @yield('breadcrumb')
                            
                        </div>
                        <div class="card-body">
                               @yield('cardBody')
                        </div>
                    </div>
                </div>
            </main>
            @include('inc.footer')
        </div>
        
    </div>
      <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
       <script src="js/script.js"> </script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
      <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
      <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
    </body>
</html>
