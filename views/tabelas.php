<?php

    include_once '../config.php';
    session_start();

    $c = new Controller();

    if(!$c->verificaLogin()){
        header('Location: ../index.php');
        exit;
    }


    $c->logouf();


?>

<!DOCTYPE html>
<html lang="pt-br" xmlns="http://www.w3.org/1999/html">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>Material Design Bootstrap</title>

    <script src="https://code.getmdl.io/1.2.1/material.min.js"></script>
    
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
	<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header
            mdl-layout--fixed-tabs">
  <header class="mdl-layout__header #303f9f indigo darken-3">
    <div class="mdl-layout__header-row">
      <!-- Title -->
      <a href="tabelas.php"><span class="mdl-layout-title white-text">GERENCIADORFINANCEIRO</span></a>

    </div>
    <!-- Tabs -->

    <div class="mdl-layout__tab-bar mdl-js-ripple-effect #303f9f indigo darken-4">
      <a href="#fixed-tab-1" class="mdl-layout__tab is-active">Todas as Faturas</a>
      <a href="#fixed-tab-2" class="mdl-layout__tab">Faturas abertas</a>
      <a href="#fixed-tab-3" class="mdl-layout__tab">Faturas à Pagar</a>
      <a href="#fixed-tab-3" class="mdl-layout__tab">Faturas Pagas</a>
    </div>
  </header>

                <!--Collapse content-->
                <div class="collapse navbar-toggleable-xs" id="collapseEx2" style="padding-left: 330px">
                    <div class="md-form col-md-3" style="position: relative; left: -280px;top: 10px;">
                        <a href="cadfatura.php" class="btn btn-primary waves-effect waves-light #303f9f indigo darken-4  "><i class="fa fa-plus" ></i>  Fatura</a>
                    </div>
                    <div class="md-form col-md-2">
                        <input type="text" id="form1" class="form-control" placeholder="Total">
                        <label for="form1" class=""></label>
                    </div>
                    <!--Search form-->
                    <form method="get" class="form-inline" style="position: relative; left: 350px">
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable
                  mdl-textfield--floating-label mdl-textfield--align-right">
                            <label class="mdl-button mdl-js-button mdl-button--icon"
                                   for="fixed-header-drawer-exp">
                                <i class="material-icons">search</i>
                            </label>
                            <div class="mdl-textfield__expandable-holder">
                                <input class="mdl-textfield__input" type="text" name="busca"
                                       id="fixed-header-drawer-exp">
                            </div>
                            </div>
                    </form>
                </div>
                <!--/.Collapse content-->

        <?php include 'menulateral.php'; ?>

  <main class="mdl-layout__content">
    <section class="mdl-layout__tab-panel is-active" id="fixed-tab-1">
      <div class="page-content">
            <div class="row">
                <div class="col-md-12" style="padding-left: 100px">

                    <table class="table">
                        <thead>
                        <tr>
                            <th>Status</th>
                            <th>Num</th>
                            <th>Vencimento</th>
                            <th>Fornecedor</th>
                            <th>Valor</th>
                            <th>Desconto</th>
                            <th>Pago</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>First Name</td>
                            <td>First Name</td>
                            <td>Abby</td>
                            <td>Barrett</td>
                            <td>@abbeme</td>
                            <td>Barrett</td>
                            <td>@abbeme</td>
                            <td>
                                <a class="blue-text"><div id="tt1" class="icon material-icons">visibility</div>
                                    <div class="mdl-tooltip" data-mdl-for="tt1"><strong>Visualizar</strong>
                                    </div>
                                </a>
                                <a class="green-text"><div id="tt2" class="icon material-icons">border_color</div>
                                    <div class="mdl-tooltip" data-mdl-for="tt2"><strong>Editar</strong>
                                    </div>
                                </a>
                                <a class="red-text"><div id="tt3" class="icon material-icons">delete_sweep</div>
                                    <div class="mdl-tooltip" data-mdl-for="tt3"><strong>Deletar</strong>
                                    </div>
                                </a>
                                <a class="black-text"><div id="tt4" class="icon material-icons">picture_as_pdf</div>
                                    <div class="mdl-tooltip" data-mdl-for="tt4"><strong>Gerar PDF</strong>
                                    </div>
                                </a>
                            </td>
                        </tr>
                        </tbody>
                    </table>

                </div>
            </div>
      </div>
    </section>
    <section class="mdl-layout__tab-panel" id="fixed-tab-2">
      <div class="page-content">
          <div class="row">
              <div class="col-md-12" style="padding-left: 100px">

                  <table class="table">
                      <thead>
                      <tr>
                          <th>Status</th>
                          <th>Num</th>
                          <th>Vencimento</th>
                          <th>Fornecedor</th>
                          <th>Valor</th>
                          <th>Desconto</th>
                          <th>Pago</th>
                          <th>Actions</th>
                      </tr>
                      </thead>
                      <tbody>
                      <tr>
                          <td>First Name</td>
                          <td>First Name</td>
                          <td>Abby</td>
                          <td>Barrett</td>
                          <td>@abbeme</td>
                          <td>Barrett</td>
                          <td>@abbeme</td>
                          <td>
                              <a class="blue-text"><div id="tt1" class="icon material-icons">visibility</div>
                                  <div class="mdl-tooltip" data-mdl-for="tt1"><strong>Visualizar</strong>
                                  </div>
                              </a>
                              <a class="green-text"><div id="tt2" class="icon material-icons">border_color</div>
                                  <div class="mdl-tooltip" data-mdl-for="tt2"><strong>Editar</strong>
                                  </div>
                              </a>
                              <a class="red-text"><div id="tt3" class="icon material-icons">delete_sweep</div>
                                  <div class="mdl-tooltip" data-mdl-for="tt3"><strong>Deletar</strong>
                                  </div>
                              </a>
                              <a class="black-text"><div id="tt4" class="icon material-icons">picture_as_pdf</div>
                                  <div class="mdl-tooltip" data-mdl-for="tt4"><strong>Gerar PDF</strong>
                                  </div>
                              </a>
                          </td>
                      </tr>
                      </tbody>
                  </table>

              </div>
          </div>
      </div>
    </section>
    <section class="mdl-layout__tab-panel" id="fixed-tab-3">
      <div class="page-content">
          <div class="row">
              <div class="col-md-12" style="padding-left: 100px">

                  <table class="table">
                      <thead>
                      <tr>
                          <th>Status</th>
                          <th>Num</th>
                          <th>Vencimento</th>
                          <th>Fornecedor</th>
                          <th>Valor</th>
                          <th>Desconto</th>
                          <th>Pago</th>
                          <th>Actions</th>
                      </tr>
                      </thead>
                      <tbody>
                      <tr>
                          <td>First Name</td>
                          <td>First Name</td>
                          <td>Abby</td>
                          <td>Barrett</td>
                          <td>@abbeme</td>
                          <td>Barrett</td>
                          <td>@abbeme</td>
                          <td>
                              <a class="blue-text"><div id="tt1" class="icon material-icons">visibility</div>
                                  <div class="mdl-tooltip" data-mdl-for="tt1"><strong>Visualizar</strong>
                                  </div>
                              </a>
                              <a class="green-text"><div id="tt2" class="icon material-icons">border_color</div>
                                  <div class="mdl-tooltip" data-mdl-for="tt2"><strong>Editar</strong>
                                  </div>
                              </a>
                              <a class="red-text"><div id="tt3" class="icon material-icons">delete_sweep</div>
                                  <div class="mdl-tooltip" data-mdl-for="tt3"><strong>Deletar</strong>
                                  </div>
                              </a>
                              <a class="black-text"><div id="tt4" class="icon material-icons">picture_as_pdf</div>
                                  <div class="mdl-tooltip" data-mdl-for="tt4"><strong>Gerar PDF</strong>
                                  </div>
                              </a>
                          </td>
                      </tr>
                      </tbody>
                  </table>

              </div>
          </div>
      </div>
    </section>
  </main>
    <?php include 'rodape.php'; ?>
    </div>
</body>
</html>