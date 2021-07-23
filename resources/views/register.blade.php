<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Create Account</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        @media (min-width:640px) {}

        @media (min-width:768px) {}

        @media (min-width:1024px) {}

    </style>

    <style>
        body {
            font-family: 'Nunito', sans-serif;

            html,
            body {
                height: 100%;
            }

            body {
                display: -ms-flexbox;
                display: -webkit-box;
                display: flex;
                -ms-flex-align: center;
                -ms-flex-pack: center;
                -webkit-box-align: center;
                align-items: center;
                -webkit-box-pack: center;
                justify-content: center;
                padding-top: 40px;
                padding-bottom: 40px;
                background-color: #f5f5f5;
            }

            .form-signin {
                width: 100%;
                max-width: 330px;
                margin: 0 auto;
            }

            .form-signin .checkbox {
                font-weight: 400;
            }

            .form-signin .form-control {
                position: relative;
                box-sizing: border-box;
                height: auto;
                font-size: 16px;
            }

            .form-signin .form-control:focus {
                z-index: 2;
            }

            .form-signin input[type="email"] {
                margin-bottom: -1px;
                border-bottom-right-radius: 0;
                border-bottom-left-radius: 0;
            }

            .form-signin input[type="password"] {
                margin-bottom: 10px;
                border-top-left-radius: 0;
                border-top-right-radius: 0;
            }

            #inputEmail,
            #inputPassword {
                padding-left: 5% !important;
                padding-right: 5% !important;

            }

            .btn-primary {
                padding-top: 30px !important;
            }

        }

    </style>
    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/sign-in/">
    <link href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="text-center">
    <form class="form-signin" style="padding-left: 10%!important; padding-right:10%!important;">
        <img class="mb-4" src="https://img.icons8.com/dusk/344/cute-monster.png" alt="Monster Icon." width="72"
            height="72">
        <h1 class="h3 mb-3 font-weight-normal">Create Account</h1>
        <label for="inputEmail" class="sr-only" style="padding-left: 5%!important; padding-right:5%!important;">Email
            address</label>
        <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required="" autofocus="">
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" required=""><br>
        <button class="btn btn-lg btn-primary btn-block" type="submit">I'm Done!</button>
    </form>


</body>

</html>
