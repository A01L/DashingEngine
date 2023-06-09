<?php
// include ectr
require_once "ectr/main.php";

$conn = $GLOBALS['ectr_connect'];  
$sql = "SELECT * FROM `route`";
if($result = $conn->query($sql)){
   $rowsCount = $result->num_rows; // ID - constant
   foreach($result as $row){
   $url = $row['name'];
   $tml = $row['type'];

   route("/$url", "main.php");
   route("/$url/Gallery", "template/$tml/gallery.php");

   }
   if ($rowsCount == "0") {           
      
   }
   $result->free();
} else{
      echo "Ошибка: " . $conn->error;
  }

// routing files for front in folder 'view'
route("/", "panel/login.php");
route("/mypanel", "panel/Edit.php");
route("/Login", "panel/login.php");
route("/Register", "panel/register.php");
route("/signup", "panel/vendor/signup.php");
route("/signin", "panel/vendor/signin.php");
route("/Out", "panel/vendor/out.php");
route("/upd_account", "panel/vendor/upd_account.php");
route("/Editp", "panel/vendor/upd_pages.php");
route("/Install", "panel/install.php");
route("/Uninstall", "panel/uninstall.php");
route("/Posting", "panel/posting.php");
route("/Form", "panel/form.php");
route("/EditP", "panel/edit_post.php");
route("/Galery", "panel/galery.php");
route("/galup", "panel/upload_galleru.php");
route("/Verify", "panel/verify.php");
route("/verificate", "panel/verificate.php");
route("/Myorg", "panel/myorg.php");
//route("/Install", "template/eorox/install.php");

//sidebar pages
route("/price", "panel/price.php");
route("/faq", "panel/faq.php");
route("/user-profile", "panel/profile.php");
route("/form-box", "panel/form-box.php");
route("/tracker", "panel/tracker.php");
route("/Edit", "panel/edit.php");
route("/Post", "panel/post.php");

//system pages
route("/DeleteP", "panel/delete_post.php");
route("/RPosting", "panel/reposting.php");
route("/DellGall", "panel/delete_gallery.php");
route("/upd_links", "panel/vendor/upd_links.php");
route("/Link", "tracker.php");
route("/update_bin", "panel/vendor/update_bin.php");

$conn = $GLOBALS['ectr_connect'];  
$sql = "SELECT `id` FROM `blogs`";
if($result = $conn->query($sql)){
   $rowsCount = $result->num_rows; // ID - constant
   foreach($result as $row){
   $url = $row['id'];
   route("/Blog/$url", "blog.php");

   }
   if ($rowsCount == "0") {           
      
   }
   $result->free();
} else{
      echo "Ошибка: " . $conn->error;
  }

// start routing system
startRoute();
?>