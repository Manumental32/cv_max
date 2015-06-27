<html lang="es">
<head>
  <title></title>
    <script src="js/jquery-1.10.2.min.js"></script>
  <style>
    #header {
      position: relative;
      display: block;
      float: left;
      width: 960px;
      height: 100%;
      left: 50%;
      margin-left: -480px;
    }

      #header h1 {
        position: absolute;
        top: 21px;
        left: 40px;
        height: 38px;
        margin: 0;
        line-height: 42px;
        font-family: "TitilliumText22L-Light";
        font-size: 25px;
        color: #4bbeaa;
      }

        #header h1 span {
          font-weight: lighter;
        }

      #header-panel {
        position: absolute;
        width: auto;
        height: 30px;
        top: 25px;
        right: 40px;
      }

        #header-panel-photo {
          position: relative;
          display: inline;
          float: left;
          width: 30px;
          height: 30px;
          margin-right: 10px;
          -webkit-border-radius: 5px;
          -moz-border-radius: 5px;
          border-radius: 5px;
        }

        #header-panel-name {
          position: relative;
          display: inline;
          float: left;
          width: auto;
          height: 30px;
          margin-right: 20px;
        }

          #header-panel-name p {
            position: relative;
            display: block;
            float: left;
            width: auto;
            height: 15px;
            margin: 0;
            font-size: 13px;
            font-family: "TitilliumText22L-Light";
            clear: both;
          }

        #header-panel-submit {
          position: relative;
          display: block;
          float: left;
          width: 50px;
          height: 30px;
        }

          #header-panel-submit input[type="submit"] {
            position: relative;
            display: block;
            float: left;
            width: 38px;
            height: 38px;
            left: 50%;
            margin: -5px 0 0 -20px;
            padding: 0;
            border: 1px solid #646464;
            border-radius: 19px;
            background: url(../images/login-submit.png) transparent center;
            transition: all 0.5s ease;
            -webkit-transition: all 0.5s ease;
            -moz-transition: all 0.5s ease;
            -o-transition: all 0.5s ease;
            cursor: pointer;
          }

      #header-systems {
        position: absolute;
        width: auto;
        height: 30px;
        left: 0;
      }

      .header-button {
        position: absolute;
        top: 80px;
        width: 40px;
        height: 30px;
        border-bottom-left-radius: 3px;
        border-bottom-right-radius: 3px;
        box-shadow: inset 0 10px 10px -10px rgba(0, 0, 0, 0.5);
        -webkit-box-shadow: inset 0 10px 10px -10px rgba(0, 0, 0, 0.5);
        -moz-box-shadow: inset 0 10px 10px -10px rgba(0, 0, 0, 0.5);
        -o-box-shadow: inset 0 10px 10px -10px rgba(0, 0, 0, 0.5);
        background-color: #e6e6e6;
      }

      .header-systems-button {
        position: relative;
        display: block;
        float: left;
        width: 40px;
        height: 30px;
        margin-left: 10px;
        border-bottom-left-radius: 3px;
        border-bottom-right-radius: 3px;
        box-shadow: inset 0 10px 10px -10px rgba(0, 0, 0, 0.5);
        -webkit-box-shadow: inset 0 10px 10px -10px rgba(0, 0, 0, 0.5);
        -moz-box-shadow: inset 0 10px 10px -10px rgba(0, 0, 0, 0.5);
        -o-box-shadow: inset 0 10px 10px -10px rgba(0, 0, 0, 0.5);
        background-color: #e6e6e6;
      }

        #header-button-home {
          left: 40px;
          background-image: url(../images/header-button-home.png);
        }

        #header-button-home:hover {
          background-image: url(../images/header-button-home-b.png);
        }

      #header-nav {
        position: absolute;
        top: 140px;
        left: 40px;
        width: 200px;
        height: auto;
      }

        #header-nav-backend {
          position: relative;
          display: block;
          float: left;
          width: 100%;
          height: auto;
        }


          #header-nav-usuarios-img {
            position: relative;
            display: block;
            float: left;
            width: 70px;
            height: 80px;
            margin: 0 65px;
            background: url(../images/header-content-usuarios.png);
          }

          #header-nav-usuarios-search {
            position: relative;
            display: block;
            float: left;
            width: 200px;
            height: 50px;
            margin-top: 10px;
            background: #f0f0f0;
            clear: both;
          }

            #header-nav-usuarios-search label {
              position: relative;
              display: block;
              float: left;
              width: 190px;
              height: 15px;
              margin: 5px;
              line-height: 15px;
              font-size: 10px;
              font-family: 'TitilliumText22L-Bold';
            }

            #header-nav-usuarios-search input[type="text"] {
              position: relative;
              display: block;
              float: left;
              width: 184px;
              height: 14px;
              margin: 0 5px 5px;
              padding: 2px;
              line-height: 14px;
              border: 1px solid black;
              outline: none;
            }

        .header-nav-sistema {
          position: relative;
          display: block;
          float: left;
          width: 100%;
          height: auto;
          margin: 0 0 20px;
          padding: 0;
          list-style: none;
        }

          .header-nav-seccion {
            position: relative;
            display: block;
            float: left;
            width: 100%;
            height: auto;
            margin: 5px 0;
            padding: 0;
            list-style: none;
          }

            .header-nav-seccion a {
              font-size: 11px;
              font-family: 'TitilliumText22L-Bold';
              color: #5f5f5f;
              text-decoration: none;
            }

          .header-nav-subsecciones {
            position: relative;
            display: none;
            float: left;
            width: 100%;
            height: auto;
            margin: 0 0 20px;
            padding: 0;
            list-style: none;
          }

            .header-nav-subseccion {
              position: relative;
              display: block;
              float: left;
              margin: 5px 0 5px 10px;
              padding: 0;
              list-style: none;
              clear: both;
            }

              .header-nav-subseccion a {
                font-size: 11px;
                font-family: 'TitilliumText22L-Light';
                color: #5f5f5f;
                text-decoration: none;
              }

              .header-nav-subseccion a:hover {
                font-family: 'TitilliumText22L-Bold';
              }
  </style>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="span3">
        
  <ul class="header-nav-sistema">
    <li class="header-nav-seccion"><a href="#" onclick="return false;">CLIENTES
    &gt;</a></li>

    <li style="list-style: none; display: inline">
      <ul class="header-nav-subsecciones" style="display: none;">
        <li class="header-nav-subseccion"><a href="clientes.php" style=
        "font-family: TitilliumText22L-Bold;">ABM CLIENTES &gt;</a></li>

        <li class="header-nav-subseccion"><a href=
        "clientes_historial.php">HISTORIAL</a></li>
      </ul>
    </li>

    <li class="header-nav-seccion"><a href="#" onclick="return false;">VENDEDORES
    &gt;</a></li>

    <li style="list-style: none; display: inline">
      <ul class="header-nav-subsecciones" style="display: block;">
        <li class="header-nav-subseccion"><a href="vendedores.php">ABM
        VENDEDORES</a></li>

        <li class="header-nav-subseccion"><a href=
        "vendedores_comisiones.php">COMISIONES</a></li>
      </ul>
    </li>

    <li class="header-nav-seccion"><a href="#" onclick="return false;">VENTAS
    &gt;</a></li>

    <li style="list-style: none; display: inline">
      <ul class="header-nav-subsecciones" style="">
        <li class="header-nav-subseccion"><a href="ventas_pedidos.php">ABM
        PEDIDOS</a></li>

        <li class="header-nav-subseccion"><a href="ventas.php">ABM VENTAS</a></li>

        <li class="header-nav-subseccion"><a href="ventas_cargarpagos.php">CARGAR
        PAGOS</a></li>
      </ul>
    </li>
  </ul>

      </div>
    </div>
  </div>

<script type="text/javascript">
$(document).ready(function () {
  $('.header-nav-seccion, .header-nav-subseccion')
      .mouseenter(
            function (){
                $('.header-nav-seccion, .header-nav-subseccion').removeClass('header-nav-seccion-onhover');
              if(!$(this).hasClass('header-nav-subseccion')){
                if($(this).css('display') == 'block'){
                  $('.header-nav-subsecciones').not($(this).next()).hide('blind');
                  $(this).addClass('header-nav-seccion-onhover');
                }

                var next = $(this).next();
                $(next).show('blind');
              } else {
                $(this).parent().prev().addClass('header-nav-seccion-onhover');
              }
            }
      );

  $('.header-nav-seccion, .header-nav-subseccion')
      .mouseleave( 
            function (){
                $('.header-nav-seccion, .header-nav-subseccion').removeClass('header-nav-seccion-onhover');
                $('#subsecciones-activas').show();
            }
        // function(){
        //  $(this).removeClass('header-nav-seccion-onhover');
        //  $('#subsecciones-activas').show();

        // }
      );  
</script>


    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->


  </body>
</html>
