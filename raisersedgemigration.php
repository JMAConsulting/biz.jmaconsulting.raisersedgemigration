<?php

require_once 'raisersedgemigration.civix.php';
use CRM_Raisersedgemigration_ExtensionUtil as E;

/**
 * Implements hook_civicrm_config().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_config
 */
function raisersedgemigration_civicrm_config(&$config) {
  _raisersedgemigration_civix_civicrm_config($config);
}

/**
 * Implements hook_civicrm_xmlMenu().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_xmlMenu
 */
function raisersedgemigration_civicrm_xmlMenu(&$files) {
  _raisersedgemigration_civix_civicrm_xmlMenu($files);
}

/**
 * Implements hook_civicrm_install().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_install
 */
function raisersedgemigration_civicrm_install() {
  _raisersedgemigration_civix_civicrm_install();
}

/**
 * Implements hook_civicrm_postInstall().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_postInstall
 */
function raisersedgemigration_civicrm_postInstall() {
  _raisersedgemigration_civix_civicrm_postInstall();
}

/**
 * Implements hook_civicrm_uninstall().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_uninstall
 */
function raisersedgemigration_civicrm_uninstall() {
  _raisersedgemigration_civix_civicrm_uninstall();
}

/**
 * Implements hook_civicrm_enable().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_enable
 */
function raisersedgemigration_civicrm_enable() {
  _raisersedgemigration_civix_civicrm_enable();
}

/**
 * Implements hook_civicrm_disable().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_disable
 */
function raisersedgemigration_civicrm_disable() {
  _raisersedgemigration_civix_civicrm_disable();
}

/**
 * Implements hook_civicrm_upgrade().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_upgrade
 */
function raisersedgemigration_civicrm_upgrade($op, CRM_Queue_Queue $queue = NULL) {
  return _raisersedgemigration_civix_civicrm_upgrade($op, $queue);
}

/**
 * Implements hook_civicrm_managed().
 *
 * Generate a list of entities to create/deactivate/delete when this module
 * is installed, disabled, uninstalled.
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_managed
 */
function raisersedgemigration_civicrm_managed(&$entities) {
  _raisersedgemigration_civix_civicrm_managed($entities);
}

/**
 * Implements hook_civicrm_caseTypes().
 *
 * Generate a list of case-types.
 *
 * Note: This hook only runs in CiviCRM 4.4+.
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_caseTypes
 */
function raisersedgemigration_civicrm_caseTypes(&$caseTypes) {
  _raisersedgemigration_civix_civicrm_caseTypes($caseTypes);
}

/**
 * Implements hook_civicrm_angularModules().
 *
 * Generate a list of Angular modules.
 *
 * Note: This hook only runs in CiviCRM 4.5+. It may
 * use features only available in v4.6+.
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_angularModules
 */
function raisersedgemigration_civicrm_angularModules(&$angularModules) {
  _raisersedgemigration_civix_civicrm_angularModules($angularModules);
}

function raisersedgemigration_civicrm_merge($context, $sqls, $mainId, $otherId, $tables) {
  if ($context == 'sql') {
    $originalConstituent = CRM_Core_DAO::singleValueQuery("SELECT merged_re_constituent_ids_754 FROM civicrm_value_re_contact_de_35 WHERE entity_id = $mainId LIMIT 1 ") ?: '';
    $originalConstituent = explode(',', $originalConstituent);

    $otherConstituent = CRM_Core_DAO::singleValueQuery("SELECT re_contact_id_736 FROM civicrm_value_re_contact_de_35 WHERE entity_id = $otherId LIMIT 1 ");
    if (!empty($otherConstituent)) {
      $originalConstituent = array_merge($originalConstituent, [$otherConstituent]);
      CRM_Core_DAO::executeQuery(sprintf("UPDATE civicrm_value_re_contact_de_35 SET merged_re_constituent_ids_754 = '%s' WHERE enity_id = %d ", implode(',', $originalConstituent), $mainId));
    }
  }
}

/**
 * Implements hook_civicrm_alterSettingsFolders().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_alterSettingsFolders
 */
function raisersedgemigration_civicrm_alterSettingsFolders(&$metaDataFolders = NULL) {
  _raisersedgemigration_civix_civicrm_alterSettingsFolders($metaDataFolders);
}

/**
 * Implements hook_civicrm_entityTypes().
 *
 * Declare entity types provided by this module.
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_entityTypes
 */
function raisersedgemigration_civicrm_entityTypes(&$entityTypes) {
  _raisersedgemigration_civix_civicrm_entityTypes($entityTypes);
}

// --- Functions below this ship commented out. Uncomment as required. ---

/**
 * Implements hook_civicrm_preProcess().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_preProcess
 *
function raisersedgemigration_civicrm_preProcess($formName, &$form) {

} // */

/**
 * Implements hook_civicrm_navigationMenu().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_navigationMenu
 *
function raisersedgemigration_civicrm_navigationMenu(&$menu) {
  _raisersedgemigration_civix_insert_navigation_menu($menu, 'Mailings', array(
    'label' => E::ts('New subliminal message'),
    'name' => 'mailing_subliminal_message',
    'url' => 'civicrm/mailing/subliminal',
    'permission' => 'access CiviMail',
    'operator' => 'OR',
    'separator' => 0,
  ));
  _raisersedgemigration_civix_navigationMenu($menu);
} // */
