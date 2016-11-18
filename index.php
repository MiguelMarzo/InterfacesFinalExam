<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Desarrollo web PHP</title>

        <!-- Bootstrap Core CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        
        <!-- Custom CSS -->
        <link href="assets/less/reglas-anidadas.less" rel="stylesheet/less" type="text/css" >
        <link href="assets/less/funciones-operadores.less" rel="stylesheet/less" type="text/css" >
        <link href="assets/less/namespaces.less" rel="stylesheet/less" type="text/css" >
        
        <script src="//cdnjs.cloudflare.com/ajax/libs/less.js/2.7.1/less.min.js"></script>

        <script src="http://code.jquery.com/jquery-latest.js"></script>
        
    </head>

    <body>

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button  type="button" class="navbar-toggle" id="toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>   
                    <a class="navbar-brand" href="index.php">Busqueda de empleo en 4v</a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li><a href="app/views/insert.php" id="ocultar" class="claro btn btn-block btn-primary"><span class="glyphicon glyphicon-plus-sign"></span> Sugierenos un empleo</a>        </li>
                    </ul>
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

        <!-- Page Content -->
        <div class="container-fluid">

            <div class="row-fluid">

                <!-- Jumbotron -->
                <div class="jumbotron">
                    <div class="row-fluid">
                        <div id="header" class="col-md-4 col-md-offset-4">
                            <h2>
                                Tu web para la busqueda de empleo!
                            </h2>

                        </div>
                    </div>
                    <div class="row">

                        <div class="col-lg-6 col-lg-offset-3" id="minamespace">
                            <a href="app/views/insert.php" class="claro btn btn-block btn-primary"><span class="glyphicon glyphicon-plus-sign"></span> Sugierenos un empleo</a>        
                        </div>  
                    </div>

                </div>    

                <!-- Content Row -->
                <div class="container-fluid"> 
                    <div class="row-fluid">   
                        <div class="cold-sm-12 col-md-6 col-lg-4 ">
                            <div class="thumbnail">
                                <div class="caption ">
                                    <h4 class="pull-right">1000 €</h4><h4><a href="app/views/detail.php?idJob=21">Junior Developer</a><a id="btnBorrar" href="app/controllers/deleteController.php?idJob=21"><span class="glyphicon glyphicon-trash"></span></a><a href="app/views/edit.php?idJob=21"><span class="glyphicon glyphicon-edit"></span></a> </h4>
                                    <table class="table table-sm table-borderless">  <thead>   <tr>  </tr>  </thead>  <tbody>  <tr>    <td colspan="2"><h5>As global leader in innovation and high tech engineering consulting, Spotacasa accompanies its clients in the creation and development of their new products and services.</h5></td>    <td colspan="2">  </td>  </tr><tr>    <th scope="row"><img src="http://placehold.it/350x150" target="_blank" class="logo"> </th>   <td>      <h4>   Empresa </h4>spotacasa    </td>   </tr>          </tbody> </table></div></div></div>

                        <div class="cold-sm-12 col-md-6 col-lg-4 ">
                            <div class="thumbnail">
                                <div class="caption">
                                    <h4 class="pull-right">12221 €</h4><h4><a href="app/views/detail.php?idJob=22">Software Engineer</a><a id="btnBorrar" href="app/controllers/deleteController.php?idJob=22"><span class="glyphicon glyphicon-trash"></span></a><a href="app/views/edit.php?idJob=22"><span class="glyphicon glyphicon-edit"></span></a> </h4>
                                    <table class="table table-sm table-borderless">  <thead>   <tr>  </tr>  </thead>  <tbody>  <tr>    <td colspan="2"><h5>As a Software Engineer at BBAWeb, you’ll have the opportunity to develop features using the latest cutting edge technologies.</h5></td>    <td colspan="2">  </td>  </tr><tr>    <th scope="row"><img src="http://placehold.it/450x350" target="_blank" class="logo"> </th>   <td>      <h4>   Empresa </h4>BBAWeb    </td>   </tr>          </tbody> </table></div></div></div>

                        <div class="cold-sm-12 col-md-6 col-lg-4 ">
                            <div class="thumbnail">
                                <div class="caption">
                                    <h4 class="pull-right">211 €</h4><h4><a href="app/views/detail.php?idJob=23">Becario</a><a id="btnBorrar" href="app/controllers/deleteController.php?idJob=23"><span class="glyphicon glyphicon-trash"></span></a><a href="app/views/edit.php?idJob=23"><span class="glyphicon glyphicon-edit"></span></a> </h4>
                                    <table class="table table-sm table-borderless">  <thead>   <tr>  </tr>  </thead>  <tbody>  <tr>    <td colspan="2"><h5>Preparar cafe, te..., saludar y dar los buenos días principalmente...</h5></td>    <td colspan="2">  </td>  </tr><tr>    <th scope="row"><img src="http://placehold.it/350x150" target="_blank" class="logo"> </th>   <td>      <h4>   Empresa </h4>UnaGrande    </td>   </tr>          </tbody> </table></div></div></div>                    </div>
                    <!-- /.row -->
                    <div class="row-fluid">   
                        <div class="cold-sm-12 col-md-6 col-lg-4 ">
                            <div class="thumbnail">
                                <div class="caption">
                                    <h4 class="pull-right">1212 €</h4><h4><a href="app/views/detail.php?idJob=24">CEO</a><a id="btnBorrar" href="app/controllers/deleteController.php?idJob=24"><span class="glyphicon glyphicon-trash"></span></a><a href="app/views/edit.php?idJob=24"><span class="glyphicon glyphicon-edit"></span></a> </h4>
                                    <table class="table table-sm table-borderless">  <thead>   <tr>  </tr>  </thead>  <tbody>  <tr>    <td colspan="2"><h5>Follow the leader</h5></td>    <td colspan="2">  </td>  </tr><tr>    <th scope="row"><img src="https://i.kinja-img.com/gawker-media/image/upload/s--pEKSmwzm--/c_scale,fl_progressive,q_80,w_800/1414228815325188681.jpg" target="_blank" class="logo"> </th>   <td>      <h4>   Empresa </h4>Biggest    </td>   </tr>          </tbody> </table></div></div></div>

                        <div class="cold-sm-12 col-md-6 col-lg-4 ">
                            <div class="thumbnail">
                                <div class="caption">
                                    <h4 class="pull-right">0 €</h4><h4><a href="app/views/detail.php?idJob=26">asdf</a><a id="btnBorrar" href="app/controllers/deleteController.php?idJob=26"><span class="glyphicon glyphicon-trash"></span></a><a href="app/views/edit.php?idJob=26"><span class="glyphicon glyphicon-edit"></span></a> </h4>
                                    <table class="table table-sm table-borderless">  <thead>   <tr>  </tr>  </thead>  <tbody>  <tr>    <td colspan="2"><h5>asdf
                                                        asdf
                                                        asdff</h5></td>    <td colspan="2">  </td>  </tr><tr>    <th scope="row"><img src="asdf" target="_blank" class="logo"> </th>   <td>      <h4>   Empresa </h4>asdf    </td>   </tr>          </tbody> </table></div></div></div>                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.row -->

            </div>

        </div>

    </div>
    <!-- /.container -->

    <div class="">

        <hr>

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
            $("#ocultar").hide();
            $(".navbar-header button").click(function () {
                if ($('#ocultar').is(":visible")) {
                    $('#ocultar').hide();
                } else {
                    $('#ocultar').show();
                }
            });
        });
        $(window).resize(function () {
            $("#ocultar").hide();
        });
        $("#btnBorrar").click(function(event) {
             event.preventDefault();
            alert("Elemento borrado de la base de datos");
        });

    </script>

    <!-- Bootstrap Core JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>

</html>
