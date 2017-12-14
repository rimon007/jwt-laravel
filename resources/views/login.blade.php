<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Standard Meta -->
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

    <!-- Site Properties -->
    <title>Bootstrap 4 Login Form</title>

    <!-- Stylesheets -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="/css/app.css">
    <style>
        .colorgraph {
            height: 5px;
            border-top: 0;
            /* background: #c4e17f; */
            border-radius: 5px;
            /* background-image: -webkit-linear-gradient(left,#c4e17f,#c4e17f 12.5%,#f7fdca 12.5%,#f7fdca 25%,#fecf71 25%,#fecf71 37.5%,#f0776c 37.5%,#f0776c 50%,#db9dbe 50%,#db9dbe 62.5%,#c49cde 62.5%,#c49cde 75%,#669ae1 75%,#669ae1 87.5%,#62c2e4 87.5%,#62c2e4); */
            background-image: -moz-linear-gradient(left,#c4e17f,#c4e17f 12.5%,#f7fdca 12.5%,#f7fdca 25%,#fecf71 25%,#fecf71 37.5%,#f0776c 37.5%,#f0776c 50%,#db9dbe 50%,#db9dbe 62.5%,#c49cde 62.5%,#c49cde 75%,#669ae1 75%,#669ae1 87.5%,#62c2e4 87.5%,#62c2e4);
            background-image: -o-linear-gradient(left,#c4e17f,#c4e17f 12.5%,#f7fdca 12.5%,#f7fdca 25%,#fecf71 25%,#fecf71 37.5%,#f0776c 37.5%,#f0776c 50%,#db9dbe 50%,#db9dbe 62.5%,#c49cde 62.5%,#c49cde 75%,#669ae1 75%,#669ae1 87.5%,#62c2e4 87.5%,#62c2e4);
            background-image: linear-gradient(to right,#c4e17f,#c4e17f 12.5%,#f7fdca 12.5%,#f7fdca 25%,#fecf71 25%,#fecf71 37.5%,#f0776c 37.5%,#f0776c 50%,#db9dbe 50%,#db9dbe 62.5%,#c49cde 62.5%,#c49cde 75%,#669ae1 75%,#669ae1 87.5%,#62c2e4 87.5%,#62c2e4);
        }
        .loginHeader strong {
            font-weight: 900;
            font-size: 2em;
        }
        form {
            margin-top: 50%;
        }  
        form button {
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="container">     
        <div class="row justify-content-md-center">
            <div class="col-md-4">
                <form>
                    <p class="loginHeader">
                        <strong>Login</strong>
                        <small>Medicocarebd</small>
                    </p>
                    <hr class="colorgraph">
                    <div class="form-group"> {{-- has-danger --}}
                        <input type="text" 
                            class="form-control" {{-- form-control-danger --}} 
                            placeholder="Email address" 
                            required 
                            autofocus>
                        {{-- <div class="form-control-feedback">Sorry, that username's taken. Try another?</div> --}}
                    </div>

                    <div class="form-group">
                        <input type="text" 
                            class="form-control"
                            placeholder="Password" 
                            required>
                    </div>

                    <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
                </form>
            </div>
        </div>  

    </div> <!-- /container -->
</body>
</html>