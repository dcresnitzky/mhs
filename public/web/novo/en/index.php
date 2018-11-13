<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="favicon.ico">
    <title>MHS Global</title>
    <script src="../js/jquery-2.1.3.min.js"></script>
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
     <script src="js/jquery-1.11.2.min.js"></script>
    <![endif]-->
    <script src="../js/pace.min.js"></script>
    <link href="../css/pace.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap theme 
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">-->
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->


    <script src="../js/bootstrap.min.js"></script>
    <!-- Style -->
    <link href="../css/style.css" rel="stylesheet" type="text/css"/>
  </head>
  <body>
    <div class="overlay"></div><div class="overlay-menu"></div>
    <div class="container-fluid header">
      <a href="javascript:gotoTop();"><img class="logo" src="../img/logo.png"/></a>
      <ul style="margin-right:155px" >
        <li class="dropdown" >
          <a id="lingua_dropdown" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><img src="../img/flageua.png" /> English<b class="caret"></b></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="../index.php"><img src="../img/flagbr.png" /> Português</a></li>
            <li><a href="#"><img src="../img/flagcn.png" /> Chinese</a></li>
          </ul>
        </li>
      </ul>
      <ul>
        <li class="dropdown">
          <a id="contato_dropdown" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Contact <b class="caret"></b></a>
          <ul class="dropdown-menu" role="menu" style="width:245px">
            <li>&nbsp;&nbsp;&nbsp;<span class='glyphicon glyphicon-earphone'></span> &nbsp;&nbsp;+55 011 98509-8676</li>
            <li>&nbsp;&nbsp;&nbsp;<span class='glyphicon glyphicon-envelope'></span> &nbsp;&nbsp;contato@mhsglobal.com.br</li>
          </ul>
        </li>
      </ul>
    </div>

    <div class="menu-hover">
      <img  src="../img/menu.png" id="menu-open" ALT='MENU'/>
      <a href="javascript:gotoTop();" ><img class="menu-icon" src="../img/menu-upfast.png" id="menu-upfast" ALT='MENU'/></a>
      <img  src="../img/menu-up.png" class="menu-icon"id="menu-up" ALT='MENU'/>
      <div class="onde-estou" style="font-size:13px">HOME</div>
      <img  src="../img/menu-down.png" class="menu-icon" id="menu-down" ALT='MENU'/>
    </div>

    <div class="side-menu">
      <div class="fecha-menu">
        <img src="../img/menu-close.png" id="menu-close" ALT='MENU'/> 
      </div><br><br>
      <ul>
        <li id="nav_home"><a href="javascript:goto('home');fecha_menu()">HOME</a></li>
        <li id="nav_empresa"><a href="javascript:goto('empresa');fecha_menu();">ABOUT US</a></li>
        <li id="nav_portifolio"><a href="javascript:goto('portifolio');fecha_menu();">PORTIFOLIO</a></li>
        <li id="nav_clientes"><a href="javascript:goto('clientes');fecha_menu();">CUSTOMERS</a></li>
        <li id="nav_contato"><a href="javascript:goto('contato');fecha_menu();">CONTACT</a></li>
      </ul>
      <div class='footer'>
      Copyright MHS Global 2015
      <br>Developed by <a href="http://br.linkedin.com/in/dcresnitzky" target="_BLANK" >Daniel Resnitzky</a>
      </div>
    </div>
    <div class="overlay-texto">INOVATION<BR>& TECNOLOGY</div>
    <section id="home" name="HOME">
        <img src="../img/mapa.png">
    </section>    
    <section id="empresa" name="ABOUT US">
      <div class="container-fluid"></div>
    </section>    
    <section id="portifolio" name="PORIFOLIO">
      <div class="container-fluid"></div>
    </section>    
    <section id="clientes" name="CUSTOMERS">
      <div class="container-fluid"></div>
    </section>   
    <section id="contato" name="CONTACT">
      <div class="container-fluid"></div>
    </section>


  </body>
  <script type='text/javascript'>

    function abre_menu(){
      var $lefty = $(".side-menu");
      var $lefty2 = $(".menu-hover");
      var $lefty3 = $(".overlay-texto");
      $lefty2.animate({left: -80})
      $lefty.delay(100).animate({left:0})
      $lefty3.delay(400).animate({left: 400 })
      $("#lingua_dropdown").css('color','#fff');
      $("#contato_dropdown").css('color','#fff');
      $(".overlay").fadeIn();
      $(".overlay-menu").fadeIn();    
    }

    function fecha_menu(){
      var $lefty = $(".side-menu");                   
      var $lefty2 = $(".menu-hover");
      var $lefty3 = $(".overlay-texto");
      $lefty3.delay(100).animate({left: -1200})
      $lefty.animate({left: -350})
      $lefty2.delay(100).animate({left: 0})
      $("#lingua_dropdown").css('color','#58595b');
      $("#contato_dropdown").css('color','#58595b');
      $(".overlay").fadeOut();
      $(".overlay-menu").fadeOut();
    }

    $(".overlay").on({
      'click': function (e) {
        fecha_menu();
        e.stopPropagation();
      }
    });
      $("#menu-open").on({
      'click': function (e) {
        atualiza_menu();
        abre_menu();
        e.stopPropagation();
      }
    });
    $('#menu-close').on({
      'click': function(e) {
        fecha_menu();
        e.stopPropagation();
      }
    });

    $(function(){
      $(".dropdown").hover(            
        function() {
          $('.dropdown-menu', this).stop( true, true ).fadeIn("fast");
          $(this).toggleClass('open');
          $('b', this).toggleClass("caret caret-up");                
        },
        function() {
          $('.dropdown-menu', this).stop( true, true ).fadeOut("fast");
          $(this).toggleClass('open');
          $('b', this).toggleClass("caret caret-up");                
        });
    });

    var sections = $('section');
    var onde_estou = $('.onde-estou');
    var nav_itens= $('.side-menu ul li');
   
    function gotoTop(){
      var scrollPosition = ($('#home').offset().top - 100)
      $('html, body').animate({
           scrollTop: scrollPosition
          }, 300, 'swing');
    };
    function reseta_menu(){
      nav_itens.each(function(){
        $(this).removeClass("ativo");
      })
    };
    function atualiza_menu(){
      reseta_menu();
      switch(onde_estou.html()){
        case 'HOME':
          $("#nav_home").addClass("ativo");
          break;        
        case 'ABOUT US':
          $("#nav_empresa").addClass("ativo");
          break;        
        case 'PORIFOLIO':
          $("#nav_portifolio").addClass("ativo");
          break;        
        case 'CUSTOMERS':
          $("#nav_clientes").addClass("ativo");
          break;        
        case 'CONTACT':
          $("#nav_contato").addClass("ativo");
          break;
      }
    };
    function detectaSection(){
      if (onde_estou.html() == 'HOME' ){
        $('#menu-up').css('opacity','0');
        $('#menu-upfast').css('opacity','0');
      } else if (onde_estou.html() != 'HOME' && onde_estou.html() != 'ABOUT US' ){
        $('#menu-upfast').css('opacity','1');
        $('#menu-up').css('opacity','1');
      }  else{
        $('#menu-up').css('opacity','1');
      }
      if (onde_estou.html() == 'CONTACT' ){
        $('#menu-down').css('opacity','0');
        $('#menu-upfast').css('opacity','1');
      } else {
        $('#menu-down').css('opacity','1');
      }
    };
    function goto(destino){
      var scrollPosition = ($('#'+destino).offset().top )
      $('html, body').animate({
        scrollTop: scrollPosition
      }, 300, 'swing');
    }
    function goup(){
      switch (onde_estou.html()){
        case 'ABOUT US':
          var scrollPosition = ($('#home').offset().top )
          $('html, body').animate({
           scrollTop: scrollPosition
          }, 300, 'swing');
        break;          
        case 'PORIFOLIO':
          var scrollPosition = ($('#empresa').offset().top )
          $('html, body').animate({
           scrollTop: scrollPosition
          }, 300, 'swing');
        break;          
        case 'CUSTOMERS':
          var scrollPosition = ($('#portifolio').offset().top )
          $('html, body').animate({
           scrollTop: scrollPosition
          }, 300, 'swing');
        break;          
        case 'CONTACT':
          var scrollPosition = ($('#clientes').offset().top )
          $('html, body').animate({
           scrollTop: scrollPosition
          }, 300, 'swing');
        break;
      }
    }
    function godown(){
      switch (onde_estou.html()){
        case 'HOME':
          var scrollPosition = ($('#empresa').offset().top )
          $('html, body').animate({
           scrollTop: scrollPosition
          }, 300, 'swing');
        break;          
        case 'ABOUT US':
          var scrollPosition = ($('#portifolio').offset().top )
          $('html, body').animate({
           scrollTop: scrollPosition
          }, 300, 'swing');
        break;          
        case 'PORIFOLIO':
          var scrollPosition = ($('#clientes').offset().top )
          $('html, body').animate({
           scrollTop: scrollPosition
          }, 300, 'swing');
        break;          
        case 'CUSTOMERS':
          var scrollPosition = ($('#contato').offset().top )
          $('html, body').animate({
           scrollTop: scrollPosition
          }, 300, 'swing');
        break;
      }      
    }
    $(document).ready(function(){
      var vertical =  screen.height;
      sections.each(function() {
        $(this).css('min-height',vertical);
        $(this).before().css('height',vertical);
      })
        $(window).on('scroll', function () {
          detectaSection();
          var cur_pos = $(this).scrollTop();
          sections.each(function() {
            var top = $(this).offset().top - 100,
             bottom = top + $(this).outerHeight();
            if (cur_pos >= top && cur_pos <= bottom) {
              onde_estou.html(($(this).attr("name")));
            }
          });
      });  
      $( window ).resize(function() {
        var vertical =  screen.height ;
        $('#home').css('min-height',vertical);
        $('#home').css('height',vertical);
        $('#empresa').css('min-height',vertical);
        $('#empresa').css('height',vertical);
        $('#portifolio').css('min-height',vertical);
        $('#portifolio').css('height',vertical);        
        $('#clientes').css('min-height',vertical);
        $('#clientes').css('height',vertical);
        $('#contato').css('min-height',vertical);
        $('#contato').css('height',vertical);
      }); 

      $('#menu-up').click(function(e){
        goup();                       
        e.preventDefault();
      });
      $('#menu-down').click(function(e){ 
        godown();                  
        e.preventDefault();
      });

      // lock scroll position, but retain settings for later
      $('body').on({
          'mousewheel': function(e) {
              if (e.target.id == 'el') return;
              e.preventDefault();
              e.stopPropagation();
          }
      });
      window.addEventListener("keydown", function(e) {
          // space and arrow keys
          if([37, 39, 32, 33, 34, 35, 36].indexOf(e.keyCode) > -1) {
              e.preventDefault();
          } else if (e.keyCode == '38'){
              goup();
              setTimeout(function(){
                atualiza_menu();
              },300);
              e.preventDefault();
          }
          else if (e.keyCode == '40') {
              // down arrow
              godown();
              setTimeout(function(){
                atualiza_menu();
              },300);
              e.preventDefault();
          }
      }, false);
      setTimeout(function(){
        detectaSection();
      }, 500);
    });

  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-60259627-1', 'auto');
  ga('send', 'pageview');

</script>
</html>
