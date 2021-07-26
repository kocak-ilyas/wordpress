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
{
   // add_post_meta(91, "whatsappNumber", "905373051855", true);
   // add_post_meta(92, "whatsappMessage", "sample", true);
   $postmetaPhoneNumber = get_post_meta(91, "whatsappNumber", true);
   $postmetaMessage = get_post_meta(92, "whatsappMessage", true);
?>
   <form method="post">
      <label>Whatsapp Contact Number: </label><br>
      <input type="number" name="phoneNumber" value="<?php echo $postmetaPhoneNumber ?>"><br>
      <label>Whatsapp Message: </label><br>
      <input type="text" name="message" value="<?php echo $postmetaMessage ?>">
      <hr>
      <input type="submit" value="Update">
   </form>
   <?php
   $phoneNumber =  $_POST["phoneNumber"];
   $message =  $_POST["message"];

   echo $postmetaPhoneNumber;
   echo $postmetaMessage;

   if ($_POST) {
      if ($phoneNumber !=  $postmetaPhoneNumber) {
         update_post_meta(91, "whatsappNumber", $phoneNumber, $postmetaPhoneNumber, true);
      } elseif ($phoneNumber !=  $postmetaPhoneNumber) {
         echo "Same Number";
      }
      if ($message !=  $postmetaMessage) {
         update_post_meta(92, "whatsappMessage", $message, $postmetaMessage, true);
      } elseif ($message !=  $postmetaMessage) {
         echo "Same Message";
      }  
   }
}

add_action("wp_head", "whatsappButton");
function whatsappButton()
{
   $pluginPath = plugin_dir_url(__FILE__);
   $postmetaPhoneNumber = get_post_meta(91, "whatsappNumber", true);
   $postmetaMessage = get_post_meta(92, "whatsappMessage", true);
   ?>
   <link rel="stylesheet" rel="text/css" href="<?php echo $pluginPath . 'assets/button.css' ?>">

   <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

   <a href="https://wa.me/<?php echo $postmetaPhoneNumber; ?>?text=<?php echo $postmetaMessage; ?>" class="button">
      <i class="fa fa-whatsapp"></i>
   </a>
<?php
}
?>