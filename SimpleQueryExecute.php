<?php
/**
 * Created by PhpStorm.
 * User: BearShake
 * Date: 28.03.2018
 * Time: 20:38
 */

class SimpleQueryExecute {
	private $con;

	public function __construct( $host, $user, $password, $database ) {

		$this->con = new \mysqli( $host, $user, $password, $database );

		if ( $this->con->connect_error ) {
			die( "Connection failed: " . $this->con->connect_error );
		}
	}

//table - ik_db
//col - text(column)
//where - text = tag
	public function SelectWhereQuery( $table, $col, $where, $where1 ) {
		if ( empty( $table ) || empty( $col ) ) {
			echo "func param error";
		} else {
			$sql = "SELECT " . $col . " FROM '" . $table . "' WHERE tag = '" . $where . "' AND lang = '" . $where1 ."'";
			$result = $this->con->query( $sql );
			echo $this->con->error;
			if ( $result->num_rows > 0 ) {
				$row = $result->fetch_assoc();
				$str = $col . " " . $row[ $col ] . "<br>";

				return $str;
			} else {
				//echo "0 rows";
				return '';
			}
		}
	}


	public function closeCon() {
		$this->con->close();
	}

}
