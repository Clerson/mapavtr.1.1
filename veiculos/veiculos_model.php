<?php
$acao = $vtrid = $vtrpref = $vtrtipo = $vtrmarcamod = $vtrano = $vtrstatus = "";

if (isset($_GET['acao'])) {

	if (($_GET['acao']) == 'view') { 
	
		

			if(isset($_GET['view'])) {

				if($_GET['view'] == 'filter') { 
				$vtrid = $_GET['vtrid'];
				$sql_vtr = "SELECT * FROM vtr WHERE vtrid = $vtrid"; // LISTA DE VEÍCULOS com filtro
				}

				if($_GET['view'] == 'sint') { 
				$sql_vtr = "SELECT * FROM vtr WHERE vtrstatus = 'ativa'";
				}

			}

	}

		if ($_GET['acao'] == 'insert') { // LISTA DE VEÍCULOS

			$sql_vtr = "SELECT vtrid, vtrtipo FROM vtr WHERE vtrstatus = 'ativa'";

			if (isset($_GET['filter'])) {

				$filter = $_GET['filter'];

				if (($_GET['filter']) == 'vtrid') {

					if (isset($_GET['idvtr'])) {
						
						$idvtr = $_GET['idvtr']; 
			            $sql_vtr = "SELECT vtrid, vtrtipo FROM vtr WHERE vtrid=$idvtr";
			            
					}
				;}

				if (($_GET['filter']) == 'vtrtipo') {

					if(isset($_GET['vtrtipo'])) {

			            $vtrtipo =  $_GET['vtrtipo'];  
			            $sql_vtr = "SELECT vtrtipo FROM vtr WHERE vtrtipo='$vtrtipo'";
		            
		            }


				;}

			;}	

		;}



		if (($_GET['acao']) == 'update') { // LISTA DE VEÍCULOS
	
			$sql_vtr = "SELECT * FROM vtr";

			if (isset($_GET['iddetmp']) ) { 

				$iddetmp = $_GET['iddetmp']; 
                $sql_vtr = "SELECT * FROM detmapa, vtr WHERE iddetmp=$iddetmp AND vtrid=idvtr";
			}


		}

		$result_vtr = mysqli_query($conn, $sql_vtr);
		$row_vtr = mysqli_fetch_assoc($result_vtr);

}


