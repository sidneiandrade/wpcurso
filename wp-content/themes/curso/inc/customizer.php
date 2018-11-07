<?php 

function wpcurso_customizer($wp_customize){

    // Copyright
    $wp_customize->add_section(
        'sec_copyright', array( 
            'title' => 'Copyright', //titulo da seção
            'description' => 'Copyright Section' //descrição da seção
        )
    );

    $wp_customize->add_setting(
        'set_copyright', array(
            'type' => 'theme_mod', //usado sempre para modificar tema
            'default' => 'Copyright x - All rights reserved', //texto em default
            'sanitize_callback' => 'wp_filter_nohtml_kses' //remove o html do texto
        )
    );
    
    $wp_customize->add_control(
        'set_copyright', array(
            'label' => 'Copyright',
            'description' => 'Choose whether to show the Services section or not',
            'section' => 'sec_copyright',
            'type' => 'text'
        )
    );

    // Maps
    $wp_customize->add_section(
        'sec_map', array( 
            'title' => 'Map', //titulo da seção
            'description' => 'Map Section' //descrição da seção
        )
    );
    //Google Mpas API Key
    $wp_customize->add_setting(
        'set_map_apikey', array(
            'type' => 'theme_mod', //usado sempre para modificar tema
            'default' => '', //texto em default
            'sanitize_callback' => 'wp_filter_nohtml_kses' //remove o html do texto
        )
    );
    
    $wp_customize->add_control(
        'set_map_apikey', array(
            'label' => 'API Key',
            'description' => 'Get your key <a target="_blank" href="http://console.developers.google.com/flows/enableapi?apiid=maps_backend">here</a>',
            'section' => 'sec_map',
            'type' => 'text'
        )
    );
    //Address
    $wp_customize->add_setting(
        'set_map_address', array(
            'type' => 'theme_mod', //usado sempre para modificar tema
            'default' => '', //texto em default
            'sanitize_callback' => 'esc_textarea' //remove o html do texto
        )
    );
    
    $wp_customize->add_control(
        'set_map_address', array(
            'label' => 'Address',
            'description' => 'No special caracters allowed.',
            'section' => 'sec_map',
            'type' => 'textarea'    
        )
    );

    // Slider
    $wp_customize->add_section(
        'sec_slider', array( 
            'title' => 'Slider', //titulo da seção
            'description' => 'Slider Section', //descrição da seção
            'priority' => 25, //ordenação da section
        )
    );
    //Slider Design
    $wp_customize->add_setting(
        'set_slider_option', array(
            'type' => 'theme_mod', //usado sempre para modificar tema
            'default' => '2', //texto em default
            'sanitize_callback' => 'wpcurso_sanitize_select' //remove o html do texto
        )
    );
    
    $wp_customize->add_control(
        'set_slider_option', array(
            'label' => 'Choose your design type here.',
            'description' => 'Choose your design type.',
            'section' => 'sec_slider',
            'type' => 'select',
            'choices' => array(
                '1' => 'Design Type 1',
                '2' => 'Design Type 2',
                '3' => 'Design Type 3',
                '4' => 'Design Type 4'
            )    
        )
    );
    //Limit of Posts
    $wp_customize->add_setting(
        'set_slider_limit', array(
            'type' => 'theme_mod', //usado sempre para modificar tema
            'default' => '5', //texto em default
            'sanitize_callback' => 'absint' //remove o html do texto
        )
    );
    
    $wp_customize->add_control(
        'set_slider_limit', array(
            'label' => 'Number of posts to display.',
            'description' => 'Choose the number of post to be displayer.',
            'section' => 'sec_slider',
            'type' => 'number', 
        )
    );

    //Show date
    $wp_customize->add_setting(
        'set_slider_date', array(
            'type' => 'theme_mod', //usado sempre para modificar tema
            'default' => 'true', //texto em default
            'sanitize_callback' => 'wpcurso_sanitize_select' //remove o html do texto
        )
    );
    
    $wp_customize->add_control(
        'set_slider_date', array(
            'label' => 'Show date.',
            'description' => 'Choose show date.',
            'section' => 'sec_slider',
            'type' => 'select',
            'choices' => array(
                'true' => 'Show',
                'false' => 'Hidden'
            )   
        )
    );

    //Show author
    $wp_customize->add_setting(
        'set_slider_author', array(
            'type' => 'theme_mod', //usado sempre para modificar tema
            'default' => 'true', //texto em default
            'sanitize_callback' => 'wpcurso_sanitize_select' //remove o html do texto
        )
    );
    
    $wp_customize->add_control(
        'set_slider_author', array(
            'label' => 'Show author.',
            'description' => 'Choose show author.',
            'section' => 'sec_slider',
            'type' => 'select',
            'choices' => array(
                'true' => 'Show',
                'false' => 'Hidden'
            )   
        )
    );

    //Show button more
    $wp_customize->add_setting(
        'set_slider_more', array(
            'type' => 'theme_mod', //usado sempre para modificar tema
            'default' => 'true', //texto em default
            'sanitize_callback' => 'wpcurso_sanitize_select' //remove o html do texto
        )
    );
    
    $wp_customize->add_control(
        'set_slider_more', array(
            'label' => 'Show button more.',
            'description' => 'Choose show button more.',
            'section' => 'sec_slider',
            'type' => 'select',
            'choices' => array(
                'true' => 'Show',
                'false' => 'Hidden'
            )   
        )
    );

    //Show button more
    $wp_customize->add_setting(
        'set_slider_category', array(
            'type' => 'theme_mod', //usado sempre para modificar tema
            'default' => 'true', //texto em default
            'sanitize_callback' => 'wpcurso_sanitize_select' //remove o html do texto
        )
    );
    
    $wp_customize->add_control(
        'set_slider_category', array(
            'label' => 'Show category.',
            'description' => 'Choose show category.',
            'section' => 'sec_slider',
            'type' => 'select',
            'choices' => array(
                'true' => 'Show',
                'false' => 'Hidden'
            )   
        )
    );

}

add_action('customize_register', 'wpcurso_customizer');

//select sanitization function
function wpcurso_sanitize_select( $input, $setting ){
         
    //input must be a slug: lowercase alphanumeric characters, dashes and underscores are allowed only
    $input = sanitize_key($input);

    //get the list of possible select options 
    $choices = $setting->manager->get_control( $setting->id )->choices;
                     
    //return input if valid or return default option
    return ( array_key_exists( $input, $choices ) ? $input : $setting->default );                
     
}



