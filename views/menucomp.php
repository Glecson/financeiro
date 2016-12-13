<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header
            mdl-layout--fixed-tabs">
  <header class="mdl-layout__header #303f9f indigo darken-3">
    <div class="mdl-layout__header-row">
      <!-- Title -->
      <a href="tabelas.php"><span class="mdl-layout-title white-text">GERENCIADORFINANCEIRO</span></a>
    </div>

  </header>
        <div class="demo-drawer mdl-layout__drawer elegant-color
#2E2E2E mdl-color-text--blue-grey-50">
            <header class="demo-drawer-header">
                <div class="demo-avatar-dropdown" style="position: relative; left: 35px; top: 5px; padding-bottom: 10px">
                    <span><?php echo 'Bem vindo, '. $_SESSION['login']; ?></span>
                    <button id="accbtn" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
                        <i class="material-icons" role="presentation">arrow_drop_down</i>
                        <span class="visuallyhidden">Accounts</span>
                    </button>
                    <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" for="accbtn">
                        <li class="mdl-menu__item"><i class="fa fa-user"> </i> Perfil</li>
                        <li class="mdl-menu__item"><a href="?logouf"><i class="fa fa-sign-out"> </i> Logouf</a></li>
                    </ul>
                </div>
            </header>
            <nav class="demo-navigation mdl-navigation ">
                <a class="mdl-navigation__link mdl-color-text--blue-grey-400" href="../views/tabelas.php"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">home</i>Principal</a>
                <a class="mdl-navigation__link mdl-color-text--blue-grey-400" href="../views/fornecedores.php"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">shopping_cart</i>Fornecedores</a>
                <a class="mdl-navigation__link mdl-color-text--blue-grey-400" href="../views/usuarios.php"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">supervisor_account</i>Usuários</a>
                <a class="mdl-navigation__link mdl-color-text--blue-grey-400" href="../views/categorias.php"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">payment</i>Categorias</a>
            </nav>
        </div>