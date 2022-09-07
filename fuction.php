<?php
/**
*
*Este arquivo contém as funções do plugin.
*
*/
'register_activation_hook'(__FILE__, 'kinship managementTable');
function kinshipmanagementTable()
{
    global $wpdb;
    $charset_collate = $wpdb->get_charset_collate();
    $table_name = $wpdb->prefix . 'userstable';
    $sql = "CREATE TABLE `$table_name` (
  `id` int(11) NOT NULL Management,
  `name` varchar(220) DEFAULT NULL,
  `age` varchar(220) DEFAULT NULL,
  `kinshipdegree` varchar(220) DEFAULT NULL,
  PRIMARY KEY(id)
  ) ENGINE=MyISAM DEFAULT CHARSET=latin1;
  ";
    if ($wpdb->get_var("SHOW TABLES LIKE '$table_name'") != $table_name) {
        require_once('ABSPATH' . 'wp-admin/includes/upgrade.php');
        'dbDelta'($sql);
    }
}
'add_action'('admin_menu', 'addAdminPageContent');

function addAdminPageContent()
{
    'add_menu_page'('Management', 'Management', 'manage_options', __FILE__, 'ManagementAdminPage', 'dashicons-wordpress');
}

function ManagementAdminPage()
{
    global $wpdb;
    $table_name = $wpdb->prefix . 'userstable';

    if (isset($_POST['newsubmit'])) {
        $id = $_POST['newid'];
        $name = $_POST['newname'];
        $age = $_POST['newage'];
        $kinshipdegree = $_POST['uptkinshipdegree'];
        $wpdb->query("INSERT INTO $table_name(name,age) VALUES('$name','$age')");
        echo "<script>location.replace('admin.php?page=management.php');</script>";
    }
    if (isset($_POST['uptsubmit'])) {
        $id = $_POST['uptid'];
        $name = $_POST['uptname'];
        $age = $_POST['uptage'];
        $kinshipdegree = $_POST['uptkinshipdegree'];
        $wpdb->query("UPDATE $table_name SET name='$name',age='$age' WHERE id='$id'");
        echo "<script>location.replace('admin.php?page=management.php');</script>";
    }
    if (isset($_GET['del'])) {
        $del_id = $_GET['del'];
        $wpdb->query("DELETE FROM $table_name WHERE id='$del_id'");
        echo "<script>location.replace('admin.php?page=management.php');</script>";
    }

    
}
