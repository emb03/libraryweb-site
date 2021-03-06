<?php
/**
 * @file
 * uclalib_elysia_cron.features.user_permission.inc
 */

/**
 * Implements hook_user_default_permissions().
 */
function uclalib_elysia_cron_user_default_permissions() {
  $permissions = array();

  // Exported permission: 'administer elysia_cron'.
  $permissions['administer elysia_cron'] = array(
    'name' => 'administer elysia_cron',
    'roles' => array(
      'administrator' => 'administrator',
    ),
    'module' => 'elysia_cron',
  );

  return $permissions;
}
