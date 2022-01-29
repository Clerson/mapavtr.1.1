<?php include_once "../templates/header.php";?>  

  <li class="nav-item me-2">
    <form  action="" method="POST" class="d-flex">
      <input class="form-control me-2" type="date" name="fdata">
      <button class="btn btn-primary d-flex align-middle"  type="submit" name="submit"><i class='fa fa-filter'></i></button>
    </form>
  </li>

  <li class="nav-item me-2">
    <span class="btn btn-light">Número de mapas: <b><?=mysqli_num_rows($result)?></b></span>
  </li> 
</ul>
</nav>
</div>  

<div class="row p-1 rounded-3 bg-light">  