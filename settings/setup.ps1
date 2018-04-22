Copy-Item ".\winConfig\php.ini" -Destination "..\..\..\php\" -Force
echo Copied php.ini file
Copy-Item ".\winConfig\sendmail.ini" -Destination "..\..\..\sendmail\" -Force
echo Copied sendmail file
Copy-Item "..\data\" -Destination "..\..\..\mysql\" -Recurse -Force
echo Copied DATA files
Copy-Item ".\svrConfig\httpd.conf" -Destination "..\..\..\apache\conf" -Force
echo Copied Apache files
Copy-Item ".\svrConfig\my.ini" -Destination "..\..\..\mysql\bin" -Force
echo Copied mySQL files
echo DONE!
