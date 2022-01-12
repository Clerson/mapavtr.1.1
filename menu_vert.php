<div class="offcanvas offcanvas-start" id="menu_index">

  <div class="offcanvas-body bg-dark p-0">
    <div class="col bg-dark p-0">
      <nav class="navbar navbar-expand-sm bg-dark navbar-dark p-0">
        <ul class="navbar-nav flex-column">
          <li class="nav-item"><a href="index.php"><img src="img_topo.png" width="100%"  class="bg-white"></a></li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <form class="d-flex">
                <input class="form-control me-2 small" type="text" placeholder="Pesquisar">
                <button class="btn btn-primary" type="button"><i class="fas fa-search"></i></button>
              </form>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php"><i class='fas fa-home'></i> Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="" data-bs-toggle="collapse" data-bs-target="#menumapas"><i class='fas fa-map-marked-alt'></i>&nbsp;Mapas</a>
              <div id="menumapas" class="collapse">
                <nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top p-0">
                  <ul class="navbar-nav flex-column">
                    <li class="nav-item"><a href="?page=mapas&acao=view" class="nav-link"><i class="fas fa-home"></i> Index</a></li>
                    <li class="nav-item"><a href="?page=mapas&acao=insert" class="nav-link"><i class="fas fa-plus-circle"></i> Novo</a></li>
                  </ul>
                </nav>

                <?php include "mapas/mapas_lista_vert.php"; ?></div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link" href="?page=vtr&acao=view&view=sint"><i class='fas fa-ambulance'></i> Veículos</a>


<!--             <a class="nav-link" href="?page=mapas" data-bs-toggle="collapse" data-bs-target="#veiculos"><i class="fas fa-ambulance"></i> Veículos</a>
              <div id="veiculos" class="collapse"><?php // include "veiculos/veiculos_lista_vert.php";?></div> -->
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?page=pessoas"><i class='fas fa-users'></i> Pessoas</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><i class='far fa-file-alt'></i> Relatórios</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><i class='fas fa-phone'></i> Contatos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><i class='fas fa-globe-americas'></i> Links úteis</a>
          </li>
        </ul>
    </nav>

  </div>
  </div>
</div>