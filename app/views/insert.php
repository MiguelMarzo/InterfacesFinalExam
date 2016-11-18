<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Desarrollo web - PHP</title>

        <!-- Bootstrap Core CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!-- Custom CSS -->
        <link href="../../assets/less/reglas-anidadas.less" rel="stylesheet/less" type="text/css" >
        <link href="../../assets/less/funciones-operadores.less" rel="stylesheet/less" type="text/css" >
        <link href="../../assets/less/namespaces.less" rel="stylesheet/less" type="text/css" >
        <link href="../../assets/css/shop-homepage.css" rel="stylesheet/css" type="text/css" >

        <script src="//cdnjs.cloudflare.com/ajax/libs/less.js/2.7.1/less.min.js"></script>

        <script src="http://code.jquery.com/jquery-latest.js"></script>


    </head>
    <body>
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button  type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="../../index.php">Busqueda de empleo en 4v</a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                    <!-- FORMULARIO DE BÚSQUEDA -->
                    <form class="navbar-form navbar-right" role="search" method="post" action="index.php">
                        <div class="form-group">
                            <input type="text" name="trip" class="form-control" placeholder="Buscar..." value="">
                        </div>
                        <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
                    </form>
                    <!-- FIN FORMULARIO DE BÚSQUEDA -->


                </div>

            </div>
            <!-- /.container -->
        </nav>
        <div class="jumbotron">
            <div class="row-fluid">
                <div id="header" class="col-md-4 col-md-offset-4">
                    <h2>
                        Proponer un empleo
                    </h2>

                </div>
            </div>
        </div>

        <!-- FORMULARIO DE INSERCIÓN -->
        <form class="form-horizontal">


            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="posicion">Posición:</label>  
                <div class="col-md-5">
                    <input id="posicion" name="posicion" type="text" placeholder="" class="form-control input-md">

                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="compañia">Compañia</label>  
                <div class="col-md-5">
                    <input id="compañia" name="compañia" type="text" placeholder="" class="form-control input-md">

                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="urlLogo">Url Logo</label>  
                <div class="col-md-5">
                    <input id="urlLogo" name="urlLogo" type="text" placeholder="" class="form-control input-md">

                </div>
            </div>

            <!-- Textarea -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="descripcion">Descripción</label>
                <div class="col-md-4">                     
                    <textarea class="form-control" id="descripcion" name="descripcion"></textarea>
                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="salario">Salario</label>  
                <div class="col-md-5">
                    <input id="salario" name="salario" type="text" placeholder="" class="form-control input-md">

                </div>
            </div>

            <!-- Button -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="button"></label>
                <div class="col-md-4">
                    <button id="button" name="button" class="btn btn-success">Añadir</button>
                </div>
            </div>
        </form>

        <!-- FIN DEL FORMULARIO  -->
        <img id="thanksMsg" src="http://www.clipartkid.com/images/533/comments-0-category-uncategorized-7M9WxH-clipart.png" width="300"/>
        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Eugenia Pérez 2015 - eugeniaperez.es</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script type="text/javascript">
        $(document).ready(function () {
            $("#thanksMsg").hide();
            $("#ocultar").hide();
            $(".navbar-header button").click(function () {
                if ($('#ocultar').is(":visible")) {
                    $('#ocultar').hide();
                } else {
                    $('#ocultar').show();
                }
            });

            $("#button").click(function (event) {
                event.preventDefault();
                $("#thanksMsg").show(0).delay(3000).fadeOut(2000).queue(function (next) {
                    window.location.href = "../../index.php";
                    next();
                });
            });
        });
        $(window).resize(function () {
            $("#ocultar").hide();
        });


    </script>

    <!-- Bootstrap Core JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


</body>

</html>
