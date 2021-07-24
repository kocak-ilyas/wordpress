<?php
/*
Plugin Name: First Plugin
Plugin URI: http://wordpress.org/plugins/first-plugin/
Description: my first-plugin.
Author: ilyas
Version: 0.1.0
Author URI: http://ilyaskocak.netlify.app/
*/
add_action("admin_menu", "myPlugin");

function myPlugin()
{
   add_menu_page("Title of Plugin", "Eklenti Adım", "manage_options", "pluginUrl", "pluginDetail");
}
function pluginDetail()
{ ?>
   <form method="post">
      <label for="name">İsim: </label>
      <input type="text" name="name">
      <input type="submit">
   </form>
<?php
   if ($_POST) {
      $new_data = $_POST["name"];
      $old_data = get_post_meta(9, "name", true);
      if ($new_data != $old_data) {
         update_post_meta(9, "name", $new_data, $old_data, true);
      }
      echo $old_data;
   }
}
?>