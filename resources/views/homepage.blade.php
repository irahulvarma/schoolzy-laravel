<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Schoolzy</title>

        <link rel="stylesheet" href="{{ asset('css/app.css')  }}">
    </head>
    <body class="d-flex flex-column min-vh-100">
        <!-- Navigation Bar -->
        <nav class="navbar bg-primary bg-body-tertiary">
            <div class="container-fluid">
                <span class="navbar-brand mb-0 h1">Schoolzy</span>
            </div>
        </nav>
        <!-- Navigation bar ends -->
        <div id="login">
            <h3 class="text-center text-white pt-5">Login form</h3>
            <div class="container">
                <div id="login-row" class="row justify-content-center align-items-center">
                    <div id="login-column" class="col-md-6">
                        <div id="login-box" class="col-md-12">
                            <form id="login-form" class="form" action="" method="post">
                                <h3 class="text-center">Login</h3>
                                <div class="form-group">
                                    <label for="username" >Username:</label><br>
                                    <input type="text" name="username" id="username" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="password" >Password:</label><br>
                                    <input type="text" name="password" id="password" class="form-control">
                                </div>
                                <div class="form-group">                                    
                                    <input type="submit" name="submit" class="btn btn-primary btn-md" value="Login">
                                </div>                                
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer bar starts -->
        <footer class="bg-primary mt-auto text-center text-lg-start">
            <!-- Copyright -->
            <div class="text-center p-3">
                ©{{ now()->year }} Copyright:
                <a class="text-dark" href="#">schoolzy.com</a>
            </div>
            <!-- Copyright -->
        </footer>
        <!-- Foota bar ends -->
        
    </body>
    <script src="{{ asset('js/app.js') }}"></script>
</html>