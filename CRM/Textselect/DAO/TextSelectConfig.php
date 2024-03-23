<?php

/**
 * @package CRM
 * @copyright CiviCRM LLC https://civicrm.org/licensing
 *
 * Generated from com.joineryhq.textselect/xml/schema/CRM/Textselect/textSelectConfig.xml
 * DO NOT EDIT.  Generated by CRM_Core_CodeGen
 * (GenCodeChecksum:f182bc71c6562c652113fcb22f9713f5)
 */
use CRM_Textselect_ExtensionUtil as E;

/**
 * Database access object for the TextSelectConfig entity.
 */
class CRM_Textselect_DAO_TextSelectConfig extends CRM_Core_DAO {
  const EXT = E::LONG_NAME;
  const TABLE_ADDED = '';

  /**
   * Static instance to hold the table name.
   *
   * @var string
   */
  public static $_tableName = 'civicrm_text_select_config';

  /**
   * Should CiviCRM log any modifications to this table in the civicrm_log table.
   *
   * @var bool
   */
  public static $_log = TRUE;

  /**
   * Unique TextSelectConfig ID
   *
   * @var int|string|null
   *   (SQL type: int unsigned)
   *   Note that values will be retrieved from the database as a string.
   */
  public $id;

  /**
   * FK to Option Group
   *
   * @var int|string|null
   *   (SQL type: int unsigned)
   *   Note that values will be retrieved from the database as a string.
   */
  public $option_group_id;

  /**
   * custom field ID
   *
   * @var string|null
   *   (SQL type: varchar(255))
   *   Note that values will be retrieved from the database as a string.
   */
  public $field_id;

  /**
   * Class constructor.
   */
  public function __construct() {
    $this->__table = 'civicrm_text_select_config';
    parent::__construct();
  }

  /**
   * Returns localized title of this entity.
   *
   * @param bool $plural
   *   Whether to return the plural version of the title.
   */
  public static function getEntityTitle($plural = FALSE) {
    return $plural ? E::ts('Text Select Configs') : E::ts('Text Select Config');
  }

  /**
   * Returns all the column names of this table
   *
   * @return array
   */
  public static function &fields() {
    if (!isset(Civi::$statics[__CLASS__]['fields'])) {
      Civi::$statics[__CLASS__]['fields'] = [
        'id' => [
          'name' => 'id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => E::ts('ID'),
          'description' => E::ts('Unique TextSelectConfig ID'),
          'required' => TRUE,
          'usage' => [
            'import' => FALSE,
            'export' => FALSE,
            'duplicate_matching' => FALSE,
            'token' => FALSE,
          ],
          'where' => 'civicrm_text_select_config.id',
          'table_name' => 'civicrm_text_select_config',
          'entity' => 'TextSelectConfig',
          'bao' => 'CRM_Textselect_DAO_TextSelectConfig',
          'localizable' => 0,
          'FKClassName' => 'CRM_Core_DAO_OptionGroup',
          'readonly' => TRUE,
          'add' => NULL,
        ],
        'option_group_id' => [
          'name' => 'option_group_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => E::ts('Option Group ID'),
          'description' => E::ts('FK to Option Group'),
          'usage' => [
            'import' => FALSE,
            'export' => FALSE,
            'duplicate_matching' => FALSE,
            'token' => FALSE,
          ],
          'where' => 'civicrm_text_select_config.option_group_id',
          'table_name' => 'civicrm_text_select_config',
          'entity' => 'TextSelectConfig',
          'bao' => 'CRM_Textselect_DAO_TextSelectConfig',
          'localizable' => 0,
          'add' => NULL,
        ],
        'field_id' => [
          'name' => 'field_id',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => E::ts('Field ID'),
          'description' => E::ts('custom field ID'),
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
          'usage' => [
            'import' => FALSE,
            'export' => FALSE,
            'duplicate_matching' => FALSE,
            'token' => FALSE,
          ],
          'where' => 'civicrm_text_select_config.field_id',
          'table_name' => 'civicrm_text_select_config',
          'entity' => 'TextSelectConfig',
          'bao' => 'CRM_Textselect_DAO_TextSelectConfig',
          'localizable' => 0,
          'add' => NULL,
        ],
      ];
      CRM_Core_DAO_AllCoreTables::invoke(__CLASS__, 'fields_callback', Civi::$statics[__CLASS__]['fields']);
    }
    return Civi::$statics[__CLASS__]['fields'];
  }

  /**
   * Returns the list of fields that can be imported
   *
   * @param bool $prefix
   *
   * @return array
   */
  public static function &import($prefix = FALSE) {
    $r = CRM_Core_DAO_AllCoreTables::getImports(__CLASS__, 'text_select_config', $prefix, []);
    return $r;
  }

  /**
   * Returns the list of fields that can be exported
   *
   * @param bool $prefix
   *
   * @return array
   */
  public static function &export($prefix = FALSE) {
    $r = CRM_Core_DAO_AllCoreTables::getExports(__CLASS__, 'text_select_config', $prefix, []);
    return $r;
  }

  /**
   * Returns the list of indices
   *
   * @param bool $localize
   *
   * @return array
   */
  public static function indices($localize = TRUE) {
    $indices = [];
    return ($localize && !empty($indices)) ? CRM_Core_DAO_AllCoreTables::multilingualize(__CLASS__, $indices) : $indices;
  }

}
