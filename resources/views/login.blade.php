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