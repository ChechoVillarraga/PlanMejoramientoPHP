<?php
/**
 * Class that operate on table 'tags'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2016-12-06 20:53
 */
class TagsPgDAO implements TagsDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return TagsMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM tags WHERE idTags = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM tags';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM tags ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param tag primary key
 	 */
	public function delete($idTags){
		$sql = 'DELETE FROM tags WHERE idTags = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($idTags);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param TagsMySql tag
 	 */
	public function insert($tag){
		$sql = 'INSERT INTO tags (Tags, descripcionTags) VALUES (?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($tag->tags);
		$sqlQuery->set($tag->descripcionTags);

		$id = $this->executeInsert($sqlQuery);	
		$tag->idTags = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param TagsMySql tag
 	 */
	public function update($tag){
		$sql = 'UPDATE tags SET Tags = ?, descripcionTags = ? WHERE idTags = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($tag->tags);
		$sqlQuery->set($tag->descripcionTags);

		$sqlQuery->setNumber($tag->idTags);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM tags';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByTags($value){
		$sql = 'SELECT * FROM tags WHERE Tags = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByDescripcionTags($value){
		$sql = 'SELECT * FROM tags WHERE descripcionTags = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByTags($value){
		$sql = 'DELETE FROM tags WHERE Tags = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByDescripcionTags($value){
		$sql = 'DELETE FROM tags WHERE descripcionTags = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return TagsMySql 
	 */
	protected function readRow($row){
		$tag = new Tag();
		
		$tag->idTags = $row['idTags'];
		$tag->tags = $row['Tags'];
		$tag->descripcionTags = $row['descripcionTags'];

		return $tag;
	}
	
	protected function getList($sqlQuery){
		$tab = QueryExecutor::execute($sqlQuery);
		$ret = array();
		for($i=0;$i<count($tab);$i++){
			$ret[$i] = $this->readRow($tab[$i]);
		}
		return $ret;
	}
	
	/**
	 * Get row
	 *
	 * @return TagsMySql 
	 */
	protected function getRow($sqlQuery){
		$tab = QueryExecutor::execute($sqlQuery);
		if(count($tab)==0){
			return null;
		}
		return $this->readRow($tab[0]);		
	}
	
	/**
	 * Execute sql query
	 */
	protected function execute($sqlQuery){
		return QueryExecutor::execute($sqlQuery);
	}
	
		
	/**
	 * Execute sql query
	 */
	protected function executeUpdate($sqlQuery){
		return QueryExecutor::executeUpdate($sqlQuery);
	}

	/**
	 * Query for one row and one column
	 */
	protected function querySingleResult($sqlQuery){
		return QueryExecutor::queryForString($sqlQuery);
	}

	/**
	 * Insert row to table
	 */
	protected function executeInsert($sqlQuery){
		return QueryExecutor::executeInsert($sqlQuery);
	}
}
?>