## Server Site Automated Deployment Script
rm -rf CodeUpGauntlet
git clone https://github.com/caucajun/CodeUpGauntlet.git
cp -af CodeUpGauntlet/* /var/www/html/
exit
