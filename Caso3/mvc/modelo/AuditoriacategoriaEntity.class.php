<?php

/**
 * 
 *
 * @version 1.105
 * @package entity
 */
class AuditoriacategoriaEntity extends Db2PhpEntityBase implements Db2PhpEntityModificationTracking {
	private static $CLASS_NAME='AuditoriacategoriaEntity';
	const SQL_IDENTIFIER_QUOTE='`';
	const SQL_TABLE_NAME='auditoriacategoria';
	const SQL_INSERT='INSERT INTO `auditoriacategoria` (`idauditoriacategoria`,`nombrecategoria`,`fecharegistro`,`nombrepersona`,`idpersona`) VALUES (?,?,?,?,?)';
	const SQL_INSERT_AUTOINCREMENT='INSERT INTO `auditoriacategoria` (`nombrecategoria`,`fecharegistro`,`nombrepersona`,`idpersona`) VALUES (?,?,?,?)';
	const SQL_UPDATE='UPDATE `auditoriacategoria` SET `idauditoriacategoria`=?,`nombrecategoria`=?,`fecharegistro`=?,`nombrepersona`=?,`idpersona`=? WHERE `idauditoriacategoria`=?';
	const SQL_SELECT_PK='SELECT * FROM `auditoriacategoria` WHERE `idauditoriacategoria`=?';
	const SQL_DELETE_PK='DELETE FROM `auditoriacategoria` WHERE `idauditoriacategoria`=?';
	const FIELD_IDAUDITORIACATEGORIA=1563239849;
	const FIELD_NOMBRECATEGORIA=1348996345;
	const FIELD_FECHAREGISTRO=-1785560097;
	const FIELD_NOMBREPERSONA=1122448626;
	const FIELD_IDPERSONA=613361376;
	private static $PRIMARY_KEYS=array(self::FIELD_IDAUDITORIACATEGORIA);
	private static $AUTOINCREMENT_FIELDS=array(self::FIELD_IDAUDITORIACATEGORIA);
	private static $FIELD_NAMES=array(
		self::FIELD_IDAUDITORIACATEGORIA=>'idauditoriacategoria',
		self::FIELD_NOMBRECATEGORIA=>'nombrecategoria',
		self::FIELD_FECHAREGISTRO=>'fecharegistro',
		self::FIELD_NOMBREPERSONA=>'nombrepersona',
		self::FIELD_IDPERSONA=>'idpersona');
	private static $PROPERTY_NAMES=array(
		self::FIELD_IDAUDITORIACATEGORIA=>'idauditoriacategoria',
		self::FIELD_NOMBRECATEGORIA=>'nombrecategoria',
		self::FIELD_FECHAREGISTRO=>'fecharegistro',
		self::FIELD_NOMBREPERSONA=>'nombrepersona',
		self::FIELD_IDPERSONA=>'idpersona');
	private static $PROPERTY_TYPES=array(
		self::FIELD_IDAUDITORIACATEGORIA=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_NOMBRECATEGORIA=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_FECHAREGISTRO=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_NOMBREPERSONA=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_IDPERSONA=>Db2PhpEntity::PHP_TYPE_INT);
	private static $FIELD_TYPES=array(
		self::FIELD_IDAUDITORIACATEGORIA=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,false),
		self::FIELD_NOMBRECATEGORIA=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,45,0,true),
		self::FIELD_FECHAREGISTRO=>array(Db2PhpEntity::JDBC_TYPE_DATE,13,0,true),
		self::FIELD_NOMBREPERSONA=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,45,0,true),
		self::FIELD_IDPERSONA=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,true));
	private static $DEFAULT_VALUES=array(
		self::FIELD_IDAUDITORIACATEGORIA=>null,
		self::FIELD_NOMBRECATEGORIA=>null,
		self::FIELD_FECHAREGISTRO=>null,
		self::FIELD_NOMBREPERSONA=>null,
		self::FIELD_IDPERSONA=>null);
	private $idauditoriacategoria;
	private $nombrecategoria;
	private $fecharegistro;
	private $nombrepersona;
	private $idpersona;

	/**
	 * set value for idauditoriacategoria 
	 *
	 * type:serial,size:10,default:nextval('auditoriacategoria_idauditoriacategoria_seq'::regclass),primary,unique,autoincrement
	 *
	 * @param mixed $idauditoriacategoria
	 * @return AuditoriacategoriaEntity
	 */
	public function &setIdauditoriacategoria($idauditoriacategoria) {
		$this->notifyChanged(self::FIELD_IDAUDITORIACATEGORIA,$this->idauditoriacategoria,$idauditoriacategoria);
		$this->idauditoriacategoria=$idauditoriacategoria;
		return $this;
	}

	/**
	 * get value for idauditoriacategoria 
	 *
	 * type:serial,size:10,default:nextval('auditoriacategoria_idauditoriacategoria_seq'::regclass),primary,unique,autoincrement
	 *
	 * @return mixed
	 */
	public function getIdauditoriacategoria() {
		return $this->idauditoriacategoria;
	}

	/**
	 * set value for nombrecategoria 
	 *
	 * type:varchar,size:45,default:null,nullable
	 *
	 * @param mixed $nombrecategoria
	 * @return AuditoriacategoriaEntity
	 */
	public function &setNombrecategoria($nombrecategoria) {
		$this->notifyChanged(self::FIELD_NOMBRECATEGORIA,$this->nombrecategoria,$nombrecategoria);
		$this->nombrecategoria=$nombrecategoria;
		return $this;
	}

	/**
	 * get value for nombrecategoria 
	 *
	 * type:varchar,size:45,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getNombrecategoria() {
		return $this->nombrecategoria;
	}

	/**
	 * set value for fecharegistro 
	 *
	 * type:date,size:13,default:null,nullable
	 *
	 * @param mixed $fecharegistro
	 * @return AuditoriacategoriaEntity
	 */
	public function &setFecharegistro($fecharegistro) {
		$this->notifyChanged(self::FIELD_FECHAREGISTRO,$this->fecharegistro,$fecharegistro);
		$this->fecharegistro=$fecharegistro;
		return $this;
	}

	/**
	 * get value for fecharegistro 
	 *
	 * type:date,size:13,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getFecharegistro() {
		return $this->fecharegistro;
	}

	/**
	 * set value for nombrepersona 
	 *
	 * type:varchar,size:45,default:null,nullable
	 *
	 * @param mixed $nombrepersona
	 * @return AuditoriacategoriaEntity
	 */
	public function &setNombrepersona($nombrepersona) {
		$this->notifyChanged(self::FIELD_NOMBREPERSONA,$this->nombrepersona,$nombrepersona);
		$this->nombrepersona=$nombrepersona;
		return $this;
	}

	/**
	 * get value for nombrepersona 
	 *
	 * type:varchar,size:45,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getNombrepersona() {
		return $this->nombrepersona;
	}

	/**
	 * set value for idpersona 
	 *
	 * type:int4,size:10,default:null,nullable
	 *
	 * @param mixed $idpersona
	 * @return AuditoriacategoriaEntity
	 */
	public function &setIdpersona($idpersona) {
		$this->notifyChanged(self::FIELD_IDPERSONA,$this->idpersona,$idpersona);
		$this->idpersona=$idpersona;
		return $this;
	}

	/**
	 * get value for idpersona 
	 *
	 * type:int4,size:10,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getIdpersona() {
		return $this->idpersona;
	}

	/**
	 * Get table name
	 *
	 * @return string
	 */
	public static function getTableName() {
		return self::SQL_TABLE_NAME;
	}

	/**
	 * Get array with field id as index and field name as value
	 *
	 * @return array
	 */
	public static function getFieldNames() {
		return self::$FIELD_NAMES;
	}

	/**
	 * Get array with field id as index and property name as value
	 *
	 * @return array
	 */
	public static function getPropertyNames() {
		return self::$PROPERTY_NAMES;
	}

	/**
	 * get the field name for the passed field id.
	 *
	 * @param int $fieldId
	 * @param bool $fullyQualifiedName true if field name should be qualified by table name
	 * @return string field name for the passed field id, null if the field doesn't exist
	 */
	public static function getFieldNameByFieldId($fieldId, $fullyQualifiedName=true) {
		if (!array_key_exists($fieldId, self::$FIELD_NAMES)) {
			return null;
		}
		$fieldName=self::SQL_IDENTIFIER_QUOTE . self::$FIELD_NAMES[$fieldId] . self::SQL_IDENTIFIER_QUOTE;
		if ($fullyQualifiedName) {
			return self::SQL_IDENTIFIER_QUOTE . self::SQL_TABLE_NAME . self::SQL_IDENTIFIER_QUOTE . '.' . $fieldName;
		}
		return $fieldName;
	}

	/**
	 * Get array with field ids of identifiers
	 *
	 * @return array
	 */
	public static function getIdentifierFields() {
		return self::$PRIMARY_KEYS;
	}

	/**
	 * Get array with field ids of autoincrement fields
	 *
	 * @return array
	 */
	public static function getAutoincrementFields() {
		return self::$AUTOINCREMENT_FIELDS;
	}

	/**
	 * Get array with field id as index and property type as value
	 *
	 * @return array
	 */
	public static function getPropertyTypes() {
		return self::$PROPERTY_TYPES;
	}

	/**
	 * Get array with field id as index and field type as value
	 *
	 * @return array
	 */
	public static function getFieldTypes() {
		return self::$FIELD_TYPES;
	}

	/**
	 * Assign default values according to table
	 * 
	 */
	public function assignDefaultValues() {
		$this->assignByArray(self::$DEFAULT_VALUES);
	}


	/**
	 * return hash with the field name as index and the field value as value.
	 *
	 * @return array
	 */
	public function toHash() {
		$array=$this->toArray();
		$hash=array();
		foreach ($array as $fieldId=>$value) {
			$hash[self::$FIELD_NAMES[$fieldId]]=$value;
		}
		return $hash;
	}

	/**
	 * return array with the field id as index and the field value as value.
	 *
	 * @return array
	 */
	public function toArray() {
		return array(
			self::FIELD_IDAUDITORIACATEGORIA=>$this->getIdauditoriacategoria(),
			self::FIELD_NOMBRECATEGORIA=>$this->getNombrecategoria(),
			self::FIELD_FECHAREGISTRO=>$this->getFecharegistro(),
			self::FIELD_NOMBREPERSONA=>$this->getNombrepersona(),
			self::FIELD_IDPERSONA=>$this->getIdpersona());
	}


	/**
	 * return array with the field id as index and the field value as value for the identifier fields.
	 *
	 * @return array
	 */
	public function getPrimaryKeyValues() {
		return array(
			self::FIELD_IDAUDITORIACATEGORIA=>$this->getIdauditoriacategoria());
	}

	/**
	 * cached statements
	 *
	 * @var array<string,array<string,PDOStatement>>
	 */
	private static $stmts=array();
	private static $cacheStatements=true;
	
	/**
	 * prepare passed string as statement or return cached if enabled and available
	 *
	 * @param PDO $db
	 * @param string $statement
	 * @return PDOStatement
	 */
	protected static function prepareStatement(PDO $db, $statement) {
		if(self::isCacheStatements()) {
			if (in_array($statement, array(self::SQL_INSERT, self::SQL_INSERT_AUTOINCREMENT, self::SQL_UPDATE, self::SQL_SELECT_PK, self::SQL_DELETE_PK))) {
				$dbInstanceId=spl_object_hash($db);
				if (null===self::$stmts[$statement][$dbInstanceId]) {
					self::$stmts[$statement][$dbInstanceId]=$db->prepare($statement);
				}
				return self::$stmts[$statement][$dbInstanceId];
			}
		}
		return $db->prepare($statement);
	}

	/**
	 * Enable statement cache
	 *
	 * @param bool $cache
	 */
	public static function setCacheStatements($cache) {
		self::$cacheStatements=true==$cache;
	}

	/**
	 * Check if statement cache is enabled
	 *
	 * @return bool
	 */
	public static function isCacheStatements() {
		return self::$cacheStatements;
	}

	/**
	 * Query by Example.
	 *
	 * Match by attributes of passed example instance and return matched rows as an array of AuditoriacategoriaEntity instances
	 *
	 * @param PDO $db a PDO Database instance
	 * @param AuditoriacategoriaEntity $example an example instance defining the conditions. All non-null properties will be considered a constraint, null values will be ignored.
	 * @param boolean $and true if conditions should be and'ed, false if they should be or'ed
	 * @param array $sort array of DSC instances
	 * @return AuditoriacategoriaEntity[]
	 */
	public static function findByExample(PDO $db,AuditoriacategoriaEntity $example, $and=true, $sort=null) {
		$exampleValues=$example->toArray();
		$filter=array();
		foreach ($exampleValues as $fieldId=>$value) {
			if (null!==$value) {
				$filter[$fieldId]=$value;
			}
		}
		return self::findByFilter($db, $filter, $and, $sort);
	}

	/**
	 * Query by filter.
	 *
	 * The filter can be either an hash with the field id as index and the value as filter value,
	 * or a array of DFC instances.
	 *
	 * Will return matched rows as an array of AuditoriacategoriaEntity instances.
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $filter array of DFC instances defining the conditions
	 * @param boolean $and true if conditions should be and'ed, false if they should be or'ed
	 * @param array $sort array of DSC instances
	 * @return AuditoriacategoriaEntity[]
	 */
	public static function findByFilter(PDO $db, $filter, $and=true, $sort=null) {
		if (!($filter instanceof DFCInterface)) {
			$filter=new DFCAggregate($filter, $and);
		}
		$sql='SELECT * FROM `auditoriacategoria`'
		. self::buildSqlWhere($filter, $and, false, true)
		. self::buildSqlOrderBy($sort);

		$stmt=self::prepareStatement($db, $sql);
		self::bindValuesForFilter($stmt, $filter);
		return self::fromStatement($stmt);
	}

	/**
	 * Will execute the passed statement and return the result as an array of AuditoriacategoriaEntity instances
	 *
	 * @param PDOStatement $stmt
	 * @return AuditoriacategoriaEntity[]
	 */
	public static function fromStatement(PDOStatement $stmt) {
		$affected=$stmt->execute();
		if (false===$affected) {
			$stmt->closeCursor();
			throw new Exception($stmt->errorCode() . ':' . var_export($stmt->errorInfo(), true), 0);
		}
		return self::fromExecutedStatement($stmt);
	}

	/**
	 * returns the result as an array of AuditoriacategoriaEntity instances without executing the passed statement
	 *
	 * @param PDOStatement $stmt
	 * @return AuditoriacategoriaEntity[]
	 */
	public static function fromExecutedStatement(PDOStatement $stmt) {
		$resultInstances=array();
		while($result=$stmt->fetch(PDO::FETCH_ASSOC)) {
			$o=new AuditoriacategoriaEntity();
			$o->assignByHash($result);
			$o->notifyPristine();
			$resultInstances[]=$o;
		}
		$stmt->closeCursor();
		return $resultInstances;
	}

	/**
	 * Get sql WHERE part from filter.
	 *
	 * @param array $filter
	 * @param bool $and
	 * @param bool $fullyQualifiedNames true if field names should be qualified by table name
	 * @param bool $prependWhere true if WHERE should be prepended to conditions
	 * @return string
	 */
	public static function buildSqlWhere($filter, $and, $fullyQualifiedNames=true, $prependWhere=false) {
		if (!($filter instanceof DFCInterface)) {
			$filter=new DFCAggregate($filter, $and);
		}
		return $filter->buildSqlWhere(new self::$CLASS_NAME, $fullyQualifiedNames, $prependWhere);
	}

	/**
	 * get sql ORDER BY part from DSCs
	 *
	 * @param array $sort array of DSC instances
	 * @return string
	 */
	protected static function buildSqlOrderBy($sort) {
		return DSC::buildSqlOrderBy(new self::$CLASS_NAME, $sort);
	}

	/**
	 * bind values from filter to statement
	 *
	 * @param PDOStatement $stmt
	 * @param DFCInterface $filter
	 */
	public static function bindValuesForFilter(PDOStatement &$stmt, DFCInterface $filter) {
		$filter->bindValuesForFilter(new self::$CLASS_NAME, $stmt);
	}

	/**
	 * Execute select query and return matched rows as an array of AuditoriacategoriaEntity instances.
	 *
	 * The query should of course be on the table for this entity class and return all fields.
	 *
	 * @param PDO $db a PDO Database instance
	 * @param string $sql
	 * @return AuditoriacategoriaEntity[]
	 */
	public static function findBySql(PDO $db, $sql) {
		$stmt=$db->query($sql);
		return self::fromExecutedStatement($stmt);
	}

	/**
	 * Delete rows matching the filter
	 *
	 * The filter can be either an hash with the field id as index and the value as filter value,
	 * or a array of DFC instances.
	 *
	 * @param PDO $db
	 * @param array $filter
	 * @param bool $and
	 * @return mixed
	 */
	public static function deleteByFilter(PDO $db, $filter, $and=true) {
		if (!($filter instanceof DFCInterface)) {
			$filter=new DFCAggregate($filter, $and);
		}
		if (0==count($filter)) {
			throw new InvalidArgumentException('refusing to delete without filter'); // just comment out this line if you are brave
		}
		$sql='DELETE FROM `auditoriacategoria`'
		. self::buildSqlWhere($filter, $and, false, true);
		$stmt=self::prepareStatement($db, $sql);
		self::bindValuesForFilter($stmt, $filter);
		$affected=$stmt->execute();
		if (false===$affected) {
			$stmt->closeCursor();
			throw new Exception($stmt->errorCode() . ':' . var_export($stmt->errorInfo(), true), 0);
		}
		$stmt->closeCursor();
		return $affected;
	}

	/**
	 * Assign values from array with the field id as index and the value as value
	 *
	 * @param array $array
	 */
	public function assignByArray($array) {
		$result=array();
		foreach ($array as $fieldId=>$value) {
			$result[self::$FIELD_NAMES[$fieldId]]=$value;
		}
		$this->assignByHash($result);
	}

	/**
	 * Assign values from hash where the indexes match the tables field names
	 *
	 * @param array $result
	 */
	public function assignByHash($result) {
		$this->setIdauditoriacategoria($result['idauditoriacategoria']);
		$this->setNombrecategoria($result['nombrecategoria']);
		$this->setFecharegistro($result['fecharegistro']);
		$this->setNombrepersona($result['nombrepersona']);
		$this->setIdpersona($result['idpersona']);
	}

	/**
	 * Get element instance by it's primary key(s).
	 * Will return null if no row was matched.
	 *
	 * @param PDO $db
	 * @return AuditoriacategoriaEntity
	 */
	public static function findById(PDO $db,$idauditoriacategoria) {
		$stmt=self::prepareStatement($db,self::SQL_SELECT_PK);
		$stmt->bindValue(1,$idauditoriacategoria);
		$affected=$stmt->execute();
		if (false===$affected) {
			$stmt->closeCursor();
			throw new Exception($stmt->errorCode() . ':' . var_export($stmt->errorInfo(), true), 0);
		}
		$result=$stmt->fetch(PDO::FETCH_ASSOC);
		$stmt->closeCursor();
		if(!$result) {
			return null;
		}
		$o=new AuditoriacategoriaEntity();
		$o->assignByHash($result);
		$o->notifyPristine();
		return $o;
	}

	/**
	 * Bind all values to statement
	 *
	 * @param PDOStatement $stmt
	 */
	protected function bindValues(PDOStatement &$stmt) {
		$stmt->bindValue(1,$this->getIdauditoriacategoria());
		$stmt->bindValue(2,$this->getNombrecategoria());
		$stmt->bindValue(3,$this->getFecharegistro());
		$stmt->bindValue(4,$this->getNombrepersona());
		$stmt->bindValue(5,$this->getIdpersona());
	}


	/**
	 * Insert this instance into the database
	 *
	 * @param PDO $db
	 * @return mixed
	 */
	public function insertIntoDatabase(PDO $db) {
		if (null===$this->getIdauditoriacategoria()) {
			$stmt=self::prepareStatement($db,self::SQL_INSERT_AUTOINCREMENT);
			$stmt->bindValue(1,$this->getNombrecategoria());
			$stmt->bindValue(2,$this->getFecharegistro());
			$stmt->bindValue(3,$this->getNombrepersona());
			$stmt->bindValue(4,$this->getIdpersona());
		} else {
			$stmt=self::prepareStatement($db,self::SQL_INSERT);
			$this->bindValues($stmt);
		}
		$affected=$stmt->execute();
		if (false===$affected) {
			$stmt->closeCursor();
			throw new Exception($stmt->errorCode() . ':' . var_export($stmt->errorInfo(), true), 0);
		}
		$lastInsertId=$db->lastInsertId('auditoriacategoria_idauditoriacategoria_seq');
		if (false!==$lastInsertId) {
			$this->setIdauditoriacategoria($lastInsertId);
		}
		$stmt->closeCursor();
		$this->notifyPristine();
		return $affected;
	}


	/**
	 * Update this instance into the database
	 *
	 * @param PDO $db
	 * @return mixed
	 */
	public function updateToDatabase(PDO $db) {
		$stmt=self::prepareStatement($db,self::SQL_UPDATE);
		$this->bindValues($stmt);
		$stmt->bindValue(6,$this->getIdauditoriacategoria());
		$affected=$stmt->execute();
		if (false===$affected) {
			$stmt->closeCursor();
			throw new Exception($stmt->errorCode() . ':' . var_export($stmt->errorInfo(), true), 0);
		}
		$stmt->closeCursor();
		$this->notifyPristine();
		return $affected;
	}


	/**
	 * Delete this instance from the database
	 *
	 * @param PDO $db
	 * @return mixed
	 */
	public function deleteFromDatabase(PDO $db) {
		$stmt=self::prepareStatement($db,self::SQL_DELETE_PK);
		$stmt->bindValue(1,$this->getIdauditoriacategoria());
		$affected=$stmt->execute();
		if (false===$affected) {
			$stmt->closeCursor();
			throw new Exception($stmt->errorCode() . ':' . var_export($stmt->errorInfo(), true), 0);
		}
		$stmt->closeCursor();
		return $affected;
	}


	/**
	 * get element as DOM Document
	 *
	 * @return DOMDocument
	 */
	public function toDOM() {
		return self::hashToDomDocument($this->toHash(), 'AuditoriacategoriaEntity');
	}

	/**
	 * get single AuditoriacategoriaEntity instance from a DOMElement
	 *
	 * @param DOMElement $node
	 * @return AuditoriacategoriaEntity
	 */
	public static function fromDOMElement(DOMElement $node) {
		$o=new AuditoriacategoriaEntity();
		$o->assignByHash(self::domNodeToHash($node, self::$FIELD_NAMES, self::$DEFAULT_VALUES, self::$FIELD_TYPES));
			$o->notifyPristine();
		return $o;
	}

	/**
	 * get all instances of AuditoriacategoriaEntity from the passed DOMDocument
	 *
	 * @param DOMDocument $doc
	 * @return AuditoriacategoriaEntity[]
	 */
	public static function fromDOMDocument(DOMDocument $doc) {
		$instances=array();
		foreach ($doc->getElementsByTagName('AuditoriacategoriaEntity') as $node) {
			$instances[]=self::fromDOMElement($node);
		}
		return $instances;
	}

}
?>