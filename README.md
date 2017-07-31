# galletalaravel
Tips, ayuda , anécdotas sobre el uso del framework Laravel ..


#
loc.galletalaravel.com
    <VirtualHost *:80>
       DocumentRoot "/var/www/html/galletalaravel"
       ServerName loc.galletalaravel.com
    
       # This should be omitted in the production environment
       #SetEnv APPLICATION_ENV development
    
       <Directory "/var/www/html/galletalaravel">
           Options Indexes MultiViews FollowSymLinks
           AllowOverride All
           Order allow,deny
           Allow from all
       </Directory>
    
    </VirtualHost>
