/* August 21 2013 */
/* Related to: Ubercart / Drupal 6 / Views / California / Sales Tax */

/* For admins and store owners that need to create a list of sales tax paid on all deliveries sent to California. This file incldues :

countybycity.sql file -- contains CA cities with their equivalent county -- that needs to be uploaded to your database

Calif_BOE_Tax.txt file -- this is the view we use to check on orders with shipping cities of California. You can use this to import the view to your version.

city_rates_clean.csv - comma separated file of cities by county

views-view-field--Calif-BOE-Tax--feed-1--delivery-city-1.tpl.php  - template file for the CSV version
views-view-field--Calif-BOE-Tax--page-2--delivery-city-1.tpl.php - template file for the WEB version

In the view, there is an additional Delivery City field, which we then check against the countybycity table.


 */

