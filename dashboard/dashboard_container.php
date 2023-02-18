<?php
/**
 * @ Author: Bill Minozzi
 * @ Copyright: 2022 www.BillMinozzi.com
 * Created: 2023 - Jan 16 23
 * 
 */
if (!defined('ABSPATH')) {
  die('We\'re sorry, but you can not directly access this file.');
}

// https://minozzi.eu/wp-admin/tools.php?page=update_urls_admin_page&tab=update
?>


<div id="easy-update-urls-logo">
  <img src="<?php echo esc_attr(EASY_UPDATE_URLS_IMAGES); ?>/logo.png" width="250">
</div>
<?php
if (isset($_GET['tab']))
  $active_tab = sanitize_text_field($_GET['tab']);
else
  $active_tab = 'dashboard';
?>
<h2 class="nav-tab-wrapper">
  <a href="tools.php?page=easy_update_urls_admin_page&tab=dashboard" class="nav-tab">Dashboard</a>
  <a href="tools.php?page=easy_update_urls_admin_page&tab=update" class="nav-tab">Update URLs</a>
</h2>
<?php
if ($active_tab == 'update') {
  require_once(EASY_UPDATE_URLS_PATH . 'dashboard/update.php');
} else {
  require_once(EASY_UPDATE_URLS_PATH . 'dashboard/dashboard.php');
}
