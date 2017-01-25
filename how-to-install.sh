#!/bin/bash
#  [+] Author: Adriano Freitas
#  [+] GitHub: https://github.com/adrianofreitasaf
#  [+] License: GPLv3
#  [+] Version: 0.1.2

#1 - Install dependencies
apt-get install curl php5 php5-curl

#2 - Create directory
mkdir /opt/macvendor

#3 - Copy to directory
cp macvendor.php /opt/macvendor/

#5 - Create a alias
echo "alias macvendor='php /opt/macvendor/macvendor.php'" | tee -a ~/.bash_aliases

#6 - Refresh file ~/.bashrc
source ~/.bashrc
