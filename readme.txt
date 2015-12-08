=== Participants Database ===
Contributors: RC-Art Solutions
Donate link: https://github.com/RcArtSolutions/wp-entry-list/releases/latest
Tags: database, sign up form, survey, management, team, records
Requires at least: 4.0
Tested up to: 4.3.1
Stable tag: 0.15-beta
License: GPLv2

A simple entry list for R/C car racing events

== Description ==

A simple entry list for R/C car racing events

= Some of the features of the Participants Database Plugin: =

* fully configurable database for holding any kind of information about the entries
* customizable forms for collecting and maintaining records
* both front-end and back-end versions of the forms
* shortcode for inserting a configurable sign-up short form into WordPress pages, posts, etc.

= Database =

The heart of this plugin is the entry database, which is completely configurable.



== Installation ==

1. Download the zip file, and unzip it on your computer.
2. Upload this directory (entry-list) and its contents to the `/wp-content/plugins/` directory on your web server

== Screenshots ==

1. Managing Database fields: this is where you set up your database fields and all attributes for each field
2. Edit Record: this is where an individual record can be created or edited
3. Import CSV File: page where CSV files can be imported, includes detailed instructions and a blank spreadsheet download

== Changelog ==

= 1.6.2.5 =
fixed issue where remote search controls weren't targeting the correct list instance

= 1.6.2.3 =
bug fixes:
list pagination not refreshed with AJAX searches
missing object in PDb_Update_Notices class
fixed db error when user search overrides shortcode filter

implemented -1 list_limit value to show all records

= 1.6.2.2 =
bugfix: 
CAPTCHA not showing previous solution
CAPTCHA help text not shown
horizontal scroll setting on admin list

added top scrollbar to horizontal scroll elements in admin

= 1.6.2.1 =
fixed bug with dropdown- and checkbox-other fields

= 1.6.2 =
bugs fixed:
slashed numeric dates not parsing correctly
total shortcode not totaling data
default images broken
value titles not shown in lists

= 1.6.1 =
minor bug fixes

= 1.6 =

* database optimizations for large data sets
* scripts and stylesheets loaded only on active plugin pages
* code support for multilingual sites
* improvements to multi-page form handling
* improvements to internationalized date handling
* bug when using a single-field form fixed
* plugin now supports custom translation files and most translation plugins
* CSV import now allows delimiters and enclosures to be set by the user
* better support for values titles in search results
* better support for custom search forms
* new shortcode attributes for forms: "autocomplete", "edit_record_page" and "submit_button"
* improved security on user input and form submissions
* improved security on admin functions

= 1.5.4.9 =

* security patch for CSV download
* added Ukranian translation

= 1.5.4.8 =

* compatibility with WP 3.9 and PHP 5.5
* plugin admin menu visibility now controlled by plugin admin roles

= 1.5.4.7 =

* fixed checkbox lock bug

= 1.5.4.6 =

* fixed transaction errors when MySQL is in a strict mode
* checkboxes may now use value titles
* AJAX search response now uses template defined in the shortcode

= 1.5.4.5 =

* added otherselect.js to handle dropdown/other fields
* fixed bug in dropdowns when value is numeric 0

= 1.5.4.4 =

* readonly displays for dropdowns, radios and multiselects
* record updates leave private ID unchanged
* new setting to enable alternative sessions management if PHP sessions is not working
* fixed bug in PDbTemplate class that would return empty fields in a list

= 1.5.4.3 =

* undeclared property $readonly_fields error (this time for sure!)

= 1.5.4.2 =

bug fixes:

* undeclared property $readonly_fields error
* record updates not getting timestamp set
* problem with list search results not coming in in some cases
* readonly fields in form context now have "readonly" attribute instead of "disabled"
* record form now shows captcha if named in the shortcode "fields" attribute
* checkbox series now completely wrapped in checkbox group wrapper

Added Serbian translation


== Using the Plugin ==

* General Description
* Quick Start Instructions

A simple entry list for R/C car racing events
