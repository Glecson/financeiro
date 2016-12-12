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
       <p><h4>CADASTRO FORNECEDORES</h4></p>
    </div>
</div>
<main class="mdl-layout__content">
    <!--Naked Form-->
    <div class="col-lg-8" style="position: relative; left: 220px; top: 30px;">
    <form method="get">
     <div class="card-block col-lg-4"  >
        <!--Body-->
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="position: relative; left: 50px;">
            <input class="mdl-textfield__input" type="text" name="nome" id="sample3" tabindex="1" required>
            <label class="mdl-textfield__label" for="sample3" style="color: #5a5a5a; font-size:medium">Razão social/Apelido</label>
        </div>
        <br /><br />
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="position: relative; left: 50px;">
            <input class="mdl-textfield__input" type="email" name="email" id="sample3" tabindex="4">
            <label class="mdl-textfield__label" for="sample3" style="color: #5a5a5a; font-size:medium">E-mail</label>
        </div>
        <br /><br />
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="position: relative; left: 50px;">
            <input class="mdl-textfield__input" type="text" name="cidade" id="sample3" tabindex="7" required>
            <label class="mdl-textfield__label" for="sample3" style="color: #5a5a5a; font-size:medium">Cidade</label>
        </div>
    </div>
        <div class="card-block col-lg-4" >
            <!--Body-->
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="position: relative; left: 50px;">
                <input class="mdl-textfield__input" type="number" name="cnpf" id="sample3" tabindex="2" required>
                <label class="mdl-textfield__label" for="sample3" style="color: #5a5a5a; font-size:medium ">CNPJ/CPF</label>
            </div>
            <br /><br />
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="position: relative; left: 50px;">
                <input class="mdl-textfield__input" type="text" name="ender" id="sample3" tabindex="5" required>
                <label class="mdl-textfield__label" for="sample3" style="color: #5a5a5a; font-size:medium">Endereço / Nº</label>
            </div>
            <br /><br />
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="position: relative; top: 20px; left: 80px;">
                <select class="mdb-select colorful-select dropdown-primary" tabindex="8">
                    <option value="" disabled selected >Selecione o estado</option>
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
        </div>
        <div class="card-block col-lg-4" >
            <!--Body-->
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="position: relative; left: 50px;">
                <input class="mdl-textfield__input" type="tel" name="tele" id="sample3" tabindex="3" required>
                <label class="mdl-textfield__label" id=label for="sample3" style="color: #5a5a5a; font-size:medium">Telefone contato</label>
            </div>
            <br /><br />
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="position: relative; left: 50px;">
                <input class="mdl-textfield__input" type="text" name="bairro" id="sample3" tabindex="6">
                <label class="mdl-textfield__label" id=label for="sample3" style="color: #5a5a5a; font-size:medium">Bairro</label>
            </div>
            <br /><br />
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="position: relative; left: 50px;">
                <input class="mdl-textfield__input" type="number" name="cep" id="sample3" tabindex="9">
                <label class="mdl-textfield__label" for="sample3" style="color: #5a5a5a; font-size:medium">CEP</label>
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
