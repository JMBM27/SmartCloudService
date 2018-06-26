<html>
    <head>
         <title class"center-align">SITCO</title>
         <meta meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
         <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
        <link type="text/css" rel="stylesheet" href="css/material-icons.css"/>
        <style>
            i{
                margin-top: 30px;
            }
            button{
                text-transform: none !important
            }
            .card .card-action a:not(.btn):not(.btn-large):not(.btn-floating)
            {
                text-transform: none !important
            }
        </style>
    </head>
    
    <body class="green lighten-4 nav-wrapper">
        <div class="row ">
        </div>
        
        <div class="container">
            <div class="section">
                <div class="row">
                    <div class="card medium col l4 push-l4">
                        <div class="card-content">
                            <form class="loginform" method="post">
                                <br />
                                <div class="row">
                                    <i class="material-icons col s2">account_circle</i>
                                    <div class="input-field col s10">
                                        <input id="user" type="text" id="name"/>
                                        <label for="user">Ingrese su id:</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <i class="material-icons col s2">vpn_key</i>
                                    <div class="input-field col s10">
                                        <input type="password" id="pass"/>
                                    <label for="pass">Ingrese su contraseña:</label>
                                    </div>
                                </div>
                                <button class="col s6 push-s3 btn btn-medium waves-effect blue">Entrar</button>
                            </form>
                            <div class="card-action">
                                No Posees una cuenta? <a href="Register.html" class="green-text">Registrate</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>

    <script>
    /*function check(){
        var name = document.getElementById("user").value;
        var pass = document.getElementById("pass").value;
        if(name == "" || pass == ""){
            alert("NO");
        }
        else {
            alert("SI");
        }
    }*/
    </script>
    <script src="js/jquery.min.js"></script>
    <script src="js/materialize.min.js"></script>
    
</html>