<?php
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

Read the full documentation at http://rile.ga/doc .

END;
?>
