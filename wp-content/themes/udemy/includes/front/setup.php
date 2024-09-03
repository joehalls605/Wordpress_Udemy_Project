<?php

function u_setup_theme(){
    add_theme_support("editor-styles"); // allows themes to add styles to gutenberg editor

    add_editor_style([ // passing in files to be loaded
        'https://fonts.googleapis.com/css2?family=Pacifico&family=Rubik:wght@300;400;500;700&display=swap',
        'assets/theme/bootstrap-icons.css',
        'assets/theme/public/index.css'
    ]);
}