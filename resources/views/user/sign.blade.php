<html>
    <head>
         <title class"center-align">SITCO</title>
         <meta meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
         <link type="text/css" rel="stylesheet" href="{{asset('css/materialize.min.css')}}"/>
        <link type="text/css" rel="stylesheet" href="{{asset('css/customs.css')}}"/>
        <style>
            
        </style>
    </head>
    
    <body class="green lighten-4 nav-wrapper"> 
        <div class="row ">
      
        <div class="container">
                <div class="row">
                    <div class="card large col m6 push-m3 l4 push-l4">
                        <div class="card-title"><br /><center><strong>Registro</strong></center></div>
                        <div class="card-content">
                            <form method="post" action="{{ action('SignController@store') }}" autocomplete="off">
                                @csrf
                                    <div class="input-field col s12">
                                        <input name="id" id="user" type="text" value="{{ old('id') }}" oninput="this.className = ''"/>
                                        <label for="user">Ingrese el Código de su Farmacia</label>
                                        @if($errors->has('id'))
                                            {{ $errors->first('id') }}
                                        @endif
                                </div>
                                    <div class="input-field col s12">
                                        <input name="email" id="mail" type="text" value="{{ old('email') }}" oninput="this.className = ''"/>
                                        <label for="mail">Ingrese su e-mail</label>
                                            @if($errors->has('email'))
                                                {{ $errors->first('email') }}
                                            @endif
                                    </div>
                                    <div class="input-field col s12">
                                        <input name="conf-email" id="mail2" type="text" value="{{ old('conf-email') }}" oninput="this.className = ''"/>
                                        <label for="mail2">Confirme su e-mail</label>
                                            @if($errors->has('conf-email'))
                                                {{ $errors->first('conf-email') }}
                                            @endif
                                    </div>
                                    <div class="input-field col s12">
                                        <input name="pass" id="pass" type="password" value="{{ old('pass') }}" oninput="this.className = ''"/>
                                        <label for="pass">Ingrese la contraseña</label>
                                            @if($errors->has('pass'))
                                                {{ $errors->first('pass') }}
                                            @endif
                                    </div>
                                    <div class="input-field col s12">
                                        <input name="conf-pass" id="pass2" type="password" value="{{ old('conf-pass') }}" oninput="this.className = ''"/>
                                        <label for="pass2">Confirme la contraseña</label>
                                            @if($errors->has('conf-pass'))
                                                {{ $errors->first('conf-pass') }}
                                            @endif
                                    </div>

                                <input type="submit" name="Enviar"/>
                            </form>
                        <!--
                            <div class="card-action">
                                <button type="button" id="prevBtn" onclick="nextPrev(-1)" style="float:left;" class="col s6 btn btn-medium waves-effect blue">Anterior</button>
                                <button type="button" id="nextBtn" onclick="nextPrev(1)" style="float:right;" class="col s6 btn btn-medium waves-effect blue">Siguiente</button>
                                <div style="text-align:center;margin-top:40px;">
                                  <span class="step"></span>
                                  <span class="step"></span>
                                </div>
                        -->
                                Ya Posees una Cuenta? <a href="login.html" class="green-text">Inicia Sesion</a>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </body>
    <script>
    /*   function check(){
        var lol =
        alert(lol);
       }

  
    /*
    var currentTab = 0;
    showTab(currentTab);
    x = document.getElementsByClassName("step")[0].className.replace(" active", "");

    function showTab(n) {
      var x = document.getElementsByClassName("tab");
      x[n].style.display = "block";
      if (n == 0) {
        document.getElementById("prevBtn").style.display = "none";
      } else {
        document.getElementById("prevBtn").style.display = "inline";
      }
      if (n == (x.length - 1)) {
        document.getElementById("nextBtn").innerHTML = "Registrarse";
      } else {
        document.getElementById("nextBtn").innerHTML = "Siguiente";
      }
      fixStepIndicator(n)
    }

    function nextPrev(n) {
      var x = document.getElementsByClassName("tab");
      if (n == 1 && !validateForm()) return false;

      x[currentTab].style.display = "none";
      currentTab = currentTab + n;
      if (currentTab >= x.length) {
        document.getElementById("regForm").submit();
        return false;
      }
      showTab(currentTab);
    }

    function validateForm() {
      var x, y, i, valid = true;
      x = document.getElementsByClassName("tab");
      y = x[currentTab].getElementsByTagName("input");
      for (i = 0; i < y.length; i++) {
        if (y[i].value == "") {
          y[i].className += " invalid";
          valid = false;
        }
      }
      return valid;
    }

    function fixStepIndicator(n) {
      var i, x = document.getElementsByClassName("step");
      for (i = 0; i < x.length; i++) {
        x[i].className = x[i].className.replace(" active", "");
      }
      x[n].className += " active";
    }*/
    </script>
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/materialize.min.js')}}"></script>
    
</html>