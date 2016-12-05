<?php

/**
 * 
 *
 * @version 1.105
 * @package entity
 */
class PreguntasrespuestasEntity extends Db2PhpEntityBase implements Db2PhpEntityModificationTracking {
	private static $CLASS_NAME='PreguntasrespuestasEntity';
	const SQL_IDENTIFIER_QUOTE='`';
	const SQL_TABLE_NAME='preguntasrespuestas';
	const SQL_INSERT='INSERT INTO `preguntasrespuestas` (`idpreguntas`,`preguntas`,`categoriapregunta_idcategoriapregunta`,`estados_idestados`) VALUES (?,?,?,?)';
	const SQL_INSERT_AUTOINCREMENT='INSERT INTO `preguntasrespuestas` (`preguntas`,`categoriapregunta_idcategoriapregunta`,`estados_idestados`) VALUES (?,?,?)';
	const SQL_UPDATE='UPDATE `preguntasrespuestas` SET `idpreguntas`=?,`preguntas`=?,`categoriapregunta_idcategoriapregunta`=?,`estados_idestados`=? WHERE `idpreguntas`=?';
	const SQL_SELECT_PK='SELECT * FROM `preguntasrespuestas` WHERE `idpreguntas`=?';
	const SQL_DELETE_PK='DELETE FROM `preguntasrespuestas` WHERE `idpreguntas`=?';
	const FIELD_IDPREGUNTAS=1159022940;
	const FIELD_PREGUNTAS=-48184425;
	const FIELD_CATEGORIAPREGUNTA_IDCATEGORIAPREGUNTA=-1905726706;
	const FIELD_ESTADOS_IDESTADOS=-76818642;
	private static $PRIMARY_KEYS=array(self::FIELD_IDPREGUNTAS);
	private static $AUTOINCREMENT_FIELDS=array(self::FIELD_IDPREGUNTAS);
	private static $FIELD_NAMES=array(
		self::FIELD_IDPREGUNTAS=>'idpreguntas',
		self::FIELD_PREGUNTAS=>'preguntas',
		self::FIELD_CATEGORIAPREGUNTA_IDCATEGORIAPREGUNTA=>'categoriapregunta_idcategoriapregunta',
		self::FIELD_ESTADOS_IDESTADOS=>'estados_idestados');
	private static $PROPERTY_NAMES=array(
		self::FIELD_IDPREGUNTAS=>'idpreguntas',
		self::FIELD_PREGUNTAS=>'preguntas',
		self::FIELD_CATEGORIAPREGUNTA_IDCATEGORIAPREGUNTA=>'categoriapreguntaIdcategoriapregunta',
		self::FIELD_ESTADOS_IDESTADOS=>'estadosIdestados');
	private static $PROPERTY_TYPES=array(
		self::FIELD_IDPREGUNTAS=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_PREGUNTAS=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_CATEGORIAPREGUNTA_IDCATEGORIAPREGUNTA=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_ESTADOS_IDESTADOS=>Db2PhpEntity::PHP_TYPE_INT);
	private static $FIELD_TYPES=array(
		self::FIELD_IDPREGUNTAS=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,false),
		self::FIELD_PREGUNTAS=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,400,0,true),
		self::FIELD_CATEGORIAPREGUNTA_IDCATEGORIAPREGUNTA=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,false),
		self::FIELD_ESTADOS_IDESTADOS=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,false));
	private static $DEFAULT_VALUES=array(
		self::FIELD_IDPREGUNTAS=>null,
		self::FIELD_PREGUNTAS=>null,
		self::FIELD_CATEGORIAPREGUNTA_IDCATEGORIAPREGUNTA=>0,
		self::FIELD_ESTADOS_IDESTADOS=>0);
	private $idpreguntas;
	private $preguntas;
	private $categoriapreguntaIdcategoriapregunta;
	private $estadosIdestados;

	/**
	 * set value for idpreguntas 
	 *
	 * type:serial,size:10,default:nextval('preguntasrespuestas_idpreguntas_seq'::regclass),primary,unique,autoincrement
	 *
	 * @param mixed $idpreguntas
	 * @return PreguntasrespuestasEntity
	 */
	public function &setIdpreguntas($idpreguntas) {
		$this->notifyChanged(self::FIELD_IDPREGUNTAS,$this->idpreguntas,$idpreguntas);
		$this->idpreguntas=$idpreguntas;
		return $this;
	}

	/**
	 * get value for idpreguntas 
	 *
	 * type:serial,size:10,default:nextval('preguntasrespuestas_idpreguntas_seq'::regclass),primary,unique,autoincrement
	 *
	 * @return mixed
	 */
	public function getIdpreguntas() {
		return $this->idpreguntas;
	}

	/**
	 * set value for preguntas 
	 *
	 * type:varchar,size:400,default:null,nullable
	 *
	 * @param mixed $preguntas
	 * @return PreguntasrespuestasEntity
	 */
	public function &setPreguntas($preguntas) {
		$this->notifyChanged(self::FIELD_PREGUNTAS,$this->preguntas,$preguntas);
		$this->preguntas=$preguntas;
		return $this;
	}

	/**
	 * get value for preguntas 
	 *
	 * type:varchar,size:400,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getPreguntas() {
		return $this->preguntas;
	}

	/**
	 * set value for categoriapregunta_idcategoriapregunta 
	 *
	 * type:int4,size:10,default:null,index
	 *
	 * @param mixed $categoriapreguntaIdcategoriapregunta
	 * @return PreguntasrespuestasEntity
	 */
	public function &setCategoriapreguntaIdcategoriapregunta($categoriapreguntaIdcategoriapregunta) {
		$this->notifyChanged(self::FIELD_CATEGORIAPREGUNTA_IDCATEGORIAPREGUNTA,$this->categoriapreguntaIdcategoriapregunta,$categoriapreguntaIdcategoriapregunta);
		$this->categoriapreguntaIdcategoriapregunta=$categoriapreguntaIdcategoriapregunta;
		return $this;
	}

	/**
	 * get value for categoriapregunta_idcategoriapregunta 
	 *
	 * type:int4,size:10,default:null,index
	 *
	 * @return mixed
	 */
	public function getCategoriapreguntaIdcategoriapregunta() {
		return $this->categoriapreguntaIdcategoriapregunta;
	}

	/**
	 * set value for estados_idestados 
	 *
	 * type:int4,size:10,default:null,index
	 *
	 * @param mixed $estadosIdestados
	 * @return PreguntasrespuestasEntity
	 */
	public function &setEstadosIdestados($estadosIdestados) {
		$this->notifyChanged(self::FIELD_ESTADOS_IDESTADOS,$this->estadosIdestados,$estadosIdestados);
		$this->estadosIdestados=$estadosIdestados;
		return $this;
	}

	/**
	 * get value for estados_idestados 
	 *
	 * type:int4,size:10,default:null,index
	 *
	 * @return mixed
	 */
	public function getEstadosIdestados() {
		return $this->estadosIdestados;
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
			self::FIELD_IDPREGUNTAS=>$this->getIdpreguntas(),
			self::FIELD_PREGUNTAS=>$this->getPreguntas(),
			self::FIELD_CATEGORIAPREGUNTA_IDCATEGORIAPREGUNTA=>$this->getCategoriapreguntaIdcategoriapregunta(),
			self::FIELD_ESTADOS_IDESTADOS=>$this->getEstadosIdestados());
	}


	/**
	 * return array with the field id as index and the field value as value for the identifier fields.
	 *
	 * @return array
	 */
	public function getPrimaryKeyValues() {
		return array(
			self::FIELD_IDPREGUNTAS=>$this->getIdpreguntas());
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
	 * Match by attributes of passed example instance and return matched rows as an array of PreguntasrespuestasEntity instances
	 *
	 * @param PDO $db a PDO Database instance
	 * @param PreguntasrespuestasEntity $example an example instance defining the conditions. All non-null properties will be considered a constraint, null values will be ignored.
	 * @param boolean $and true if conditions should be and'ed, false if they should be or'ed
	 * @param array $sort array of DSC instances
	 * @return PreguntasrespuestasEntity[]
	 */
	public static function findByExample(PDO $db,PreguntasrespuestasEntity $example, $and=true, $sort=null) {
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
	 * Will return matched rows as an array of PreguntasrespuestasEntity instances.
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $filter array of DFC instances defining the conditions
	 * @param boolean $and true if conditions should be and'ed, false if they should be or'ed
	 * @param array $sort array of DSC instances
	 * @return PreguntasrespuestasEntity[]
	 */
	public static function findByFilter(PDO $db, $filter, $and=true, $sort=null) {
		if (!($filter instanceof DFCInterface)) {
			$filter=new DFCAggregate($filter, $and);
		}
		$sql='SELECT * FROM `preguntasrespuestas`'
		. self::buildSqlWhere($filter, $and, false, true)
		. self::buildSqlOrderBy($sort);

		$stmt=self::prepareStatement($db, $sql);
		self::bindValuesForFilter($stmt, $filter);
		return self::fromStatement($stmt);
	}

	/**
	 * Will execute the passed statement and return the result as an array of PreguntasrespuestasEntity instances
	 *
	 * @param PDOStatement $stmt
	 * @return PreguntasrespuestasEntity[]
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
	 * returns the result as an array of PreguntasrespuestasEntity instances without executing the passed statement
	 *
	 * @param PDOStatement $stmt
	 * @return PreguntasrespuestasEntity[]
	 */
	public static function fromExecutedStatement(PDOStatement $stmt) {
		$resultInstances=array();
		while($result=$stmt->fetch(PDO::FETCH_ASSOC)) {
			$o=new PreguntasrespuestasEntity();
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
	 * Execute select query and return matched rows as an array of PreguntasrespuestasEntity instances.
	 *
	 * The query should of course be on the table for this entity class and return all fields.
	 *
	 * @param PDO $db a PDO Database instance
	 * @param string $sql
	 * @return PreguntasrespuestasEntity[]
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
		$sql='DELETE FROM `preguntasrespuestas`'
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
		$this->setIdpreguntas($result['idpreguntas']);
		$this->setPreguntas($result['preguntas']);
		$this->setCategoriapreguntaIdcategoriapregunta($result['categoriapregunta_idcategoriapregunta']);
		$this->setEstadosIdestados($result['estados_idestados']);
	}

	/**
	 * Get element instance by it's primary key(s).
	 * Will return null if no row was matched.
	 *
	 * @param PDO $db
	 * @return PreguntasrespuestasEntity
	 */
	public static function findById(PDO $db,$idpreguntas) {
		$stmt=self::prepareStatement($db,self::SQL_SELECT_PK);
		$stmt->bindValue(1,$idpreguntas);
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
		$o=new PreguntasrespuestasEntity();
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
		$stmt->bindValue(1,$this->getIdpreguntas());
		$stmt->bindValue(2,$this->getPreguntas());
		$stmt->bindValue(3,$this->getCategoriapreguntaIdcategoriapregunta());
		$stmt->bindValue(4,$this->getEstadosIdestados());
	}


	/**
	 * Insert this instance into the database
	 *
	 * @param PDO $db
	 * @return mixed
	 */
	public function insertIntoDatabase(PDO $db) {
		if (null===$this->getIdpreguntas()) {
			$stmt=self::prepareStatement($db,self::SQL_INSERT_AUTOINCREMENT);
			$stmt->bindValue(1,$this->getPreguntas());
			$stmt->bindValue(2,$this->getCategoriapreguntaIdcategoriapregunta());
			$stmt->bindValue(3,$this->getEstadosIdestados());
		} else {
			$stmt=self::prepareStatement($db,self::SQL_INSERT);
			$this->bindValues($stmt);
		}
		$affected=$stmt->execute();
		if (false===$affected) {
			$stmt->closeCursor();
			throw new Exception($stmt->errorCode() . ':' . var_export($stmt->errorInfo(), true), 0);
		}
		$lastInsertId=$db->lastInsertId('preguntasrespuestas_idpreguntas_seq');
		if (false!==$lastInsertId) {
			$this->setIdpreguntas($lastInsertId);
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
		$stmt->bindValue(5,$this->getIdpreguntas());
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
		$stmt->bindValue(1,$this->getIdpreguntas());
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
		return self::hashToDomDocument($this->toHash(), 'PreguntasrespuestasEntity');
	}

	/**
	 * get single PreguntasrespuestasEntity instance from a DOMElement
	 *
	 * @param DOMElement $node
	 * @return PreguntasrespuestasEntity
	 */
	public static function fromDOMElement(DOMElement $node) {
		$o=new PreguntasrespuestasEntity();
		$o->assignByHash(self::domNodeToHash($node, self::$FIELD_NAMES, self::$DEFAULT_VALUES, self::$FIELD_TYPES));
			$o->notifyPristine();
		return $o;
	}

	/**
	 * get all instances of PreguntasrespuestasEntity from the passed DOMDocument
	 *
	 * @param DOMDocument $doc
	 * @return PreguntasrespuestasEntity[]
	 */
	public static function fromDOMDocument(DOMDocument $doc) {
		$instances=array();
		foreach ($doc->getElementsByTagName('PreguntasrespuestasEntity') as $node) {
			$instances[]=self::fromDOMElement($node);
		}
		return $instances;
	}

}
?>