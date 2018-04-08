# DrupalCon 2018 - Solr Search Example

## Requirements
- Composer
- Lando
- Docker

## Set-up
- Run: `composer install`
- Run: `lando start`
- Run: `lando db-import reference/db.sql.gz`
- Run: `lando drush cim sync -y`

Having issues with admin styling not working correctly?
Run: `sudo chmod -R 777 docroot/sites/default/files`
