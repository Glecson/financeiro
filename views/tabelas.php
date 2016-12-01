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
  <header class="mdl-layout__header" style="background-color: #455a64">
    <div class="mdl-layout__header-row">
      <!-- Title -->
      <span class="mdl-layout-title">GERENCIADORFINANCEIRO</span>

    </div>
    <!-- Tabs -->

    <div class="mdl-layout__tab-bar mdl-js-ripple-effect" style="background-color: #455a64">
      <a href="#fixed-tab-1" class="mdl-layout__tab is-active">Todas as Faturas</a>
      <a href="#fixed-tab-2" class="mdl-layout__tab">Faturas à Pagar</a>
      <a href="#fixed-tab-3" class="mdl-layout__tab">Faturas à vencer</a>
      <a href="#fixed-tab-3" class="mdl-layout__tab">Faturas Pagas</a>
    </div>
  </header>

        <nav class="navbar navbar-dark">

            <div class="container">
                <!--Collapse content-->
                <div class="collapse navbar-toggleable-xs" id="collapseEx2">
                    <!--Search form-->
                    <form class="form-inline">
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable
                  mdl-textfield--floating-label mdl-textfield--align-right">
                            <label class="mdl-button mdl-js-button mdl-button--icon"
                                   for="fixed-header-drawer-exp">
                                <i class="material-icons">search</i>
                            </label>
                            <div class="mdl-textfield__expandable-holder">
                                <input class="mdl-textfield__input" type="text" name="sample"
                                       id="fixed-header-drawer-exp">
                            </div>
                            </div>
                    </form>
                </div>
                <!--/.Collapse content-->
            </div>

        </nav>
        <!--/.Navbar-->
        <div class="demo-drawer mdl-layout__drawer mdl-color--blue-grey-900 mdl-color-text--blue-grey-50">
            <header class="demo-drawer-header">

                <div class="demo-avatar-dropdown" style="position: relative; left: 15px; top: 5px; padding-bottom: 10px">
                    <span>hello@example.com</span>

                    <button id="accbtn" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
                        <i class="material-icons" role="presentation">arrow_drop_down</i>
                        <span class="visuallyhidden">Accounts</span>
                    </button>
                    <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" for="accbtn">
                        <li class="mdl-menu__item">hello@example.com</li>
                        <li class="mdl-menu__item">info@example.com</li>
                        <li class="mdl-menu__item"><i class="material-icons">add</i>Add another account...</li>
                    </ul>
                </div>
            </header>
            <nav class="demo-navigation mdl-navigation mdl-color--blue-grey-800">
                <a class="mdl-navigation__link mdl-color-text--white" href=""><i class="mdl-color-text--white material-icons" role="presentation">home</i>Home</a>
                <a class="mdl-navigation__link" href=""><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">inbox</i>Inbox</a>
                <a class="mdl-navigation__link" href=""><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">delete</i>Trash</a>
                <a class="mdl-navigation__link" href=""><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">report</i>Spam</a>
                <a class="mdl-navigation__link" href=""><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">forum</i>Forums</a>
                <a class="mdl-navigation__link" href=""><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">flag</i>Updates</a>
                <a class="mdl-navigation__link" href=""><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">local_offer</i>Promos</a>
                <a class="mdl-navigation__link" href=""><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">shopping_cart</i>Purchases</a>

            </nav>
        </div>

  <main class="mdl-layout__content">
    <section class="mdl-layout__tab-panel is-active" id="fixed-tab-1">
      <div class="page-content">
            <div class="row">
                <div class="col-md-12" style="padding-left: 100px">

                    <table class="table">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Username</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Abby</td>
                            <td>Barrett</td>
                            <td>@abbeme</td>
                            <td>
                                <a class="blue-text"><i class="fa fa-eye"></i></a>
                                <a class="teal-text"><i class="fa fa-pencil"></i></a>
                                <a class="red-text"><i class="fa fa-times"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Danny</td>
                            <td>Collins</td>
                            <td>@dennis</td>
                            <td>
                                <a class="blue-text"><i class="fa fa-eye"></i></a>
                                <a class="teal-text"><i class="fa fa-pencil"></i></a>
                                <a class="red-text"><i class="fa fa-times"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Clara</td>
                            <td>Ericson</td>
                            <td>@claris</td>
                            <td>
                                <a class="blue-text"><i class="fa fa-eye"></i></a>
                                <a class="teal-text"><i class="fa fa-pencil"></i></a>
                                <a class="red-text"><i class="fa fa-times"></i></a>
                            </td>
                        </tr>

                        </tbody>
                    </table>

                </div>
            </div>
      </div>
    </section>
    <section class="mdl-layout__tab-panel" id="fixed-tab-2">
      <div class="page-content"><!-- Your content goes here --></div>
    </section>
    <section class="mdl-layout__tab-panel" id="fixed-tab-3">
      <div class="page-content"><!-- Your content goes here --></div>
    </section>
  </main>
        <footer>
            <!--Copyright-->
            <div class="footer-copyright">
                <div class="container-fluid">
                    © 2015 Copyright: <a href="http://www.MDBootstrap.com"> Gerenciador Financeiro</a>

                </div>
            </div>
            <!--/.Copyright-->
        </footer>
    </div>
</body>
</html>