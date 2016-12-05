<?php

/**
 * 
 *
 * @version 1.105
 * @package entity
 */
class PersonasEntity extends Db2PhpEntityBase implements Db2PhpEntityModificationTracking {
	private static $CLASS_NAME='PersonasEntity';
	const SQL_IDENTIFIER_QUOTE='`';
	const SQL_TABLE_NAME='personas';
	const SQL_INSERT='INSERT INTO `personas` (`idpersonas`,`nombres`,`apellidos`,`correo`,`clave`,`roles_idroles`,`area_idarea`) VALUES (?,?,?,?,?,?,?)';
	const SQL_INSERT_AUTOINCREMENT='INSERT INTO `personas` (`idpersonas`,`nombres`,`apellidos`,`correo`,`clave`,`roles_idroles`,`area_idarea`) VALUES (?,?,?,?,?,?,?)';
	const SQL_UPDATE='UPDATE `personas` SET `idpersonas`=?,`nombres`=?,`apellidos`=?,`correo`=?,`clave`=?,`roles_idroles`=?,`area_idarea`=? WHERE `idpersonas`=?';
	const SQL_SELECT_PK='SELECT * FROM `personas` WHERE `idpersonas`=?';
	const SQL_DELETE_PK='DELETE FROM `personas` WHERE `idpersonas`=?';
	const FIELD_IDPERSONAS=-1736180119;
	const FIELD_NOMBRES=-2133153501;
	const FIELD_APELLIDOS=-20435858;
	const FIELD_CORREO=-1491946787;
	const FIELD_CLAVE=1337240416;
	const FIELD_ROLES_IDROLES=-183239783;
	const FIELD_AREA_IDAREA=798844659;
	private static $PRIMARY_KEYS=array(self::FIELD_IDPERSONAS);
	private static $AUTOINCREMENT_FIELDS=array();
	private static $FIELD_NAMES=array(
		self::FIELD_IDPERSONAS=>'idpersonas',
		self::FIELD_NOMBRES=>'nombres',
		self::FIELD_APELLIDOS=>'apellidos',
		self::FIELD_CORREO=>'correo',
		self::FIELD_CLAVE=>'clave',
		self::FIELD_ROLES_IDROLES=>'roles_idroles',
		self::FIELD_AREA_IDAREA=>'area_idarea');
	private static $PROPERTY_NAMES=array(
		self::FIELD_IDPERSONAS=>'idpersonas',
		self::FIELD_NOMBRES=>'nombres',
		self::FIELD_APELLIDOS=>'apellidos',
		self::FIELD_CORREO=>'correo',
		self::FIELD_CLAVE=>'clave',
		self::FIELD_ROLES_IDROLES=>'rolesIdroles',
		self::FIELD_AREA_IDAREA=>'areaIdarea');
	private static $PROPERTY_TYPES=array(
		self::FIELD_IDPERSONAS=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_NOMBRES=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_APELLIDOS=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_CORREO=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_CLAVE=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_ROLES_IDROLES=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_AREA_IDAREA=>Db2PhpEntity::PHP_TYPE_INT);
	private static $FIELD_TYPES=array(
		self::FIELD_IDPERSONAS=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,false),
		self::FIELD_NOMBRES=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,45,0,true),
		self::FIELD_APELLIDOS=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,45,0,true),
		self::FIELD_CORREO=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,95,0,true),
		self::FIELD_CLAVE=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,15,0,true),
		self::FIELD_ROLES_IDROLES=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,false),
		self::FIELD_AREA_IDAREA=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,false));
	private static $DEFAULT_VALUES=array(
		self::FIELD_IDPERSONAS=>0,
		self::FIELD_NOMBRES=>null,
		self::FIELD_APELLIDOS=>null,
		self::FIELD_CORREO=>null,
		self::FIELD_CLAVE=>null,
		self::FIELD_ROLES_IDROLES=>0,
		self::FIELD_AREA_IDAREA=>0);
	private $idpersonas;
	private $nombres;
	private $apellidos;
	private $correo;
	private $clave;
	private $rolesIdroles;
	private $areaIdarea;

	/**
	 * set value for idpersonas 
	 *
	 * type:int4,size:10,default:null,primary,unique
	 *
	 * @param mixed $idpersonas
	 * @return PersonasEntity
	 */
	public function &setIdpersonas($idpersonas) {
		$this->notifyChanged(self::FIELD_IDPERSONAS,$this->idpersonas,$idpersonas);
		$this->idpersonas=$idpersonas;
		return $this;
	}

	/**
	 * get value for idpersonas 
	 *
	 * type:int4,size:10,default:null,primary,unique
	 *
	 * @return mixed
	 */
	public function getIdpersonas() {
		return $this->idpersonas;
	}

	/**
	 * set value for nombres 
	 *
	 * type:varchar,size:45,default:null,nullable
	 *
	 * @param mixed $nombres
	 * @return PersonasEntity
	 */
	public function &setNombres($nombres) {
		$this->notifyChanged(self::FIELD_NOMBRES,$this->nombres,$nombres);
		$this->nombres=$nombres;
		return $this;
	}

	/**
	 * get value for nombres 
	 *
	 * type:varchar,size:45,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getNombres() {
		return $this->nombres;
	}

	/**
	 * set value for apellidos 
	 *
	 * type:varchar,size:45,default:null,nullable
	 *
	 * @param mixed $apellidos
	 * @return PersonasEntity
	 */
	public function &setApellidos($apellidos) {
		$this->notifyChanged(self::FIELD_APELLIDOS,$this->apellidos,$apellidos);
		$this->apellidos=$apellidos;
		return $this;
	}

	/**
	 * get value for apellidos 
	 *
	 * type:varchar,size:45,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getApellidos() {
		return $this->apellidos;
	}

	/**
	 * set value for correo 
	 *
	 * type:varchar,size:95,default:null,nullable
	 *
	 * @param mixed $correo
	 * @return PersonasEntity
	 */
	public function &setCorreo($correo) {
		$this->notifyChanged(self::FIELD_CORREO,$this->correo,$correo);
		$this->correo=$correo;
		return $this;
	}

	/**
	 * get value for correo 
	 *
	 * type:varchar,size:95,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getCorreo() {
		return $this->correo;
	}

	/**
	 * set value for clave 
	 *
	 * type:varchar,size:15,default:null,nullable
	 *
	 * @param mixed $clave
	 * @return PersonasEntity
	 */
	public function &setClave($clave) {
		$this->notifyChanged(self::FIELD_CLAVE,$this->clave,$clave);
		$this->clave=$clave;
		return $this;
	}

	/**
	 * get value for clave 
	 *
	 * type:varchar,size:15,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getClave() {
		return $this->clave;
	}

	/**
	 * set value for roles_idroles 
	 *
	 * type:int4,size:10,default:null,index
	 *
	 * @param mixed $rolesIdroles
	 * @return PersonasEntity
	 */
	public function &setRolesIdroles($rolesIdroles) {
		$this->notifyChanged(self::FIELD_ROLES_IDROLES,$this->rolesIdroles,$rolesIdroles);
		$this->rolesIdroles=$rolesIdroles;
		return $this;
	}

	/**
	 * get value for roles_idroles 
	 *
	 * type:int4,size:10,default:null,index
	 *
	 * @return mixed
	 */
	public function getRolesIdroles() {
		return $this->rolesIdroles;
	}

	/**
	 * set value for area_idarea 
	 *
	 * type:int4,size:10,default:null,index
	 *
	 * @param mixed $areaIdarea
	 * @return PersonasEntity
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
			self::FIELD_IDPERSONAS=>$this->getIdpersonas(),
			self::FIELD_NOMBRES=>$this->getNombres(),
			self::FIELD_APELLIDOS=>$this->getApellidos(),
			self::FIELD_CORREO=>$this->getCorreo(),
			self::FIELD_CLAVE=>$this->getClave(),
			self::FIELD_ROLES_IDROLES=>$this->getRolesIdroles(),
			self::FIELD_AREA_IDAREA=>$this->getAreaIdarea());
	}


	/**
	 * return array with the field id as index and the field value as value for the identifier fields.
	 *
	 * @return array
	 */
	public function getPrimaryKeyValues() {
		return array(
			self::FIELD_IDPERSONAS=>$this->getIdpersonas());
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
	 * Match by attributes of passed example instance and return matched rows as an array of PersonasEntity instances
	 *
	 * @param PDO $db a PDO Database instance
	 * @param PersonasEntity $example an example instance defining the conditions. All non-null properties will be considered a constraint, null values will be ignored.
	 * @param boolean $and true if conditions should be and'ed, false if they should be or'ed
	 * @param array $sort array of DSC instances
	 * @return PersonasEntity[]
	 */
	public static function findByExample(PDO $db,PersonasEntity $example, $and=true, $sort=null) {
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
	 * Will return matched rows as an array of PersonasEntity instances.
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $filter array of DFC instances defining the conditions
	 * @param boolean $and true if conditions should be and'ed, false if they should be or'ed
	 * @param array $sort array of DSC instances
	 * @return PersonasEntity[]
	 */
	public static function findByFilter(PDO $db, $filter, $and=true, $sort=null) {
		if (!($filter instanceof DFCInterface)) {
			$filter=new DFCAggregate($filter, $and);
		}
		$sql='SELECT * FROM `personas`'
		. self::buildSqlWhere($filter, $and, false, true)
		. self::buildSqlOrderBy($sort);

		$stmt=self::prepareStatement($db, $sql);
		self::bindValuesForFilter($stmt, $filter);
		return self::fromStatement($stmt);
	}

	/**
	 * Will execute the passed statement and return the result as an array of PersonasEntity instances
	 *
	 * @param PDOStatement $stmt
	 * @return PersonasEntity[]
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
	 * returns the result as an array of PersonasEntity instances without executing the passed statement
	 *
	 * @param PDOStatement $stmt
	 * @return PersonasEntity[]
	 */
	public static function fromExecutedStatement(PDOStatement $stmt) {
		$resultInstances=array();
		while($result=$stmt->fetch(PDO::FETCH_ASSOC)) {
			$o=new PersonasEntity();
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
	 * Execute select query and return matched rows as an array of PersonasEntity instances.
	 *
	 * The query should of course be on the table for this entity class and return all fields.
	 *
	 * @param PDO $db a PDO Database instance
	 * @param string $sql
	 * @return PersonasEntity[]
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
		$sql='DELETE FROM `personas`'
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
		$this->setIdpersonas($result['idpersonas']);
		$this->setNombres($result['nombres']);
		$this->setApellidos($result['apellidos']);
		$this->setCorreo($result['correo']);
		$this->setClave($result['clave']);
		$this->setRolesIdroles($result['roles_idroles']);
		$this->setAreaIdarea($result['area_idarea']);
	}

	/**
	 * Get element instance by it's primary key(s).
	 * Will return null if no row was matched.
	 *
	 * @param PDO $db
	 * @return PersonasEntity
	 */
	public static function findById(PDO $db,$idpersonas) {
		$stmt=self::prepareStatement($db,self::SQL_SELECT_PK);
		$stmt->bindValue(1,$idpersonas);
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
		$o=new PersonasEntity();
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
		$stmt->bindValue(1,$this->getIdpersonas());
		$stmt->bindValue(2,$this->getNombres());
		$stmt->bindValue(3,$this->getApellidos());
		$stmt->bindValue(4,$this->getCorreo());
		$stmt->bindValue(5,$this->getClave());
		$stmt->bindValue(6,$this->getRolesIdroles());
		$stmt->bindValue(7,$this->getAreaIdarea());
	}


	/**
	 * Insert this instance into the database
	 *
	 * @param PDO $db
	 * @return mixed
	 */
	public function insertIntoDatabase(PDO $db) {
		$stmt=self::prepareStatement($db,self::SQL_INSERT);
		$this->bindValues($stmt);
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
	 * Update this instance into the database
	 *
	 * @param PDO $db
	 * @return mixed
	 */
	public function updateToDatabase(PDO $db) {
		$stmt=self::prepareStatement($db,self::SQL_UPDATE);
		$this->bindValues($stmt);
		$stmt->bindValue(8,$this->getIdpersonas());
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
		$stmt->bindValue(1,$this->getIdpersonas());
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
		return self::hashToDomDocument($this->toHash(), 'PersonasEntity');
	}

	/**
	 * get single PersonasEntity instance from a DOMElement
	 *
	 * @param DOMElement $node
	 * @return PersonasEntity
	 */
	public static function fromDOMElement(DOMElement $node) {
		$o=new PersonasEntity();
		$o->assignByHash(self::domNodeToHash($node, self::$FIELD_NAMES, self::$DEFAULT_VALUES, self::$FIELD_TYPES));
			$o->notifyPristine();
		return $o;
	}

	/**
	 * get all instances of PersonasEntity from the passed DOMDocument
	 *
	 * @param DOMDocument $doc
	 * @return PersonasEntity[]
	 */
	public static function fromDOMDocument(DOMDocument $doc) {
		$instances=array();
		foreach ($doc->getElementsByTagName('PersonasEntity') as $node) {
			$instances[]=self::fromDOMElement($node);
		}
		return $instances;
	}

}
?>