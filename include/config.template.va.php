<?php
/***************************************************************************
 *
 *   This program is free software; you can redistribute it and/or modify
 *   it under the terms of the GNU General Public License as published by
 *   the Free Software Foundation; either version 2 of the License, or
 *   (at your option) any later version.
 *
 *   Portions of this program are derived from publicly licensed software
 *   projects including, but not limited to phpBB, Magelo Clone, 
 *   EQEmulator, EQEditor, and Allakhazam Clone.
 *
 *                                  Author:
 *                           Maudigan(Airwalking) 
 *
 ***************************************************************************/
 
 
/******************************************************************************
**                                                                           **
**                   NEED HELP SETTING THIS FILE UP?                         **
**                                                                           **
** https://github.com/maudigan/charbrowser/wiki/Configuration#configuration  **
**                                                                           **
******************************************************************************/

//DONT TOUCH THIS SETTING; PREVENTS THIS  
//SCRIPT FROM EXECUTING FROM DIRECT ACCESS
if ( !defined('INCHARBROWSER') )
{
   die("Hacking attempt");
}

/****************************************************
**                  SQL Settings                   **
**  Database account only needs SELECT and UPDATE  **
**  privelages                                     **
****************************************************/
$cb_db     =   "peq";
$cb_host   =   "localhost";
$cb_user   =   "";
$cb_pass   =   "";
$cb_port   =   3306;

//Multi-tenancy, if you need a seperate db connection
//for your content db, set this to true and set
//your content db connection info here. If you don't
//know what this is, leave it alone.
$cb_use_content_db = false;
$cb_content_db     =   "peq";
$cb_content_host   =   "localhost";
$cb_content_user   =   "";
$cb_content_pass   =   "";
$cb_content_port   =   3306;
/***************************************************/


/*****************************************************
**                  General Settings                **
*****************************************************/
$numToDisplay        = 25 ;//search results per page
$highlightgm         = 1  ;//highlight GM inventories 0=off 1=on
$blockbazaar         = 0  ;//disable bazaar 0=on 1=off
$blockbarter         = 1  ;//disable barter 0=on 1=off
$blockadventurestats = 0  ;//disable ldon leaderboards 0=on 1=off

     
/*****************************************************
**                  Title  settings                 **
*****************************************************/
$mytitle      =    "Vegarlson Asylum"; 
$subtitle     =    "";


/*****************************************************
**                       API                        **
** If this is set to true you can append "&api" to  **
** any of the url requests to get the pages data    **
** as json. The data is not raw, it's only the data **
** normally showed in the HTML rendering.           **
*****************************************************/
$api_enabled = false;


/*****************************************************
**              DYNAMIC TITLE IMAGE                 **
**   The following 2 settings are for the dynamic   **
**   title image(title.php). If you have freetype   **
**   installed you use a fontname from the /fonts   **
**   directory. Don't include the file extension.   **
**   Contact your system admin or use php_info()    **
**   to find out if you have freetype.              **
*****************************************************/
$titlefont    =    "everquest";  
$titlefontsize=    "90";



/*****************************************************
**               STATIC TITLE IMAGE                 **
**  You can use a static title image if you want    **
**  or if you don't have freetype installed. Place  **
**  your image in the ./images directory and then   **
**  uncomment the below variable and replace it     **
**  with the image files name.                      **
*****************************************************/
//$titleimage = "exampleheader.png";


/*****************************************************
**   Item stats view. Change this value to alter    **
**   the way item stats are displayed               **
**   0 - Standard item stats   (recommended)        **
**   1 - List item stats                            **
*****************************************************/
$itemstatsdisplay = 0;  


/*****************************************************
**   When a character is soft deleted its record    **
**   remains; do you want it shown or not?          **
**   0 - hide soft deleted characters (recommended) **
**   1 - show soft deleted characters               **
*****************************************************/
$showsoftdelete = 0;   


/*****************************************************
**   You can look at composition of guilds on the   **
**   guild.php page. This setting will block it     **
**   0 - show guild data                            **
**   1 - block guild data                           **
*****************************************************/
$blockguilddata = 0;  


/*****************************************************
**   Should the guild member page, signature page,  **
**   search page and character inventory show the   **
**   guild names/char name association when a       **
**   character is anon.                             **
**   0 - block association                          **
**   1 - show association                           **
*****************************************************/
$showguildwhenanon = 0; 


/*****************************************************
**   You can look at composition of server on the   **
**   server.php page. This setting will block it    **
**                                                  **
**   NOTE: this runs aggregate functions on the     **
**   entire character_data table. I would suggest   **
**   checking the performance of server.php and     **
**   its load on your database before leaving it    **
**   enabled.                                       **
**   0 - show server data                           **
**   1 - block server data                          **
*****************************************************/
$blockserverdata = 0;  

