<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Login Administrator</title>
    <!-- General CSS Files -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-social/5.1.1/bootstrap-social.min.css" integrity="sha512-f8mUMCRNrJxPBDzPJx3n+Y5TC5xp6SmStstEfgsDXZJTcxBakoB5hvPLhAfJKa9rCvH+n3xpJ2vQByxLk4WP2g==" crossorigin="anonymous" />
    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('ladun/login/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('ladun/login/css/components.css') }}">
</head>

<body style="background-color: #9932CC;">
    <div id="app">
        <section class="section">
            <div class="container mt-5">
                <div class="row">
                    <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                        <div class="login-brand" style="background-color:#ecf0f1;">
                            <img src="https://s3-id-jkt-1.kilatstorage.id/ebunga/ebunga-cdn/img-utility/ebunga-logo-small.png" alt="logo">
                        </div>

                        <div id="divLogin" class="card card-primary" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); border-radius: 10px; ">
                            <div class="card-header">
                                <h4 style="text-align: center;">Login </h4>
                            </div>

                            <div class="card-body">

                                <div class="form-group">
                                    <label>Username</label>
                                    <input type="text" id="txtUsername" class="form-control" placeholder="Masukan username">
                                </div>
                                <div class="form-group">
                                  <label>Password</label>
                                  <input type="password" class="form-control" id="txtPassword" placeholder="Password">
                                </div>

                                <div class="form-group">
                                    <a href="#!" class="btn btn-primary btn-lg btn-block">Login</a>
                                </div>

                            </div>
                        </div>
                        <div class="mt-5 text-muted text-center">
                            <p style="color: #fff;">www.ebunga.co.id</p>
                        </div>
                        <div class="simple-footer">
                            <!--  Copyright &copy; Stisla 2018 -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- General JS Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="{{ asset('ladun/login/js/stisla.js') }}"></script>

    <!-- JS Libraies -->

    <!-- Template JS File -->
    <script src="{{ asset('ladun/login/js/scripts.js') }}"></script>
    <script src="{{ asset('ladun/login/js/custom.js') }}"></script>
    <script src="{{ asset('ladun/login/js/login.js') }}"></script>

</body>

</html>
