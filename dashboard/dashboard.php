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
echo '<div class="wrap-easy-update-urls">' . "\n";
echo '<h2 class="title">Plugin easy-update-urls Instructions</h2>';
echo '<div class="database-description">';
echo esc_attr__("After moving a website, Easy Update URLs plugin lets you fix old URLs in content, excerpts, links, and custom fields.", "easy-update-urls");
echo '<br>';
echo '<br><strong>';
echo esc_attr__("Entering a wrong search or replace string could damage your database.", "easy-update-urls");
echo '<br>';
echo esc_attr__("Run a Backup of your database before begin.", "easy-update-urls");
echo '</strong><br>';
echo esc_attr__("You can use our free plugin:", "easy-update-urls");
echo '<br>';
echo '<a href="https://Database-Backup.com">Database Backup</a>';

 


echo '</div>';
echo '</div>';
