<?php

/**
 * 
 *
 * @version 1.105
 * @package entity
 */
class CategoriapreguntaEntity extends Db2PhpEntityBase implements Db2PhpEntityModificationTracking {
	private static $CLASS_NAME='CategoriapreguntaEntity';
	const SQL_IDENTIFIER_QUOTE='`';
	const SQL_TABLE_NAME='categoriapregunta';
	const SQL_INSERT='INSERT INTO `categoriapregunta` (`idcategoriapregunta`,`categoria`,`descripcioncategoria`,`area_idarea`) VALUES (?,?,?,?)';
	const SQL_INSERT_AUTOINCREMENT='INSERT INTO `categoriapregunta` (`categoria`,`descripcioncategoria`,`area_idarea`) VALUES (?,?,?)';
	const SQL_UPDATE='UPDATE `categoriapregunta` SET `idcategoriapregunta`=?,`categoria`=?,`descripcioncategoria`=?,`area_idarea`=? WHERE `idcategoriapregunta`=?';
	const SQL_SELECT_PK='SELECT * FROM `categoriapregunta` WHERE `idcategoriapregunta`=?';
	const SQL_DELETE_PK='DELETE FROM `categoriapregunta` WHERE `idcategoriapregunta`=?';
	const FIELD_IDCATEGORIAPREGUNTA=-853552367;
	const FIELD_CATEGORIA=-623641182;
	const FIELD_DESCRIPCIONCATEGORIA=-1216822697;
	const FIELD_AREA_IDAREA=-2094827319;
	private static $PRIMARY_KEYS=array(self::FIELD_IDCATEGORIAPREGUNTA);
	private static $AUTOINCREMENT_FIELDS=array(self::FIELD_IDCATEGORIAPREGUNTA);
	private static $FIELD_NAMES=array(
		self::FIELD_IDCATEGORIAPREGUNTA=>'idcategoriapregunta',
		self::FIELD_CATEGORIA=>'categoria',
		self::FIELD_DESCRIPCIONCATEGORIA=>'descripcioncategoria',
		self::FIELD_AREA_IDAREA=>'area_idarea');
	private static $PROPERTY_NAMES=array(
		self::FIELD_IDCATEGORIAPREGUNTA=>'idcategoriapregunta',
		self::FIELD_CATEGORIA=>'categoria',
		self::FIELD_DESCRIPCIONCATEGORIA=>'descripcioncategoria',
		self::FIELD_AREA_IDAREA=>'areaIdarea');
	private static $PROPERTY_TYPES=array(
		self::FIELD_IDCATEGORIAPREGUNTA=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_CATEGORIA=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_DESCRIPCIONCATEGORIA=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_AREA_IDAREA=>Db2PhpEntity::PHP_TYPE_INT);
	private static $FIELD_TYPES=array(
		self::FIELD_IDCATEGORIAPREGUNTA=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,false),
		self::FIELD_CATEGORIA=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,45,0,true),
		self::FIELD_DESCRIPCIONCATEGORIA=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,180,0,true),
		self::FIELD_AREA_IDAREA=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,false));
	private static $DEFAULT_VALUES=array(
		self::FIELD_IDCATEGORIAPREGUNTA=>null,
		self::FIELD_CATEGORIA=>null,
		self::FIELD_DESCRIPCIONCATEGORIA=>null,
		self::FIELD_AREA_IDAREA=>0);
	private $idcategoriapregunta;
	private $categoria;
	private $descripcioncategoria;
	private $areaIdarea;

	/**
	 * set value for idcategoriapregunta 
	 *
	 * type:serial,size:10,default:nextval('categoriapregunta_idcategoriapregunta_seq'::regclass),primary,unique,autoincrement
	 *
	 * @param mixed $idcategoriapregunta
	 * @return CategoriapreguntaEntity
	 */
	public function &setIdcategoriapregunta($idcategoriapregunta) {
		$this->notifyChanged(self::FIELD_IDCATEGORIAPREGUNTA,$this->idcategoriapregunta,$idcategoriapregunta);
		$this->idcategoriapregunta=$idcategoriapregunta;
		return $this;
	}

	/**
	 * get value for idcategoriapregunta 
	 *
	 * type:serial,size:10,default:nextval('categoriapregunta_idcategoriapregunta_seq'::regclass),primary,unique,autoincrement
	 *
	 * @return mixed
	 */
	public function getIdcategoriapregunta() {
		return $this->idcategoriapregunta;
	}

	/**
	 * set value for categoria 
	 *
	 * type:varchar,size:45,default:null,nullable
	 *
	 * @param mixed $categoria
	 * @return CategoriapreguntaEntity
	 */
	public function &setCategoria($categoria) {
		$this->notifyChanged(self::FIELD_CATEGORIA,$this->categoria,$categoria);
		$this->categoria=$categoria;
		return $this;
	}

	/**
	 * get value for categoria 
	 *
	 * type:varchar,size:45,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getCategoria() {
		return $this->categoria;
	}

	/**
	 * set value for descripcioncategoria 
	 *
	 * type:varchar,size:180,default:null,nullable
	 *
	 * @param mixed $descripcioncategoria
	 * @return CategoriapreguntaEntity
	 */
	public function &setDescripcioncategoria($descripcioncategoria) {
		$this->notifyChanged(self::FIELD_DESCRIPCIONCATEGORIA,$this->descripcioncategoria,$descripcioncategoria);
		$this->descripcioncategoria=$descripcioncategoria;
		return $this;
	}

	/**
	 * get value for descripcioncategoria 
	 *
	 * type:varchar,size:180,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getDescripcioncategoria() {
		return $this->descripcioncategoria;
	}

	/**
	 * set value for area_idarea 
	 *
	 * type:int4,size:10,default:null,index
	 *
	 * @param mixed $areaIdarea
	 * @return CategoriapreguntaEntity
	 */
	public function &setAreaIdarea($areaIdarea) {
		$this->notifyChanged(self::FIELD_AREA_IDAREA,$this->areaIdarea,$areaIdarea);
		$this->areaIdarea=$areaIdarea;
		return $this;
	}

	/**
	 * get value for area_idarea 
	 *
	 * type:int4,size:10,default:null,index
	 *
	 * @return mixed
	 */
	public function getAreaIdarea() {
		return $this->areaIdarea;
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
			self::FIELD_IDCATEGORIAPREGUNTA=>$this->getIdcategoriapregunta(),
			self::FIELD_CATEGORIA=>$this->getCategoria(),
			self::FIELD_DESCRIPCIONCATEGORIA=>$this->getDescripcioncategoria(),
			self::FIELD_AREA_IDAREA=>$this->getAreaIdarea());
	}


	/**
	 * return array with the field id as index and the field value as value for the identifier fields.
	 *
	 * @return array
	 */
	public function getPrimaryKeyValues() {
		return array(
			self::FIELD_IDCATEGORIAPREGUNTA=>$this->getIdcategoriapregunta());
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
	 * Match by attributes of passed example instance and return matched rows as an array of CategoriapreguntaEntity instances
	 *
	 * @param PDO $db a PDO Database instance
	 * @param CategoriapreguntaEntity $example an example instance defining the conditions. All non-null properties will be considered a constraint, null values will be ignored.
	 * @param boolean $and true if conditions should be and'ed, false if they should be or'ed
	 * @param array $sort array of DSC instances
	 * @return CategoriapreguntaEntity[]
	 */
	public static function findByExample(PDO $db,CategoriapreguntaEntity $example, $and=true, $sort=null) {
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
	 * Will return matched rows as an array of CategoriapreguntaEntity instances.
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $filter array of DFC instances defining the conditions
	 * @param boolean $and true if conditions should be and'ed, false if they should be or'ed
	 * @param array $sort array of DSC instances
	 * @return CategoriapreguntaEntity[]
	 */
	public static function findByFilter(PDO $db, $filter, $and=true, $sort=null) {
		if (!($filter instanceof DFCInterface)) {
			$filter=new DFCAggregate($filter, $and);
		}
		$sql='SELECT * FROM `categoriapregunta`'
		. self::buildSqlWhere($filter, $and, false, true)
		. self::buildSqlOrderBy($sort);

		$stmt=self::prepareStatement($db, $sql);
		self::bindValuesForFilter($stmt, $filter);
		return self::fromStatement($stmt);
	}

	/**
	 * Will execute the passed statement and return the result as an array of CategoriapreguntaEntity instances
	 *
	 * @param PDOStatement $stmt
	 * @return CategoriapreguntaEntity[]
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
	 * returns the result as an array of CategoriapreguntaEntity instances without executing the passed statement
	 *
	 * @param PDOStatement $stmt
	 * @return CategoriapreguntaEntity[]
	 */
	public static function fromExecutedStatement(PDOStatement $stmt) {
		$resultInstances=array();
		while($result=$stmt->fetch(PDO::FETCH_ASSOC)) {
			$o=new CategoriapreguntaEntity();
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
	 * Execute select query and return matched rows as an array of CategoriapreguntaEntity instances.
	 *
	 * The query should of course be on the table for this entity class and return all fields.
	 *
	 * @param PDO $db a PDO Database instance
	 * @param string $sql
	 * @return CategoriapreguntaEntity[]
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
		$sql='DELETE FROM `categoriapregunta`'
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
		$this->setIdcategoriapregunta($result['idcategoriapregunta']);
		$this->setCategoria($result['categoria']);
		$this->setDescripcioncategoria($result['descripcioncategoria']);
		$this->setAreaIdarea($result['area_idarea']);
	}

	/**
	 * Get element instance by it's primary key(s).
	 * Will return null if no row was matched.
	 *
	 * @param PDO $db
	 * @return CategoriapreguntaEntity
	 */
	public static function findById(PDO $db,$idcategoriapregunta) {
		$stmt=self::prepareStatement($db,self::SQL_SELECT_PK);
		$stmt->bindValue(1,$idcategoriapregunta);
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
		$o=new CategoriapreguntaEntity();
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
		$stmt->bindValue(1,$this->getIdcategoriapregunta());
		$stmt->bindValue(2,$this->getCategoria());
		$stmt->bindValue(3,$this->getDescripcioncategoria());
		$stmt->bindValue(4,$this->getAreaIdarea());
	}


	/**
	 * Insert this instance into the database
	 *
	 * @param PDO $db
	 * @return mixed
	 */
	public function insertIntoDatabase(PDO $db) {
		if (null===$this->getIdcategoriapregunta()) {
			$stmt=self::prepareStatement($db,self::SQL_INSERT_AUTOINCREMENT);
			$stmt->bindValue(1,$this->getCategoria());
			$stmt->bindValue(2,$this->getDescripcioncategoria());
			$stmt->bindValue(3,$this->getAreaIdarea());
		} else {
			$stmt=self::prepareStatement($db,self::SQL_INSERT);
			$this->bindValues($stmt);
		}
		$affected=$stmt->execute();
		if (false===$affected) {
			$stmt->closeCursor();
			throw new Exception($stmt->errorCode() . ':' . var_export($stmt->errorInfo(), true), 0);
		}
		$lastInsertId=$db->lastInsertId('categoriapregunta_idcategoriapregunta_seq');
		if (false!==$lastInsertId) {
			$this->setIdcategoriapregunta($lastInsertId);
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
		$stmt->bindValue(5,$this->getIdcategoriapregunta());
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
		$stmt->bindValue(1,$this->getIdcategoriapregunta());
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
		return self::hashToDomDocument($this->toHash(), 'CategoriapreguntaEntity');
	}

	/**
	 * get single CategoriapreguntaEntity instance from a DOMElement
	 *
	 * @param DOMElement $node
	 * @return CategoriapreguntaEntity
	 */
	public static function fromDOMElement(DOMElement $node) {
		$o=new CategoriapreguntaEntity();
		$o->assignByHash(self::domNodeToHash($node, self::$FIELD_NAMES, self::$DEFAULT_VALUES, self::$FIELD_TYPES));
			$o->notifyPristine();
		return $o;
	}

	/**
	 * get all instances of CategoriapreguntaEntity from the passed DOMDocument
	 *
	 * @param DOMDocument $doc
	 * @return CategoriapreguntaEntity[]
	 */
	public static function fromDOMDocument(DOMDocument $doc) {
		$instances=array();
		foreach ($doc->getElementsByTagName('CategoriapreguntaEntity') as $node) {
			$instances[]=self::fromDOMElement($node);
		}
		return $instances;
	}

}
?>