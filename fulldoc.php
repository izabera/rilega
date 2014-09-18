<?php
header("Content-Type: text/plain");

echo <<<END
Table of contents
========

- Version
- Usage
- File visibility
- Directory structure
- Limitations
- Paying users' restrictions
- Fair usage
- Why this instead of RandomOtherService?
- Bugs
- Support us



Version
========

This is rilega 0.1, first public release.

We're running TeXLive 2014.

The following compilers are supported:
- pdftex
- pdflatex
- luatex
- lualatex
- xetex
- xelatex

For multiple compiles and special options, use arara.
However, \write18 is disabled for security reasons.




Usage
========

Send a POST request to http://rile.ga with the following parameters:


rilega=   required
          your data

c=        optional
          tells us which compiler to use
          available options: pdftex, pdflatex, xetex, xelatex, luatex, lualatex
          if not specified or invalid, pdflatex will be used
          overridden by arara directives

u=        optional
          the username
          must be used with p=

p=        optional
          the password
          required to view hidden files

h=        optional
          tells us to hide a file
          if set to true, the file will be accessible only with the password
          any other value will be treated as false
          must be used with u= and p=

f=        optional
          the file you want to update
          must be used with u= and p=

a=        optional
          archive type
          available options: .zip, .tar.bz
          required if you upload an archive




Directory structure
========

rile.ga/myfile                same as rile.ga/myfile/pdf/last
rile.ga/myfile/v3             same as rile.ga/myfile/pdf/last/v3

rile.ga/myfile/pdf            same as rile.ga/myfile/pdf/last
rile.ga/myfile/pdf/last       pdf output of rile.ga/myfile/src/last
rile.ga/myfile/pdf/v3         pdf output of rile.ga/myfile/src/v3

rile.ga/myfile/png            same as rile.ga/myfile/png/last
rile.ga/myfile/png/p5         same as rile.ga/myfile/png/last/p5
rile.ga/myfile/png/last       png output of rile.ga/myfile/src/last , page 1
rile.ga/myfile/png/last/p5    png output of rile.ga/myfile/src/last , page 5
rile.ga/myfile/png/v3         png of third version, page 1
rile.ga/myfile/png/v3/p5      png of third version, page 5

rile.ga/myfile/src            same as rile.ga/myfile/src/last
rile.ga/myfile/src/last       source code of last version
rile.ga/myfile/src/v3         source code of third version

rile.ga/myfile/log            same as rile.ga/myfile/log/last
rile.ga/myfile/log/last       compile log of last version
rile.ga/myfile/log/v3         compile log of third version

rile.ga/user/myname           your profile page with all your documents

rile.ga/license               full text of GNU Affero GPL v3

rile.ga/doc                   full documentation (this page)




Limitations
========

Time limitations
--------

- Anonymous users have up to 10s compile time.
  If you require multiple compile runs, 10s will be the total time.

- Registered users have up to 30s compile time.
  If you require multiple compile runs, 30s will be the total time.

These limitations don't apply to the png conversion time.


Input file limitations
--------

- Anonymous users' input can take up to 1MiB.
- Registered users' input can take up to 10MiB.


Output file limitations
--------

The following limitations only apply to the .pdf output size.

- Anonymous users' output can take up to 2MiB.
- Registered users' output can take up to 20MiB.

If your output is bigger, a notice will be displayed instead.




Paying users' restrictions
========

If you donate 10 USD or more, all these limitations are gone forever.
Thus, if you need more time/space, please consider making a donation.
However, fair usage limitations still apply (see below).




Fair usage
========

We're not enforcing any limit on how many files you can upload.
However, our server is not free: each compile costs us cpu power and space.

Since this is primarly meant to be a file sharing service, we need to ask you
not to use it as your only LaTeX compile resource.

E.g.: sharing your research thesis with a ton of TikZ figures is totally fine.
Uploading it every time you change a single character is not.

We hope you'll understand.




Why this instead of RandomOtherService?
========

- This is free and will be free forever
- rilega is free software, released under the GNU Affero GPL license v3
- The full source code is available on GitHub
- Command line interface, easy to automate and script




Bugs
========

Please report any bug and feature request to izaberina@gmail.com .




Support us
========

If you like us, please donate at -insert-paypal-here-

END;
?>
