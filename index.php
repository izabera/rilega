<?php
/*
    rilega - A file sharing service focused on TeX/LaTeX files
    Copyright (C) 2014 izabera

    This program is free software: you can redistribute it and/or modify
    it under the terms of the GNU Affero General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU Affero General Public License for more details.

    You should have received a copy of the GNU Affero General Public License
    along with this program.  If not, see <http://www.gnu.org/licenses/>.
*/

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
