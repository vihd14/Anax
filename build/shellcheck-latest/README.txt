This is a precompiled ShellCheck binary.
      https://www.shellcheck.net/

ShellCheck is a static analysis tool for shell scripts.
It's licensed under the GNU General Public License v3.0.
Information and source code is available on the website.

This binary was compiled on Sun Jun 24 19:07:14 UTC 2018.



      ====== Latest commits ======

commit f91b5bc2705b48d6436e92076dcf77866edcb518
Merge: b01f112 0cc4544
Author: Vidar Holen <vidar@vidarholen.net>
Date:   Sun Jun 24 11:47:53 2018 -0700

    Merge pull request #1256 from ngzhian/mv-stdin
    
    Do not warn on mv -i (fixes #1251)

commit b01f1128c70d5f4b06f2a3ec2d7c8a11167fe468
Author: Vidar Holen <spam@vidarholen.net>
Date:   Sat Jun 23 22:55:02 2018 -0700

    Make SC1012 "printf '\t'" suggestion use single quotes

commit db33294838bcfb3212ca689e1cf3d2bf19a0bba7
Merge: 75fb4da 963b39b
Author: Vidar Holen <vidar@vidarholen.net>
Date:   Sun Jun 24 11:46:26 2018 -0700

    Merge pull request #1257 from ngzhian/trailing-comma-exclude
    
    Allow trailing comma in exclude flag
