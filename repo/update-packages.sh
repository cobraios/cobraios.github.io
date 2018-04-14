#!/bin/dash
rm ./Packages|tr '\n' ''
rm ./Packages.bz2|tr '\n' ''
dpkg-scanpackages -m ./debs > Packages|tr '\n' ''
bzip2 -fks Packages|tr '\n' ''
