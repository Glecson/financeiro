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

</head>
<body>
<?php include 'menu.php'; ?>
<div class="collapse navbar-toggleable-xs" id="collapseEx2" style="padding-left: 550px">
    <div>
        <p><h2>Cadastro de Fornecedor</h2></p>
    </div>
</div>
<main class="mdl-layout__content">
    <!--Naked Form-->
    <div class="col-lg-8" style="position: relative; left: 220px; top: 30px">
    <form method="get">
    <div class="card-block col-lg-4"  >
        <!--Body-->
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="position: relative; left: 50px;">
            <input class="mdl-textfield__input" type="text" name="nome" id="sample3" tabindex="1">
            <label class="mdl-textfield__label" for="sample3" style="color:#303f9f">Informe o nome</label>
        </div>
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="position: relative; left: 50px;">
            <input class="mdl-textfield__input" type="email" name="email" id="sample3" tabindex="4">
            <label class="mdl-textfield__label" for="sample3" style="color: #303f9f">Informe o e-mail</label>
        </div>
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="position: relative; left: 50px;">
            <input class="mdl-textfield__input" type="text" name="cidade" id="sample3" tabindex="7">
            <label class="mdl-textfield__label" for="sample3" style="color: #303f9f">Informe a cidade</label>
        </div>
    </div>
        <div class="card-block col-lg-4" >
            <!--Body-->
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="position: relative; left: 50px;">
                <input class="mdl-textfield__input" type="text" name="cnpjcpf" id="sample3" tabindex="2">
                <label class="mdl-textfield__label" for="sample3" style="color: #303f9f">Informe o CNPJ/CPF</label>
            </div>
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="position: relative; left: 50px;">
                <input class="mdl-textfield__input" type="text" name="ende" id="sample3" tabindex="5">
                <label class="mdl-textfield__label" for="sample3" style="color: #303f9f">Informe o endereço/numero</label>
            </div>
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="position: relative; left: 50px;">
                <input class="mdl-textfield__input" type="text" name="uf" id="sample3" tabindex="8">
                <label class="mdl-textfield__label" for="sample3" style="color: #303f9f">Informe o estado</label>
            </div>
        </div>
        <div class="card-block col-lg-4" >
            <!--Body-->
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="position: relative; left: 50px;">
                <input class="mdl-textfield__input" type="number" name="telefone" id="sample3" tabindex="3">
                <label class="mdl-textfield__label" for="sample3" style="color: #303f9f">Informe o telefone</label>
            </div>
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="position: relative; left: 50px;">
                <input class="mdl-textfield__input" type="text" name="bairro" id="sample3" tabindex="6">
                <label class="mdl-textfield__label" for="sample3" style="color: #303f9f">Informe o bairro</label>
            </div>
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="position: relative; left: 50px;">
                <input class="mdl-textfield__input" type="number" name="cep" id="sample3" tabindex="9">
                <label class="mdl-textfield__label" for="sample3" style="color: #303f9f">Informe o CEP</label>
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