//how many days of history to show on
//timed server queries
$cb_history_days = 30; 


/*****************************************************
**   By default charbrowser will automatically      **
**   phone the GitHub repo to check for updates.    **
**   If your installation is out of date you will   **
**   see a red popup message on the settings page.  **
**   This setting will stop that from checking and  **
**   displaying the results.                        **
**   0 - show update notice  (recommended)          **
**   1 - block update notice                        **
*****************************************************/
$cb_blockversioncheck = 1; 


/*****************************************************
**                  SHOW BOTS?                      **
**   If you have bots enabled on your server you    **
**   can turn them on with this setting             **
**   0 - hide/disable bots                          **
**   1 - show bots                                  **
*****************************************************/
$cb_show_bots = 0; 


/*****************************************************
**               TEMPLATE OVERRIDE                  **
**   By default templates are read from             **
**   ./templates/default                            ** 
**                                                  **
**   You can override that and cause them to be     **
**   read form a separate directory. So you could   **
**   create custom template file in another         **
**   directory. The template system will read from  **
**   your custom directory first, and if it doesn't **
**   find one it will resolve back to using the     **
**   default template. In this way you can override **
**   a template with changes, and your changes wont **
**   get overwritten when you do a new install.     **
**                                                  **
**   Simply set the name of the directory you want  **
**   to use, it should be inside of the ./templates **
**   folder. Recommend you use the                  **
**   ./templates/custom folder which is already     **
**   set. But you can create another folder in      **
**   there as well and quickly swap between the two **
**   if needed.                                     **
**                                                  **
**   Paths relative to the ./template/ directory    **
*****************************************************/
$cb_override_template_dir = "custom";  


/*****************************************************
**  Character mover settings                        **
** assuming the layout of zones is understandable   **
** ask for help if needed.                          **
*****************************************************/
$blockcharmove = 1; //disable charmove 0=on 1=off
$charmovezones = array(
  'nexus'  => array( 'x' => 0, 'y' => 0, 'z' => 0 ),
  'oot'    => array( 'x' => 1, 'y' => 1, 'z' => 1 ),
);  


/*****************************************************
**  permissions for each user level. ALL applies to **
**  users other than ROLEPLAY, ANON, and GM         **
**  PUBLIC/PRIVATE are turned on using a quest      **
**  variable. For more information there is a       **
**  readme and example quest file in the Quest      **
**  Permissions directory.                          **
**      0 = display       1 = block                 **
*****************************************************/
$permissions = array(
'ALL' => array( 
    'inventory'         => 0,
    'coininventory'     => 0,
    'coinbank'          => 0,
    'coinsharedbank'    => 0,
    'bags'              => 0,
    'bank'              => 0,
    'sharedbank'        => 0,
    'corpses'           => 0,
    'corpse'            => 0,
    'bots'              => 0,
    'bot'               => 1,
    'flags'             => 0,
    'AAs'               => 0,
    'leadership'        => 0,
    'factions'          => 0,
    'advfactions'       => 0,
    'skills'            => 0,
    'languageskills'    => 1,
    'keys'              => 0,
    'signatures'        => 0),
'ROLEPLAY' => array(
    'inventory'         => 0,
    'coininventory'     => 0,
    'coinbank'          => 1,
    'coinsharedbank'    => 0,
    'bags'              => 0,
    'bank'              => 1,
    'sharedbank'        => 0,
    'corpses'           => 0,
    'corpse'            => 0,
    'bots'              => 0,
    'bot'               => 0,
    'flags'             => 0,
    'AAs'               => 0,
    'leadership'        => 0,
    'factions'          => 0,
    'advfactions'       => 1,
    'skills'            => 0,
    'languageskills'    => 1,
    'keys'              => 1,
    'signatures'        => 0),
'ANON' => array(
    'inventory'         => 0,
    'coininventory'     => 1,
    'coinbank'          => 1,
    'coinsharedbank'    => 0,
    'bags'              => 1,
    'bank'              => 1,
    'sharedbank'        => 0,
    'corpses'           => 1,
    'corpse'            => 1,
    'bots'              => 1,
    'bot'               => 1,
    'flags'             => 1,
    'AAs'               => 1,
    'leadership'        => 1,
    'factions'          => 1,
    'advfactions'       => 1,
    'skills'            => 1,
    'languageskills'    => 1,
    'keys'              => 1,
    'signatures'        => 0),
'GM' => array(
    'inventory'         => 0,
    'coininventory'     => 0,
    'coinbank'          => 0,
    'coinsharedbank'    => 0,
    'bags'              => 0,
    'bank'              => 0,
    'sharedbank'        => 0,
    'corpses'           => 0,
    'corpse'            => 0,
    'bots'              => 0,
    'bot'               => 0,
    'flags'             => 0,
    'AAs'               => 0,
    'leadership'        => 0,
    'factions'          => 0,
    'advfactions'       => 1,
    'skills'            => 0,
    'languageskills'    => 1,
    'keys'              => 1,
    'signatures'        => 0),
'PUBLIC' => array(
    'inventory'         => 0,
    'coininventory'     => 0,
    'coinbank'          => 0,
    'coinsharedbank'    => 0,
    'bags'              => 0,
    'bank'              => 0,
    'sharedbank'        => 0,
    'corpses'           => 0,
    'corpse'            => 0,
    'bots'              => 0,
    'bot'               => 0,
    'flags'             => 0,
    'AAs'               => 0,
    'leadership'        => 0,
    'factions'          => 0,
    'advfactions'       => 1,
    'skills'            => 0,
    'languageskills'    => 1,
    'keys'              => 0,
    'signatures'        => 0),
'PRIVATE' => array(
    'inventory'         => 1,
    'coininventory'     => 1,
    'coinbank'          => 1,
    'coinsharedbank'    => 0,
    'bags'              => 1,
    'bank'              => 1,
    'sharedbank'        => 0,
    'corpses'           => 1,
    'corpse'            => 1,
    'bots'              => 1,
    'bot'               => 1,
    'flags'             => 1,
    'AAs'               => 1,
    'leadership'        => 1,
    'factions'          => 1,
    'advfactions'       => 1,
    'skills'            => 1,
    'languageskills'    => 1,
    'keys'              => 1,
    'signatures'        => 0)
);
/*****************************************************/




