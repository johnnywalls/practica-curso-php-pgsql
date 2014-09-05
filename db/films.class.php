<?php
require_once("database.class.php");
class Films {
	private $con;
	public function __construct() {
		//en $this->con tenemos la conexión con la bd pruebas
		$this->con = new Database();
	}

	// consultar
	public function buscarPeliculas(array $args) {
		$condiciones = array();
		$limit = array();
		// verificar condiciones para filtros de búsqueda
		if ( !empty($args['actor']) ) {
			$condiciones[] = array(
				'param' => ':actor',
				'where' => "UPPER(actors) LIKE :actor",
				'value' => '%'. strtoupper($args['actor']) .'%',
			);
		}
		if ( !empty($args['titulo']) ) {
			$condiciones[] = array(
				'param' => ':titulo',
				'where' => "UPPER(title) LIKE :titulo",
				'value' => '%'. strtoupper($args['titulo']) .'%',
			);
		}
		if ( !empty($args['descripcion']) ) {
			$condiciones[] = array(
				'param' => ':descripcion',
				'where' => "UPPER(description) LIKE :descripcion",
				'value' => '%'. strtoupper($args['descripcion']) .'%',
			);
		}
		if ( !empty($args['categoria']) ) {
			$condiciones[] = array(
				'param' => ':categoria',
				'where' => "UPPER(categorias) LIKE :categoria",
				'value' => '%'. strtoupper($args['categoria']) .'%',
			);
		}
		// verificar parámetros de paginación
		$pagina = 1;
		$filas = 25;
		if ( !empty($args['filas']) ) {
			$filas = $args['filas'];
		}
		if ( !empty($args['pagina']) ) {
			$pagina = $args['pagina'];
		}
		$offset = 0;
		if ( $pagina > 1 ) {
			$offset = ($pagina-1) * $filas;
		}
		$limit[] = array(
			'param' => ':filas',
			'sql' => " LIMIT :filas",
			'value' => $filas,
		);
		$limit[] = array(
			'param' => ':offset',
			'sql' => " OFFSET :offset",
			'value' => $offset,
		);
		try {
			$sql = 'SELECT film_id, title, description, actors, categories FROM films_search ';
			$sqlCount = 'SELECT count(*) FROM films_search ';
			if ( count($condiciones) > 0 ) {
				$where = ' WHERE ' . join(' AND ', array_column($condiciones, 'where') );
				$sql .= $where;
				$sqlCount .= $where;
			}
			
			if ( count($limit) > 0 ) {
				$sql .= join(' ', array_column( $limit, 'sql' ) );
			}
			//print_r($sql);
			$query = $this->con->prepare($sql);
			$queryCount = $this->con->prepare($sqlCount);
			foreach ($condiciones as $cond) {
				$query->bindParam( $cond['param'], $cond['value'], PDO::PARAM_STR);
				$queryCount->bindParam( $cond['param'], $cond['value'], PDO::PARAM_STR);
			}
			foreach ($limit as $lim) {
				$query->bindParam( $lim['param'], $lim['value'], PDO::PARAM_INT);
			}
			$query->execute();
			$queryCount->execute();

			$results = $query->fetchAll();
			$count = $queryCount->fetch(PDO::FETCH_NUM);
			$this->con->close_con();
			$total_count = $count[0];
			$proxima = NULL;
			$anterior = $pagina - 1;
			if ( $offset + $filas < $total_count ) {
				$proxima = $pagina + 1;
			}
			if ( $pagina == 1 ) {
				$anterior = NULL;
			}
			return array( 'results' => $results, 'total_count' => $total_count, 'current_page' => $pagina, 'next_page' => $proxima, 'previous_page' => $anterior );
		} catch(PDOException $e) {
			echo $e->getMessage();
		}
	}
	
	public function detallePelicula( $id ) {
		try {
			$sql = 'SELECT * FROM film_detail WHERE film_id = ?';
			$query = $this->con->prepare($sql);
			$query->bindParam( 1, $id, PDO::PARAM_INT);
			$query->execute();
			$result = $query->fetch(PDO::FETCH_ASSOC);
			return $result;
		} catch(PDOException $e) {
			echo $e->getMessage();
		}
	}

}