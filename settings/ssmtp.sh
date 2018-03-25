echo 'Copying ssmtp configuration file...'
sudo cp ssmtp.conf /etc/ssmtp/ssmtp.conf
echo 'Copying revaliases configuration file...'
sudo cp revaliases /etc/ssmtp/revaliases
echo 'Copying php.ini file...'
sudo cp phpLin.ini /opt/lampp/etc/php.ini
echo 'Changing permissions...'
sudo chmod 640 /etc/ssmtp/ssmtp.conf
sudo chown root:mail /etc/ssmtp/ssmtp.conf
echo 'Installation complete!'