/*****************************************************
**  If you allow the display of the guild page, the **
**  guild leader can set a quesglobal               **
**  'charbrowser_guild' to 1 for a PUBLIC profile   **
**  or to 2 for a PRIVATE profile. If it is unset   **
**  it will be ALL. This works much like the        **
**  character permissions.                          ** 
**      0 = display       1 = block                 **
*****************************************************/
$guild_permissions = array(
'ALL' => array( 
    'mainpage'         => 0),
'PUBLIC' => array(
    'mainpage'         => 0),
'PRIVATE' => array(
    'mainpage'         => 1)
);
/*****************************************************/




/*****************************************************
**               SELF REGISTRATION                  ** 
**  This section of settings will publish your site **
**  with a central index of charbrowser sites.      **
**  Visit http://charbrowser.net to see the listing **
**  of servers. The sites will not immediately show **
**  up, they are verified before listing. Whether   **
**  or not they are listed is up to admin           **
**  discretion. If a server is particularly small,  **
**  or appears to have been intended to be private  **
**  it wont be listed.                              **
**                                                  **
**  There is a secondary reason to register. Your   **
**  admin email address can be provided (or         **
**  omitted) as well. This will allow us to         **
**  contact you directly in case of an emergency    **
**  patch.                                          **
**                                                  **
**  Your email address will not be shared publicly. **
**                                                  **
**  If enabled the self registration automatically  **
**  happens, at most, every hour depending on your  **
**  traffic. If you would like to update any        **
**  values, simply change them here and wait. After **
**  the next self registration you will become      **
**  unlisted until you are manually verified again. **
**                                                  **
**  You may not be listed if you do not set a       **
**  custom cb_unique_string, which is used in an    **
**  automated handshake to verify the authenticity  **
**  of the registration.                            **
**                                                  **
**  You can disable this process by setting         **
**  cb_allow_self_register to 0, (it defaults to    **
**  off). If you disable it you can ignore all vars **
**  in this section, they will be unused. You can   **
**  also choose to register but mark your server as **
**  unlisted and it wont be publicised. No servers  **
**  will be published until and unless they are     **
**  clearly meant to be public upon manual review.  **
**                                                  **
**  if you would like additional piece of mind you  **
**  can review or edit the code for this process    **
**  in /include/common.php                          **
**                                                  **
**  if this doesn't prove useful it may be removed  **
**  in future builds.                               **
**                                                  **
**      0 = block (default)      1 = allow          **
*****************************************************/

//set to 0 to block self registration, if set to 1
//this installation will register itself
$cb_allow_self_register = 0;

//The email address to contact the admin in case of
//emergency patches or releases (wont be shared)
$cb_admin_email = "admin@your-site.com";

//if there's an emergency patch or major security issue
//discovered we'll email you. If there are regular
//patches or releases we may email as well
//depending on if many people register
// 1 = email for patches
// 2 = email for releases
// 3 = emergency patches only
// 0 = never email
$cb_admin_contact = 3;

