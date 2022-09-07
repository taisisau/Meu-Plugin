<?php
/*
Plugin Name: kinship management
Plugin URI: http://taisisau.eu1.alfasoft.pt/
Description: A simple plugin that allows you to perform Create (INSERT), Read (SELECT), Update and Delete operations.
Version: 1.0.0
Author: Tais Isau
Author URI: http://taisisau.eu1.alfasoft.pt/
License: GPL2
*/

    if(isset($_POST['submit']))
    {
        print_r($_POST['id']);
        print_r($_POST['Name']);
        print_r($_POST['Age']);
        print_r($_POST['Kinship degree']);
        print_r($_POST['Actions']);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>kinship management</title>

<head>
    <tbody>
        <section class= "content">
            <div class="wrap">
                <h2>kinship management</h2>
                <div class= "form" method="post" action= "index.php">
                <table class="wp-list-table widefat striped">
                    <thead>
                        <tr>
                            <th width="25%">ID</th>
                            <th width="25%">Name</th>
                            <th width="25%">Age</th>
                            <th width="25%">Kinship degree</th>
                            <th width="25%">Actions</th>
                           </tr>
                    </thead>
    </tbody>
                    <tbody>
                        <form action="" method="post">
                            <tr>
                              <td><input type="text" id="newid" name="newid"></td>
                              <td><input typ="etext" id="newname" name="newname"></td>
                              <td><input type="text" id="newage" name="newage"></td>
                              <td><input typ="etext" id="newKinship degree" name="newKinship degree"></td>
                              <td><button id="newsubmit" name="newsubmit" type="submit">INSERT</button></td>
                            </tr>
                        </form>
                            <tr>
                                <td width='25%'><input type='text' id='uptid' name='uptid' value='$print->id'></td>
                                <td width='25%'><input type='text' id='uptname' name='uptname' value='$print->name'></td>
                                <td width='25%'><input type='text3' id='uptage' name='uptage' value='$print->age'></td>
                                <td width='25%'><input type='text' id='uptkinshipdegree' name='uptkinshipdegree' value='$print->kinshipdegree'></td>
                                <td width='25%'><a href='admin.php?page=management.php&upt=$print->id'><button type='button'>UPDATE</button></a>
                                <a href='admin.php?page=management.php&del=$print->id'><button type='button'>DELETE</button></a></td>
                            </tr>
                        <form action='' method='post'>
                            <tr>
                            <td width='25%'><input type='text' id='uptid' name='uptid' value='$print->id'></td>
                            <td width='25%'><input type='text' id='uptname' name='uptname' value='$print->name'></td>
                            <td width='25%'><input type='text' id='uptage' name='uptage' value='$print->age'></td>
                            <td width='25%'><input type='text' id='uptkinshipdegree' name='uptkinshipdegree' value='$print->kinshipdegree'></td>
                            <td width='25%'><button id='uptsubmit' name='uptsubmit' type='submit'>UPDATE</button> <a href='admin.php?page=management.php'><button type='button'>CANCEL</button></a></td>
                            </tr>
                        </form>
                    </tbody>
                </table>
            </div>
            </div>
        </section>
</thead>

