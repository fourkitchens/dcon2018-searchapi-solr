# DrupalCon 2018 - Solr Search Example

## Requirements
- Composer
- Lando
- Docker

## Set-up
- Run: `composer install`
- Run: `lando start`
- Run: `lando db-import reference/db-export-content.sql.gz`
- Run: `lando drush cim sync -y`
- Run: `lando drush cr`
- Run: `lando drush sapi-c`
- Run: `lando drush sapi-i`

Having issues with admin styling not working correctly?
Run: `sudo chmod -R 777 docroot/sites/default/files`

User 1 credentials: admin/admin
