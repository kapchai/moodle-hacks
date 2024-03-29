<?php   // $Id: config.php,v 1.7.2.3 2008/02/27 12:06:49 urs_hunkler Exp $
////////////////////////////////////////////////////////////////////////////////
/// This file contains a few configuration variables that control 
/// how Moodle uses this theme.
////////////////////////////////////////////////////////////////////////////////

$THEME->sheets = array('user_styles');

/// This variable is an array containing the names of all the 
/// stylesheet files you want included in this theme, and in what order
////////////////////////////////////////////////////////////////////////////////


$THEME->standardsheets = array('styles_layout', 'styles_color');

/// This variable can be set to an array containing
/// filenames from the *STANDARD* theme.  If the 
/// array exists, it will be used to choose the 
/// files to include in the standard style sheet.
/// When false, then no files are used.
/// When true or NON-EXISTENT, then ALL standard files are used.
/// This parameter can be used, for example, to prevent 
/// having to override too many classes.
/// Note that the trailing .css should not be included
/// eg $THEME->standardsheets = array('styles_layout','styles_fonts','styles_color');
////////////////////////////////////////////////////////////////////////////////


$THEME->parent = '';  

/// This variable can be set to the name of a parent theme
/// which you want to have included before the current theme.
/// This can make it easy to make modifications to another 
/// theme without having to actually change the files
/// If this variable is empty or false then a parent theme 
/// is not used.
////////////////////////////////////////////////////////////////////////////////


$THEME->parentsheets = false;  

/// This variable can be set to an array containing
/// filenames from a chosen *PARENT* theme.  If the 
/// array exists, it will be used to choose the 
/// files to include in the standard style sheet.
/// When false, then no files are used.
/// When true or NON-EXISTENT, then ALL standard files are used.
/// This parameter can be used, for example, to prevent 
/// having to override too many classes.
/// Note that the trailing .css should not be included
/// eg $THEME->parentsheets = array('styles_layout','styles_fonts','styles_color');
////////////////////////////////////////////////////////////////////////////////


$THEME->modsheets = true;  

/// When this is enabled, then this theme will search for 
/// files named "styles.php" inside all Activity modules and 
/// include them.   This allows modules to provide some basic 
/// layouts so they work out of the box.
/// It is HIGHLY recommended to leave this enabled.


$THEME->blocksheets = true;  

/// When this is enabled, then this theme will search for 
/// files named "styles.php" inside all Block modules and 
/// include them.   This allows Blocks to provide some basic 
/// layouts so they work out of the box.
/// It is HIGHLY recommended to leave this enabled.


$THEME->langsheets = false;

/// By setting this to true, then this theme will search for 
/// a file named "styles.php" inside the current language
/// directory.  This allows different languages to provide 
/// different styles.


$THEME->block_l_min_width = 210;
$THEME->block_l_max_width = 230;
$THEME->block_r_min_width = 210;
$THEME->block_r_max_width = 230;

/// These values define the min and max width of the left and right
/// sieblocks in the course pages. If not set or false the standard 
/// values are taken.


// $THEME->layouttable = array('left', 'middle', 'right');

/// $THEME->layouttable defines the way the columns are displayed
/// on the pages. You can rearange the columns to have the content
/// left and the two columns on the right page side.
/// $THEME->layouttable = array('middle', 'left', 'right');


$THEME->courseformatsheets = true;

/// When this is enabled, this theme will search for files 
/// named "styles.php" inside all course formats and 
/// include them.  This allows course formats to provide 
/// their own default styles.


$THEME->metainclude = true;

/// When this is enabled (or not set!) then Moodle will try 
/// to include a file meta.php from this theme into the 
/// <head></head> part of the page.


$THEME->standardmetainclude = true;


/// When this is enabled (or not set!) then Moodle will try 
/// to include a file meta.php from the standard theme into the 
/// <head></head> part of the page.


$THEME->parentmetainclude = false;

/// When this is enabled (or not set!) then Moodle will try 
/// to include a file meta.php from the parent theme into the 
/// <head></head> part of the page.


$THEME->navmenuwidth = 50;

/// You can use this to control the cutoff point for strings 
/// in the navmenus (list of activities in popup menu etc)
/// Default is 50 characters wide.


$THEME->makenavmenulist = false;

/// By setting this to true, then you will have access to a
/// new variable in your header.html and footer.html called
/// $navmenulist ... this contains a simple XHTML menu of 
/// all activities in the current course, mostly useful for 
/// creating popup navigation menus and so on.

// $THEME->layouttable = array('middle', 'left', 'right');


$THEME->customcorners = true;

/// By setting this to true, Moodle will generate extra divs in
/// all pages to enable graphical rich custom corners and borders.
/// Please have a look at the README with more details.


// $CFG->CSSEdit = true;

/// When this is enabled then Moodle will include all CSS files
/// seperately instead of writing all CSS code into one single
/// CSS file per theme. The single CSS files can then be edited 
/// and saved with interactive CSS editors like CSSEdit.


$THEME->resource_mp3player_colors = 
 'bgColour=000000&btnColour=ffffff&btnBorderColour=cccccc&iconColour=000000&'.
 'iconOverColour=00cc00&trackColour=cccccc&handleColour=ffffff&loaderColour=ffffff&'.
 'font=Arial&fontColour=3333FF&buffer=10&waitForPlay=no&autoPlay=yes';

/// With this you can control the colours of the "big" MP3 player 
/// that is used for MP3 resources.


$THEME->filter_mediaplugin_colors = 
 'bgColour=000000&btnColour=ffffff&btnBorderColour=cccccc&iconColour=000000&'.
 'iconOverColour=00cc00&trackColour=cccccc&handleColour=ffffff&loaderColour=ffffff&'.
 'waitForPlay=yes';

/// ...And this controls the small embedded player


$THEME->custompix = false;

/// If true, then this theme must have a "pix" 
/// subdirectory that contains copies of all 
/// files from the moodle/pix directory, plus a
/// "pix/mod" directory containing all the icons 
/// for all the activity modules.
////////////////////////////////////////////////////////////////////////////////
?>
