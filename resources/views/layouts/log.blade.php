<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <script src="http://s.codepen.io/assets/libs/modernizr.js" type="text/javascript"></script>
    <link href='http://fonts.googleapis.com/css?family=Raleway:300,200' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <button id="findpass" class="findpass">Belum Punya Akun?</button>
    <button id="register" class="findpass hide">
        <a href="{{url('/register')}}" title="">Daftar</a>
    </button>
    <form action="{{ url('/login') }}" method="post" accept-charset="utf-8">
    {{ csrf_field() }}
        <div class="form" id="form-login">
            <div class="forceColor"></div>
            <div class="topbar">
                <div class="spanColor"></div>
                <input type="text" class="input" id="username" name="username" placeholder="Username" />
            </div>
            <div class="topbar">
                <div class="spanColor"></div>
                <input type="password" class="input" id="password" name="password" placeholder="Password" />
            </div>
            <button class="submit" id="submit">Login</button>
        </div>
    </form>

    <!-- daftar -->
    <form action="{{ url('/register') }}" method="post" accept-charset="utf-8">
    <div class="form hide" id="form-register">
        <div class="forceColor"></div>
        <div class="topbar">
            <div class="spanColor"></div>
            <input type="text" class="input" id="register-username" placeholder="Username" name="name" />
        </div>
        <div class="topbar">
            <div class="spanColor"></div>
            <input type="text" class="input" id="register-username" placeholder="Username" name="username" />
        </div>
        <div class="topbar">
            <div class="spanColor"></div>
            <input type="text" class="input" id="register-username" placeholder="NPP" name="npp" />
        </div>
        <div class="topbar">
            <div class="spanColor"></div>
            <input type="email" class="input" id="register-username" placeholder="E-Mail" name="email" />
        </div>
        <div class="topbar">
            <div class="spanColor"></div>
            <input type="password" class="input" id="register-password" placeholder="Password" name="password" />
        </div>
        <div class="topbar">
            <div class="spanColor"></div>
            <input type="password" class="input" id="register-password-ulangi" placeholder="Ulangi Password" name="password-confirm" />
        </div>
        <button type="submit" class="submit" id="submit">Register</button>
    </div>
    </form>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src="js/index.js"></script>
</body>

</html>
