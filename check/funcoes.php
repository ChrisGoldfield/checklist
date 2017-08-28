<?php 

		$titulo = 'Check List';

		function MontaCss(){

				$css  = array('<link rel="stylesheet" href="/check/assets/css/bootstrap.min.css">',
								'<link rel="stylesheet" href="/check/assets/css/styles.css">');

				$tamanho = sizeof($css);
				$tamanho = $tamanho-1;

				foreach ($css as $link => $value){
					if ($value <= $tamanho) {
						echo $value."\n\t";
					} 
				}
			}

		function MontaJs(){

			$js = array('<script src="/check/assets/js/bootstrap.min.js"></script>');

			foreach ($js as $link => $value) {
				echo $value."\n\t";		
			}

		}

		function Horarios(){

			$dropdown = ' <select >
							  <option value="10:00">10:00</option>
							  <option value="10:00">10:00</option>
							  <option value="10:00">10:00</option>
							  <option value="10:00">10:00</option>
							</select>';

			echo $dropdown;



		}

		function MontaMenu()
		{
		$menu = '<nav class="navbar navbar-inverse">
				  <div class="container-fluid">
				    <div class="navbar-header">
				      <a class="navbar-brand" href="#">CheckList</a>
				    </div>
				    <ul class="nav navbar-nav">
				      <li class="active href="#">Home</a></li>
				      <li><a href="/check/cielo.php">Cielo</a></li>
				      <li><a href="/check/carrefour.php">Carrefour</a></li>
				      <li><a href="/check/clientis.php">Clientis</a></li>
				    </ul>
				  </div>
				</nav>';

		echo $menu;
		}
?>
