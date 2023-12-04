# remove default website
#-----------------------
cd /opt/bitnami/apache2/htdocs 
rm -rf *

# clone github repo
#------------------
git clone -b staging https://github.com/groths89/wp-portfolio-site .

# Install the Composer dependencies
composer install