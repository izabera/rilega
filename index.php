<?php
  if (isset($_POST['rilega'])) {
    include "insert.php";
  }
  else if (isset($_GET['pdf'])) {       // rile.ga/myfile     == rile.ga/?pdf=myfile
    include "pdf.php";
  }
  else if (isset($_GET['src'])) {       // rile.ga/myfile/src == rile.ga/?src=myfile
    include "src.php";
  }
  else if (isset($_GET['png'])) {       // rile.ga/myfile/png == rile.ga/?png=myfile
    include "png.php";
  }
  else if (isset($_GET['log'])) {       // rile.ga/myfile/log == rile.ga/?pdf=myfile
    include "pdf.php";
  }
  else if (isset($_GET['register'])) {  // rile.ga/register   == rile.ga/?register
    include "register.php";
  }
  else if (isset($_POST['c'])) {        // c=code
    include "activateuser.php";
  }
  else if (isset($_POST['u']) && isset($_POST['p']) && isset($_POST['m'])) {
    include "createuser.php";
  }
  else if (isset($_GET['doc'])) {       // rile.ga/doc        == rile.ga/?doc
    include "fulldoc.php";
  }
  else if (isset($_GET['user'])) {      // rile.ga/user       == rile.ga/?user
    include "userpage.php";
  }
  else if (isset($_GET['license'])) {   // rile.ga/license    == rile.ga/?license
    include "license.php";
  }
  else {
    include "shortdoc.php";
  }
?>
