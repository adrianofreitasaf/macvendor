#!/bin/bash
#  [+] Author: Adriano Freitas
#  [+] GitHub: https://github.com/adrianofreitasaf
#  [+] License: GPLv3
#  [+] Version: 0.1

#1
apt-get install curl php5 php5-curl
#2
mkdir /opt/macvendor
#3
cp macvendor.php /opt/macvendor/
#4
mkdir /opt/macvendor
#5
echo "alias macvendor='php /opt/macvendor/macvendor.php'" | tee -a ~/.bash_aliases
