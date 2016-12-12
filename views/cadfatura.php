<?php

    include_once '../config.php';
    session_start();

    $c = new Controller();

    if(!$c->verificaLogin()){
        header('Location: ../index.php');
        exit;
    }

    $c->cadFatura();
    $c->logouf();


?>
<!DOCTYPE html>
<html lang="pt-br" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>Material Design Bootstrap</title>

    <script src="../js/material.min.js"></script>

    <link rel="stylesheet" href="https://code.getmdl.io/1.2.1/material.indigo-pink.min.css">
    <!-- Material Design icon font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Material Design Bootstrap -->
    <link href="../css/mdb.min.css" rel="stylesheet">

    <!-- Your custom styles (optional) -->
    <link href="../css/style.css" rel="stylesheet">

    <script type="text/javascript">
        window.onload=function() {
            $(document).ready(function () {
                $('select').material_select();
            });
        }
    </script>
</head>
<body>
<?php include 'menucomp.php'; ?>
<div class="collapse navbar-toggleable-xs" id="collapseEx2" style="padding-left: 550px">
    <div>
        <p><h4>LANÇAMENTO FATURAS</h4></p>
    </div>
    <?php if($c->cadfatura):?>
    <?php echo $c->cadFatura; ?>
    <?php endif; ?>
</div>
<main class="mdl-layout__content">
    <!--Naked Form-->
    <div class="col-lg-8" style="position: relative; left: 220px; top: 30px">
    <form method="get">
        <div class="card-block col-lg-4" style="position: relative; top: 45px" >
        <!--Body-->
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="position: relative; left: 50px;top: 0px">
            <input class="mdl-textfield__input" type="number" name="num" id="sample3" tabindex="1" required>
            <label class="mdl-textfield__label" for="sample3" style="color: #5a5a5a; font-size:medium">Nº boleto</label>
        </div>
        <br /><br />
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="position: relative; left: 50px;top: 20px">
            <select class="mdb-select colorful-select dropdown-primary" name="categ"  tabindex="4">
                <option value="" disabled selected >Selecione uma categoria...</option>
                <option value="1">Option 1</option>
                <option value="2">Option 2</option>
                <option value="3">Option 3</option>
                <option value="1">Option 1</option>
                <option value="2">Option 2</option>
                <option value="3">Option 3</option>
                <option value="1">Option 1</option>
                <option value="2">Option 2</option>
                <option value="3">Option 3</option>
                <option value="1">aption 1</option>
                <option value="2">bption 2</option>
                <option value="3">cption 3</option>
            </select>
        </div>
        <br /><br />
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="position: relative; left: 50px;top: 14px">
                <input class="mdl-textfield__input" type="text" name="valor" id="sample3" tabindex="7" required>
                <label class="mdl-textfield__label" for="sample3" style="color: #5a5a5a; font-size:medium">Valor</label>
            </div>
    </div>
        <div class="card-block col-lg-4" >
            <!--Body-->
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="position: relative; left: 50px">
                <label for="form5" style="color: #5a5a5a; font-size:medium;top: 20px;position: relative">Data lançamento</label>
                <input type="date" name="dtlanc" id="form5" class="form-control" tabindex="2" required>
            </div>
            <br /><br />
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="position: relative; left: 50px;">
                <select class="mdb-select colorful-select dropdown-primary" name="forn"  tabindex="5">
                    <option value="" disabled selected>Selecione o Fornecedor ...</option>
                    <option value="1">Option 1</option>
                    <option value="2">Option 2</option>
                    <option value="3">Option 3</option>
                    <option value="1">Option 1</option>
                    <option value="2">Option 2</option>
                    <option value="3">Option 3</option>
                    <option value="1">Option 1</option>
                    <option value="2">Option 2</option>
                    <option value="3">Option 3</option>
                    <option value="1">aption 1</option>
                    <option value="2">bption 2</option>
                    <option value="3">cption 3</option>
                </select>
            </div>
            <br /><br />
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="position: relative; left: 50px; top: 0px;">
                <input class="mdl-textfield__input" type="number" name="desconto" id="sample3" tabindex="8">
                <label class="mdl-textfield__label" for="sample3" style="color: #5a5a5a; font-size:medium">Desconto</label>
            </div>
        </div>
        <div class="card-block col-lg-4">
            <!--Body-->
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="position: relative; left: 50px;">
                <label for="form5" style="color: #5a5a5a; font-size:medium;top: 20px;position: relative">Data vencimento</label>
                <input type="date" name="dtvenc" id="form5" class="form-control" tabindex="3" required>
            </div>
            <br /><br />
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="position: relative; left: 50px;">
                <select class="mdb-select colorful-select dropdown-primary" name="status" tabindex="9">
                    <option value="" disabled selected>Selecione um status ...</option>
                    <option value="aberta">Aberta</option>
                    <option value="fechada">Fechada</option>
                </select>
            </div>
            <br /><br />
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="position: relative; left: 50px;">
                <input class="mdl-textfield__input" type="number" name="vlpg" id="sample3" tabindex="8">
                <label class="mdl-textfield__label" for="sample3" style="color: #5a5a5a; font-size:medium">Valor pago</label>
            </div>
        </div>
        <div class="text-xs-center">
            <button class="btn btn-default" type="submit" name="salvar" style="background-color: #303f9f">Salvar</button>
            <button class="btn btn-default " style="background-color: #303f9f" >Voltar</button>
        </div>
    </form>
    </div>
    <!--Naked Form-->
</main>
<?php include 'rodape.php'; ?>
</div>
</body>
</html>