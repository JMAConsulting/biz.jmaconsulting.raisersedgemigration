<?php

class CRM_RaisersEdgeMigration_FieldInfo {

  public static function getCustomGroups() {
    $customGroups = [
      'RE_contact_details' => [
        'title' => ts('RE contact details', array('domain' => 'org.civicrm.raisersedgemigration')),
        'name' => 'RE_contact_details',
        'extends' => 'Contact',
      ],
      'RE_group_details' => [
        'title' => ts('RE group details', array('domain' => 'org.civicrm.raisersedgemigration')),
        'name' => 'RE_group_details',
        'extends' => 'Group',
      ],
      'RE_address_details' => [
        'title' => ts('RE address details', array('domain' => 'org.civicrm.raisersedgemigration')),
        'name' => 'RE_address_details',
        'extends' => 'Address',
      ],
      'RE_activity_details' => [
        'title' => ts('RE activity details', array('domain' => 'org.civicrm.raisersedgemigration')),
        'name' => 'RE_activity_details',
        'extends' => 'Activity',
      ],
      'RE_relationship_details' => [
        'title' => ts('RE relationship details', array('domain' => 'org.civicrm.raisersedgemigration')),
        'name' => 'RE_relationship_details',
        'extends' => 'Relationship',
      ],
    ];
    return $customGroups;
  }

  public static function getCustomFields($customGroupName) {
    $customGroups = [
      'RE_contact_details' => [
        're_contact_id' => [
          'label' => ts('RE Contact ID', array('domain' => 'org.civicrm.raisersedgemigration')),
          'text_length' => 10,
          'data_type' => 'String',
          'html_type' => 'Text',
          'name' => 're_contact_id',
        ],
      ],
      'RE_group_details' => [
        're_group_id' => [
          'label' => ts('RE Group ID', array('domain' => 'org.civicrm.raisersedgemigration')),
          'text_length' => 10,
          'data_type' => 'String',
          'html_type' => 'Text',
          'name' => 're_group_id',
        ],
      ],
      'RE_address_details' => [
        're_address_id' => [
          'label' => ts('RE Address ID', array('domain' => 'org.civicrm.raisersedgemigration')),
          'text_length' => 10,
          'data_type' => 'String',
          'html_type' => 'Text',
          'name' => 're_address_id',
        ],
        're_location_type' => [
          'label' => ts('RE Location Type', array('domain' => 'org.civicrm.raisersedgemigration')),
          'text_length' => 10,
          'data_type' => 'String',
          'html_type' => 'Text',
          'name' => 're_location_type',
        ],
      ],
      'RE_activity_details' => [
        're_activity_id' => [
          'label' => ts('RE Activity ID', array('domain' => 'org.civicrm.raisersedgemigration')),
          'text_length' => 10,
          'data_type' => 'String',
          'html_type' => 'Text',
          'name' => 're_activity_id',
        ],
      ],
      'RE_relationship_details' => [
        're_relationship_id' => [
          'label' => ts('RE Relationship ID', array('domain' => 'org.civicrm.raisersedgemigration')),
          'text_length' => 64,
          'data_type' => 'String',
          'html_type' => 'Text',
          'name' => 're_relationship_id',
        ],
        're_AB_relationship' => [
          'label' => ts('RE A to B Relationship', array('domain' => 'org.civicrm.raisersedgemigration')),
          'text_length' => 64,
          'data_type' => 'String',
          'html_type' => 'Text',
          'name' => 're_AB_relationship',
        ],
        're_BA_relationship' => [
          'label' => ts('RE B to A Relationship', array('domain' => 'org.civicrm.raisersedgemigration')),
          'text_length' => 64,
          'data_type' => 'String',
          'html_type' => 'Text',
          'name' => 're_BA_relationship',
        ],
      ],
    ];
    return CRM_Utils_Array::value($customGroupName, $customGroups, []);
  }

  public static function getCustomTableName($CGName) {
    return civicrm_api3('CustomGroup', 'getvalue', [
      'name' => $CGName,
      'return' => 'table_name',
    ]);
  }

  public static function getCustomFieldColumnName($CFName) {
    return civicrm_api3('CustomField', 'getvalue', [
      'name' => $CFName,
      'return' => 'column_name',
    ]);
  }

}
