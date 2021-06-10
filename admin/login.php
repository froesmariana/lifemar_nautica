<?php include_once("../lib/includes.php");?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale-1,shrink-to-fit=no">
        <base href="<?php ur">

        <!--css-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="dist/ui/trrumbowyg.min.css">

        <title> ADMIN CP</title>
    </head>
    <body>
        <br>
        <div class="container">
            <div class="row">
                <div class="col-sm">
                    <div class="panel-content col-sm-6 offset-md-3">
                        <h4 class="titulo">Logue-se para continuar</h4>
                        <br>
                    <form method="POST">
                        <label>Usuário</label>
                        <input type="text" name="usuario" class="form-control"><br>
                        <label>Senha</label>
                        <input type="password" name="senha" class="form-control"><br>

                        <p align="right"><input type="submit" value="Entrar" class="b btn-primary btn-lg btn-block"></p>
                    </form>
                    </div>
                </div>
            </div>
        </div>

        <!--script-->
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <script src="https://kit.fontawesome.com/97bdcc5c17.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-3.3.1.min.js">\/script>')</script>
        <script src="dist/trrumbowyg.min.js"></script>
        <script type="text/javascript">$('#apost').trumbowyg();</script>"
    </body>
</html>