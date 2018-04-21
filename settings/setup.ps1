Copy-Item ".\php.ini" -Destination "..\..\..\php\" -Force
echo Copied php.ini file
Copy-Item ".\sendmail.ini" -Destination "..\..\..\sendmail\" -Force 
echo Copied sendmail file
Copy-Item "..\data\" -Destination "..\..\..\mysql\" -Recurse -Force
echo Copied DATA files
echo DONE!