//the front-facing URL that users should access to hit
//your charbrowser home page. If you've wrapped the site
//it should be the URL to that php page. Don't include any
//variables or it wont register. Do it exactly like the
//example.
$cb_installation_url = "vegarlson-server.org/charbrowser/index.php";

//is this a custom server or mostly a standard EQ-like
//server. 1 = custom, 0 = standard
$cb_is_custom = 0;

//how your site will be titled on charbrowser.net 
// (if self registration and listing is enabled)
$cb_server_title = "Vegarlson Asylum";

//publicise my charbrowser install on charbrowser.net
// 1 = list my server, 0 = don't list me ever
$cb_list_server = 1;


//Unique Key: IMPORTANT
//set this to a long, unique string of letters
//and numbers. This will prevent a bad actor
//from spoofing your registration and sending users
//to the wrong page. Your site may not be registered
//or listed if this value isn't set.    When a self 
//registration is sent, this value will be included. The
//registration server will do a handshake with this
//value to ensure the values really came from your
//server. All registrations are manually verified
$cb_unique_string = "SET THIS TO A LONG UNIQUE STRING OF LETTERS AND NUMBERS";



/*****************************************************
**  If you use advertising banner paste the html    **
**  into this variable and it will be a banner      **
**  at the top of every page. Add <center> tags     **
**  if you want it centered; default is left align. **
*****************************************************/
$adscript = "";
/****************************************************/



/*************************************************************************************************
**                                        EXTERNAL LINKS                                        **
**  Adjusting these values will cause links that point to external database, i.e., item and     **
**  spell links to be redirected to the site of your choice. The curly braced items are values  **
**  that will be replaced automatically based on the context. Order doesn't mater, and you can  **
**  include multiple or leave some out. A list of valid values is above each link template.     **
**************************************************************************************************/

//a link to an item using the item id 
//{ITEM_ID} - The ID of the item
//$link_item = "http://mqemulator.net/item.php?id={ITEM_ID}";
$link_item = "https://alla.vegarlson-server.org/?a=item&id={ITEM_ID}";

//a link to a spell using the spell id 
//{SPELL_ID} - The ID of the spell
//$link_spell = "http://mqemulator.net/spell.php?id={SPELL_ID}";
$link_spell = "https://alla.vegarlson-server.org/?a=spell&id={SPELL_ID}";

//a link to a zone using a shortname or id 
//{ZONE_SHORTNAME} - The shortname of the zone
//{ZONE_ID} - The ID of the zone
//$link_zone = "http://mqemulator.net/zone.php?name={ZONE_SHORTNAME}";
$link_zone = "https://alla.vegarlson-server.org/?a=zone&name={ZONE_SHORTNAME}";

//a link to a map with a text marker on a specific x/y coordinate
//this is used to show a player where their corpse is 
//{ZONE_SHORTNAME} - The shortname of the zone
//{ZONE_ID} - The ID of the zone
//{TEXT} - The text of the marker on the map (corpse name)
//{X} - The X coordinate of the marker on the map
//{Y} - The Y coordinate of the marker on the map
//$link_map = "http://mqemulator.net/map.php?zoneid={ZONE_ID}&poi={TEXT}&poix={X}&poiy={Y}&grid=100";

//a link to information about a faction using the faction id.
//{FACTION_ID} - The ID of the faction group
//$link_faction = "http://mqemulator.net/faction.php?id={FACTION_ID}";
$link_faction = "https://alla.vegarlson-server.org/?a=faction&id={FACTION_ID}";
/**************************************************************************************************/


/****************************************************
**                 DEVELOPER MODE                  **
**  uncommenting this will dump database           **
**  statistics at the bottom of each page          **
**  as well as page execution time                 **
**  Warning and Notices will also be posted        **
**  When commented out only errors will post       **
**                                                 **
**  WARNING: this will be publicly viewable        **
****************************************************/
//define('DEVELOPER_MODE',true);
/****************************************************/



/******************************************************
*******************************************************
****              STOP EDITING HERE                ****
*******************************************************
******************************************************/

/****************************************************
**                 CONFIG VERSION                  **
**  When IMPORTANT changes are made to the config  **
**  template that require a server to recreate     **
**  their config file, this version will be        **
**  changed. A detection module in index.php will  **
**  check this value and prevent the instance from **
**  working until you update your config file with **
**  the new config.template. Don't change this     **
**  version to fix the issue. Backup your old      **
**  config file and replace it with                **
**  config.template and then fill in your settings **
**  again.                                         **
*****************************************************/
$cb_config_version = 'v2.1.0';
?>
