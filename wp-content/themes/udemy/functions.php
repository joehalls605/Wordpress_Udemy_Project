<?php

// Variables


// Includes
include(get_theme_file_path("/includes/front/enqueue.php"));

// Hooks

 // add_action tells wp to run a function when a specific hook runs
 add_action("wp_enqueue_scripts", "u_enqueue");

// wp_enqueue_scripts is a WordPress hook that is used to add custom scripts and styles to the front end of the site.
// u_enqueue is the function that will be called when wp_enqueue_scripts runs. It contains the actual code to load the scripts and styles.
