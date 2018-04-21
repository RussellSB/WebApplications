@echo off
xcopy php.ini ..\..\..\php\ /Y
xcopy sendmail.ini ..\..\..\sendmail\ /Y
xcopy ..\data ..\..\..\mysql\ /Y