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

header("Content-Type: text/plain");

echo <<<END
What's rile.ga?
========

rile.ga is a file sharing service focused on TeX/LaTeX files.
Send us your LaTeX files, we'll compile them and link you the output.

Currently, we accept:
- .tex files
- .zip archives
- .tar.gz archives.

We'll compile the file master.tex if you upload an archive.
You can specify multiple compile passes with arara.




Basic usage
========

Anonymous upload
--------

$ cat file.tex | curl -F 'rilega=<-' http://rile.ga
http://rile.ga/abc123


You can specify which compiler to use
--------

$ cat file.tex | curl -F 'rilega=<-' -F 'c=xelatex' http://rile.ga
http://rile.ga/efg456


Registered users can edit their files
--------

$ cat file.tex | curl -F 'rilega=<-' -F 'u=user' -F 'p=pass' http://rile.ga
http://rile.ga/asdf56

$ cat file.tex | curl -F 'rilega=<-' -F 'u=user' -F 'p=pass' -F 'f=asdf56' http://rile.ga
http://rile.ga/asdf56 updated


Compile your document as soon as you save it
--------

Download http://rile.ga/pyrilega.zip , extract it and follow the instructions.
It will monitor your folder, send us your .tex and download the generated pdf.




Register at http://rile.ga/register

Read the full documentation at http://rile.ga/doc before using our service.

END;
?>
