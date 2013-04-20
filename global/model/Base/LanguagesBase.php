<?php 
use Flywheel\Db\Manager;
use Flywheel\Model\ActiveRecord;
/**.
 * Languages
 *  This class has been auto-generated at 18/04/2013 11:49:16
 * @version		$Id$
 * @package		Model

 * @property integer $lang_id lang_id primary auto_increment type : int(11) unsigned
 * @property string $lang_code lang_code type : char(7) max_length : 7
 * @property string $title title type : varchar(50) max_length : 50
 * @property string $title_native title_native type : varchar(50) max_length : 50
 * @property string $sef sef type : varchar(50) max_length : 50
 * @property string $image image type : varchar(50) max_length : 50
 * @property string $description description type : varchar(512) max_length : 512
 * @property string $metakey metakey type : text max_length : 
 * @property string $metadesc metadesc type : text max_length : 
 * @property string $sitename sitename type : varchar(1024) max_length : 1024
 * @property integer $published published type : int(11)
 * @property integer $access access type : int(10) unsigned
 * @property integer $ordering ordering type : int(11)

 * @method void setLangId(integer $lang_id) set lang_id value
 * @method integer getLangId() get lang_id value
 * @method static \Languages[] findByLangId(integer $lang_id) find objects in database by lang_id
 * @method static \Languages findOneByLangId(integer $lang_id) find object in database by lang_id
 * @method static \Languages retrieveByLangId(integer $lang_id) retrieve object from poll by lang_id, get it from db if not exist in poll

 * @method void setLangCode(string $lang_code) set lang_code value
 * @method string getLangCode() get lang_code value
 * @method static \Languages[] findByLangCode(string $lang_code) find objects in database by lang_code
 * @method static \Languages findOneByLangCode(string $lang_code) find object in database by lang_code
 * @method static \Languages retrieveByLangCode(string $lang_code) retrieve object from poll by lang_code, get it from db if not exist in poll

 * @method void setTitle(string $title) set title value
 * @method string getTitle() get title value
 * @method static \Languages[] findByTitle(string $title) find objects in database by title
 * @method static \Languages findOneByTitle(string $title) find object in database by title
 * @method static \Languages retrieveByTitle(string $title) retrieve object from poll by title, get it from db if not exist in poll

 * @method void setTitleNative(string $title_native) set title_native value
 * @method string getTitleNative() get title_native value
 * @method static \Languages[] findByTitleNative(string $title_native) find objects in database by title_native
 * @method static \Languages findOneByTitleNative(string $title_native) find object in database by title_native
 * @method static \Languages retrieveByTitleNative(string $title_native) retrieve object from poll by title_native, get it from db if not exist in poll

 * @method void setSef(string $sef) set sef value
 * @method string getSef() get sef value
 * @method static \Languages[] findBySef(string $sef) find objects in database by sef
 * @method static \Languages findOneBySef(string $sef) find object in database by sef
 * @method static \Languages retrieveBySef(string $sef) retrieve object from poll by sef, get it from db if not exist in poll

 * @method void setImage(string $image) set image value
 * @method string getImage() get image value
 * @method static \Languages[] findByImage(string $image) find objects in database by image
 * @method static \Languages findOneByImage(string $image) find object in database by image
 * @method static \Languages retrieveByImage(string $image) retrieve object from poll by image, get it from db if not exist in poll

 * @method void setDescription(string $description) set description value
 * @method string getDescription() get description value
 * @method static \Languages[] findByDescription(string $description) find objects in database by description
 * @method static \Languages findOneByDescription(string $description) find object in database by description
 * @method static \Languages retrieveByDescription(string $description) retrieve object from poll by description, get it from db if not exist in poll

 * @method void setMetakey(string $metakey) set metakey value
 * @method string getMetakey() get metakey value
 * @method static \Languages[] findByMetakey(string $metakey) find objects in database by metakey
 * @method static \Languages findOneByMetakey(string $metakey) find object in database by metakey
 * @method static \Languages retrieveByMetakey(string $metakey) retrieve object from poll by metakey, get it from db if not exist in poll

 * @method void setMetadesc(string $metadesc) set metadesc value
 * @method string getMetadesc() get metadesc value
 * @method static \Languages[] findByMetadesc(string $metadesc) find objects in database by metadesc
 * @method static \Languages findOneByMetadesc(string $metadesc) find object in database by metadesc
 * @method static \Languages retrieveByMetadesc(string $metadesc) retrieve object from poll by metadesc, get it from db if not exist in poll

 * @method void setSitename(string $sitename) set sitename value
 * @method string getSitename() get sitename value
 * @method static \Languages[] findBySitename(string $sitename) find objects in database by sitename
 * @method static \Languages findOneBySitename(string $sitename) find object in database by sitename
 * @method static \Languages retrieveBySitename(string $sitename) retrieve object from poll by sitename, get it from db if not exist in poll

 * @method void setPublished(integer $published) set published value
 * @method integer getPublished() get published value
 * @method static \Languages[] findByPublished(integer $published) find objects in database by published
 * @method static \Languages findOneByPublished(integer $published) find object in database by published
 * @method static \Languages retrieveByPublished(integer $published) retrieve object from poll by published, get it from db if not exist in poll

 * @method void setAccess(integer $access) set access value
 * @method integer getAccess() get access value
 * @method static \Languages[] findByAccess(integer $access) find objects in database by access
 * @method static \Languages findOneByAccess(integer $access) find object in database by access
 * @method static \Languages retrieveByAccess(integer $access) retrieve object from poll by access, get it from db if not exist in poll

 * @method void setOrdering(integer $ordering) set ordering value
 * @method integer getOrdering() get ordering value
 * @method static \Languages[] findByOrdering(integer $ordering) find objects in database by ordering
 * @method static \Languages findOneByOrdering(integer $ordering) find object in database by ordering
 * @method static \Languages retrieveByOrdering(integer $ordering) retrieve object from poll by ordering, get it from db if not exist in poll


 */
