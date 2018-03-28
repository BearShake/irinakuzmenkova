<?php
/**
 * Created by PhpStorm.
 * User: BearShake
 * Date: 28.03.2018
 * Time: 21:18
 */

include 'SimpleQueryExecute.php';


class languagecontroller {

	private $lg = '';
	private $db = '';
	private $host = 'localhost';
	private $user = 'anton';
	private $password = 'samsung56';
	private $database = 'ik_db';

	function __construct($lang) {
		switch ($lang)
		{
			case 'ru':
				$this->lg = 'ru';
				break;

			case 'lv':
				$this->lg = 'lv';
				break;
		}
		$this->db = new SimpleQueryExecute($this->host, $this->user, $this->password, $this->database);
	}

	function printByTag($tagID){
		switch ($this->lg)
		{
			case 'en':
				//print eng text by tag in param
				return $str = $this->db->SelectWhereQuery('insert_texts','text', $tagID, 'lv');
				break;

			case 'lv':
				//print lv text by tag in param
				return $str = $this->db->SelectWhereQuery('insert_texts','text', $tagID, 'lv');
		}

	}
}

/*<?php
				$coks = $_COOKIE['lang'];
				switch ($coks)
				{
					case 'ru':
						echo "<h2 class=\"handled\"><strong>Ирина</strong> Кузменкова</h2>";
						break;
					case 'lv':
						echo "<h2 class=\"handled\"><strong>Irīna</strong> Kuzmenkova</h2>";
						break;
				}
				?>
*/