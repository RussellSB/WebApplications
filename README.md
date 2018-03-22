# WebApplications
An example of a website using an Apache server.

## Before we begin...
The only thing you need to do before downloading this repo is to download 
and install XAMPP from [here](https://www.apachefriends.org/download.html).

If you're using this on Linux, you need to install sendmail. On Ubuntu this command is:
`sudo apt-get install sendmail`



## Preparing website and server settings.
- Navigate to your `xampp`[windows] or `lampp` [linux] folder, and open the `htdocs` folder.
- Clone this repository in there.
  - *You should have a `WebApplications` folder inside `htdocs`*
- **For Windows**
  - Copy the file `WebApplications/settings/php.ini` to `xampp/php`.
  - Copy the file `WebApplications/settings/sendmail.ini` to `xampp/sendmail`.
- **For Linux**
  - Copy the file `WebApplications/settings/php.ini` to `lampp/etc`.
  - Copy the file `WebApplications/settings/sendmail.ini` to `lampp/etc`.

## Loading the website
- Run XAMPP.
- Start the Apache server.
  - *If there is an X next to it, press on it to install the service.*
  - *If you are a Windows user and it doesn't work, run it as administrator and try again*
- Go to your browser and load `localhost:8080/WebApplications/html-structures/frontPage.html`.

## Todo
- Install sendmail on Linux and update the README.md
