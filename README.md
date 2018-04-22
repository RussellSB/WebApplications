# WebApplication Assignment
An example of a website using an Apache server.

## Before we begin...
You're going to need XAMPP for this to work. Install XAMPP from [here](https://www.apachefriends.org/download.html). **Make sure it is the 5.6.34 version.**

If you are on Unix, you will also need SSMTP. Using Ubuntu, run this command: `sudo apt-get install ssmtp`


## Preparing Website/Server Settings
### Windows
- Navigate to your `xampp` folder, and open the `htdocs` folder.
- Clone this repository in there.
  - *You should have a `WebApplications` folder inside `htdocs`*
- Navigate into `WebApplications/settings`
  - Run `setup.bat` by double clicking on it.

### Linux
- Clone this repository into `/opt/lampp/htdocs/`
- Navigate to `WebApplications/settings/`
- Run the script `setup.sh` using the command `sudo ./setup.sh`
  - It's important you run this command as administrator, since it is placing important ssmtp configuration files and also changing their permissions.


## Loading the website
- Run the XAMPP control panel.
- Start the Apache server.
  - *If there is an X next to it, press on it to install the service.*
  - *If you are a Windows user and it doesn't work, run it as administrator and try again*
- Go to your browser and load `localhost:8080/WebApplications/page-structures/frontPage.php`.
