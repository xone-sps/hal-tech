<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Mekong Digital Works</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="/dist/bulma.min.css">
        <!-- Styles -->
       <style>
       .middle{
           margin-top: 100px;
       }
       .login-button{
           margin-top: 20px;
       }
       .image{
        width:100.459px;
        height:89.499px;
       }
       .login-image{
           display: block;
           margin-left: auto;
           margin-right: auto;
           width: 25%;
           margin-bottom: 30px;
       }
       </style>
    </head>
    <body>
        
        <div class="columns section">
                
            <div class="column is-4-desktop is-12-mobile is-offset-4-desktop middle">
                    <div class="login-image">
                            <img class="image" src="https://mekong.digital/img/upload/thumbnails/0308fcb1591067ba86fd6db5f38866791549891696MDW-logo---svg.png" alt="logo">
                    </div>
                    
                <div class="is-fullwidth">
                        
<form action="{{ route('login') }}" method="POST">
    <label for="username">E-mail</label>
<input type="email" name="email" class="input is-primary">
<label for="password">Password</label>
           <input type="password" name="password" class="input is-primary">
           @csrf
           <br>
           <button class="button is-primary is-fullwidth login-button">Login</button>
</form>
           
        </div>
            </div>
        </div>
        
    </body>
</html>