abstract class LanguagesBase extends ActiveRecord {
    protected static $_tableName = 'languages';
    protected static $_phpName = 'Languages';
    protected static $_pk = 'lang_id';
    protected static $_alias = 'l';
    protected static $_dbConnectName = 'languages';
    protected static $_instances = array();
    protected static $_schema = array(
        'lang_id' => array('name' => 'lang_id',
                'type' => 'integer',
                'primary' => true,
                'auto_increment' => true,
                'db_type' => 'int(11) unsigned',
                'length' => 4),
        'lang_code' => array('name' => 'lang_code',
                'type' => 'string',
                'db_type' => 'char(7)',
                'length' => 7),
        'title' => array('name' => 'title',
                'type' => 'string',
                'db_type' => 'varchar(50)',
                'length' => 50),
        'title_native' => array('name' => 'title_native',
                'type' => 'string',
                'db_type' => 'varchar(50)',
                'length' => 50),
        'sef' => array('name' => 'sef',
                'type' => 'string',
                'db_type' => 'varchar(50)',
                'length' => 50),
        'image' => array('name' => 'image',
                'type' => 'string',
                'db_type' => 'varchar(50)',
                'length' => 50),
        'description' => array('name' => 'description',
                'type' => 'string',
                'db_type' => 'varchar(512)',
                'length' => 512),
        'metakey' => array('name' => 'metakey',
                'type' => 'string',
                'db_type' => 'text'),
        'metadesc' => array('name' => 'metadesc',
                'type' => 'string',
                'db_type' => 'text'),
        'sitename' => array('name' => 'sitename',
                'type' => 'string',
                'db_type' => 'varchar(1024)',
                'length' => 1024),
        'published' => array('name' => 'published',
                'default' => 0,
                'type' => 'integer',
                'auto_increment' => false,
                'db_type' => 'int(11)',
                'length' => 4),
        'access' => array('name' => 'access',
                'default' => 0,
                'type' => 'integer',
                'auto_increment' => false,
                'db_type' => 'int(10) unsigned',
                'length' => 4),
        'ordering' => array('name' => 'ordering',
                'default' => 0,
                'type' => 'integer',
                'auto_increment' => false,
                'db_type' => 'int(11)',
                'length' => 4),
);
    protected static $_validate = array(
        'lang_code' => array('require' => '"lang_code" is required!',
                'unique' => 'lang_code\'s values has already been taken'),
        'title' => array('require' => '"title" is required!'),
        'title_native' => array('require' => '"title_native" is required!'),
        'sef' => array('require' => '"sef" is required!',
                'unique' => 'sef\'s values has already been taken'),
        'image' => array('require' => '"image" is required!',
                'unique' => 'image\'s values has already been taken'),
        'description' => array('require' => '"description" is required!'),
        'metakey' => array('require' => '"metakey" is required!'),
        'metadesc' => array('require' => '"metadesc" is required!'),
        'sitename' => array('require' => '"sitename" is required!'),
        'published' => array('require' => '"published" is required!'),
        'access' => array('require' => '"access" is required!'),
        'ordering' => array('require' => '"ordering" is required!'),
);
    protected static $_cols = array('lang_id','lang_code','title','title_native','sef','image','description','metakey','metadesc','sitename','published','access','ordering');

    public function setTableDefinition() {
    }

    /**
     * save object model
     * @return boolean
     * @throws \Exception
     */
    public function save() {
        $conn = Manager::getConnection(self::getDbConnectName());
        $conn->beginTransaction();
        try {
            $this->_beforeSave();
            $status = $this->saveToDb();
            $this->_afterSave();
            $conn->commit();
            self::addInstanceToPool($this, $this->getPkValue());
            return $status;
        }
        catch (\Exception $e) {
            $conn->rollBack();
            throw $e;
        }
    }

    /**
     * delete object model
     * @return boolean
     * @throws \Exception
     */
    public function delete() {
        $conn = Manager::getConnection(self::getDbConnectName());
        try {
            $this->_beforeDelete();
            $this->deleteFromDb();
            $this->_afterDelete();
            $conn->commit();
            self::removeInstanceFromPool($this->getPkValue());
            return true;
        }
        catch (\Exception $e) {
            $conn->rollBack();
            throw $e;
        }
    }
}