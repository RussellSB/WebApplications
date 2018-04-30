echo 'Updating database...'
/opt/lampp/bin/mysqldump --user=root --password= --routines --add-drop-database --triggers --flush-privileges --default-character-set=utf8 --databases products > ./sqlData/MySQLData.sql
echo 'Updating php.ini...'
sudo cp /opt/lampp/etc/php.ini ./linConfig/phpLin.ini
echo 'Updating ssmtp.conf...'
sudo cp /etc/ssmtp/ssmtp.conf ./linConfig/ssmtp.conf
echo 'Updating revaliases...'
sudo cp /etc/ssmtp/revaliases ./linConfig/revaliases
echo 'Updating mySQL config...'
sudo cp /opt/lampp/etc/my.cnf ./svrConfig/my.cnf
echo 'Updating Apache config...'
sudo cp /opt/lampp/etc/httpd.conf ./svrConfig/httpdLin.conf
echo 'Update complete!'
