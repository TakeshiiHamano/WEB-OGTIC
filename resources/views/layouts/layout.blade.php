<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!-- Latest compiled and minified CSS -->
	
  <link rel="icon" href="../img/tic1.png">
<!-- Latest compiled and minified JavaScript -->
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
	   <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link href="https://fortawesome.github.io/Font-Awesome/assets/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{asset('css/estilos.css')}}" rel="stylesheet" type="text/css">
    <script type="text/javascript">
    if (!name || name === ' ') {
         name = "Guest";  
      }
      
      // strip tags
      name = name.replace(/(<([^>]+)>)/ig,"");
      
      // display name on page
      $("#name-area").html("You are: <span>" + name + "</span>");
      
    var chat =  new Chat();
      $(function() {
      
         chat.getState(); 
         
         // watch textarea for key presses
             $("#sendie").keydown(function(event) {  
             
                 var key = event.which;  
           
                 //all keys including return.  
                 if (key >= 33) {
                   
                     var maxLength = $(this).attr("maxlength");  
                     var length = this.value.length;  
                     
                     // don't allow new content if length is maxed out
                     if (length >= maxLength) {  
                         event.preventDefault();  
                     }  
                  }  
                                                                                                        });
         // watch textarea for release of key press
         $('#sendie').keyup(function(e) { 
                   
            if (e.keyCode == 13) { 
            
                    var text = $(this).val();
            var maxLength = $(this).attr("maxlength");  
                    var length = text.length; 
                     
                    // send 
                    if (length <= maxLength + 1) { 
                     
                  chat.send(text, name);  
                  $(this).val("");
                  
                    } else {
                    
              $(this).val(text.substring(0, maxLength));
              
            } 
            
            
            }
             });
            
      });
    </script>
</head>
<body>
<div class="navbar-wrapper">
      <div class="container">
        <nav class="navbar navbar-inverse navbar-static-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="/" style="padding: 0px;"><img src="../img/tic1.png" alt="" width="50px"; height="50px";></a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li class=><a href="/">Nosotros</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Oficinas <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="/desarrollo">Oficina de Desarrollo de Software</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="/soporte">Oficina de Soporte Técnico</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="/gestion">Oficina Gestión de Comunicaciones</a></li>
                  </ul>
                </li>
                <li><a href="/proyecto">Proyectos</a></li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
</div>
<div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img class="first-slide" src="../img/administracion-bg.png" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Example headline.</h1>
              <p>Note: If you're viewing this page via a <code>file://</code> URL, the "next" and "previous" Glyphicon buttons on the left and right might not load/display properly due to web browser security rules.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="second-slide" src="../img/agronomia-bg.png" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Another example headline.</h1>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="third-slide" src="../img/ambiental-bg.png" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>One more for good measure.</h1>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
</div>
@yield('body')
<footer>
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-sm-6 footerleft ">
        <div class="logofooter"> OGTIC</div>
        <br> <br>
        <p><i class="fa fa-map-pin"></i>Ciudad Universitaria, Ica</p>
        <p><i class="fa fa-phone"></i> Teléfono (Perú) : +51 9999 878 398</p>
        <p><i class="fa fa-envelope"></i> E-mail : tic@unica.edu.pe</p>
        
      </div>
      <div class="col-md-4 col-sm-6 paddingtop-bottom">
        <h6 class="heading7"></h6>
        <ul class="footer-ul">
          <li><a href="/"> Nosotros</a></li>
          <li><a href="/desarrollo"> Oficina de Desarrollo de Software</a></li>
          <li><a href="/soporte"> Oficina de Soporte Técnico</a></li>
          <li><a href="/gestion"> Oficina de Gestión de Comunicaciones</a></li>
          <li><a href="/proyecto"> Proyectos en Desarrollo</a></li>
        </ul>
      </div>
      <div class="chatbox chatbox--tray chatbox--empty">
    <div class="chatbox__title">
        <h5><a href="#">Customer Service</a></h5>
        <button class="chatbox__title__tray">
            <span></span>
        </button>
        <button class="chatbox__title__close">
            <span>
                <svg viewBox="0 0 12 12" width="12px" height="12px">
                    <line stroke="#FFFFFF" x1="11.75" y1="0.25" x2="0.25" y2="11.75"></line>
                    <line stroke="#FFFFFF" x1="11.75" y1="11.75" x2="0.25" y2="0.25"></line>
                </svg>
            </span>
        </button>
    </div>
    <div class="chatbox__body">
        <div class="chatbox__body__message chatbox__body__message--left">
            
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
        <div class="chatbox__body__message chatbox__body__message--right">
            
            <p>Nulla vel turpis vulputate, tincidunt lectus sed, porta arcu.</p>
        </div>
    </div>
    <form class="chatbox__credentials">
        <div class="form-group">
            <label for="inputName">Name:</label>
            <input type="text" class="form-control" id="inputName" required>
        </div>
        <div class="form-group">
            <label for="inputEmail">Email:</label>
            <input type="email" class="form-control" id="inputEmail" required>
        </div>
        <button type="submit" class="btn btn-success btn-block">Enter Chat</button>
    </form>
    <textarea class="chatbox__message" placeholder="Write something interesting"></textarea>
</div>
      <div class="col-md-4 col-sm-6 paddingtop-bottom">
        <div class="fb-page" data-href="https://www.facebook.com/facebook" data-tabs="timeline" data-height="300" data-small-header="false" style="margin-bottom:15px;" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
          <div class="fb-xfbml-parse-ignore">
            <blockquote cite="https://www.facebook.com/facebook"><a href="https://www.facebook.com/facebook">Facebook</a></blockquote>
          </div>
        </div>
        <div class="fb-page" data-href="https://www.facebook.com/facebook" data-tabs="timeline" data-height="300" data-small-header="false" style="margin-bottom:15px;" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
          <div class="fb-xfbml-parse-ignore">
            <blockquote cite="https://www.facebook.com/facebook"><a href="https://www.facebook.com/facebook">Twitter</a></blockquote>
          </div>
        </div>
        <div class="fb-page" data-href="https://www.facebook.com/facebook" data-tabs="timeline" data-height="300" data-small-header="false" style="margin-bottom:15px;" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
          <div class="fb-xfbml-parse-ignore">
            <blockquote cite="https://www.facebook.com/facebook"><a href="https://www.facebook.com/facebook">YouTube</a></blockquote>
          </div>
        </div>
        <div class="fb-page" data-href="https://www.facebook.com/facebook" data-tabs="timeline" data-height="300" data-small-header="false" style="margin-bottom:15px;" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
          <div class="fb-xfbml-parse-ignore">
            <blockquote cite="https://www.facebook.com/facebook"><a href="https://www.facebook.com/facebook">Google Plus</a></blockquote>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>
<!--footer start from here-->

<div class="copyright">
  <div class="container">
    <div class="col-md-6">
      <p>© 2017 - All Rights with OGTIC.</p>
    </div>
    <div class="col-md-6">
      <ul class="bottom_ul">
        <li><a href="#">webenlance.com</a></li>
      </ul>
    </div>
  </div>
</div>
<script src="{{asset('js/jquery-2.2.4.min.js')}}"></script>
<script src="{{asset('js/javascript.js')}}"></script>
<script src="{{asset('js/js.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
</body>
</html>

