# Address Book

#### Epicodus PHP Week 1 Project, 2/10/2017

#### By Dan Lauby

## Description

This project is an address book that allows the user to input a contact and display a list of saved contacts. The user has the option to add addtional contacts and the ability to clear their address book. This application is structured with Silex and Twig frameworks.

## Setup/Installation Requirements
* Clone project, located at [php-address-book](https://github.com/danlauby/php-address-book.git)
* Run `composer install --prefer-source --no-interaction` from project root
* Start PHP in web folder to use Silex
* Access application by typing localhost:8000 in url of preferred browser

## Known Bugs
* No known bugs

## Support and contact details
* Contact [Dan Lauby](https://github.com/danlauby) regarding any questions or comments.

## Technologies Used
* PHP
* composer
* Silex
* Twig
* HTML
* CSS
* Bootstrap
* git

## Copyright (c)
* 2017 Dan Lauby

## License
* MIT

## Specifications
 * Setup Silex/Twig app
* Create Contact Class with name, address, and phone number

|Behavior|Input|Output|
|--------|-----|------|
|$new_contact = new Contact()|"new-contact-name","new-contact-address","new-contact-phone-number"|"new-contact-name","new-contact-address","new-contact-phone-number"|
|Create array to store all contacts|list_of_contacts = new-contact|list_of_contacts = [contact, contact, new-contact]|
|Display all Contact objects in list-of-contacts array to home page|Select 'add another contact' link|Current contact will display on home page|
|Give option to delete all contacts in address book|Select 'Delete Contacts' button|list_of_contacts = array()|
|Check if name has been entered|name = ""|false|
|Check if address has been entered|address = ""|false|
|Check if phone number has been entered|phone number = ""|false|
* End specifications
