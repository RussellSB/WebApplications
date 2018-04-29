# TODO : Update script file for
#     httpd.conf movement
#     my.ini movement

echo 'Copying ssmtp configuration file...'
sudo cp ./linConfig/ssmtp.conf /etc/ssmtp/ssmtp.conf
echo 'Copying revaliases configuration file...'
sudo cp ./linConfig/revaliases /etc/ssmtp/revaliases
echo 'Copying php.ini file...'
sudo cp ./linConfig/phpLin.ini /opt/lampp/etc/php.ini
echo 'Changing permissions...'
sudo chmod 777 /etc/ssmtp
sudo chmod 640 /etc/ssmtp/ssmtp.conf
sudo chown root:mail /etc/ssmtp/ssmtp.conf
echo 'Preparing mySQL database...'
/opt/lampp/bin/mysql --binary-mode --user=root --password= < ./sqlData/MySQLData.sql
echo 'Copying mySQL config...'
sudo cp ./svrConfig/my.cnf /opt/lampp/etc/my.cnf
echo 'Copying Apache config...'
sudo cp ./svrConfig/httpd.conf /opt/lampp/etc/httpd.conf
echo 'Setup complete!'
