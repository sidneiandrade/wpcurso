<?php 

function wpcurso_customizer($wp_customize){

    // Copyright
    $wp_customize->add_section(
        'sec_copyright', array( 
            'title' => __('Copyright', 'wpcurso'), //titulo da seção
            'description' => __('Copyright Section', 'wpcurso'), //descrição da seção
            'priority' => 130 //ordenação da section
        )
    );

    $wp_customize->add_setting(
        'set_copyright', array(
            'type' => 'theme_mod', //usado sempre para modificar tema
            'default' => __('Copyright x - All rights reserved', 'wpcurso'), //texto em default
            'sanitize_callback' => 'wp_filter_nohtml_kses' //remove o html do texto
        )
    );
    
    $wp_customize->add_control(
        'set_copyright', array(
            'label' => __('Copyright', 'wpcurso'),
            'description' => __('Choose whether to show the Services section or not', 'wpcurso'),
            'section' => 'sec_copyright',
            'type' => 'text'
        )
    );

    // Maps
    $wp_customize->add_section(
        'sec_map', array( 
            'title' => __('Map', 'wpcurso'), //titulo da seção
            'description' => __('In this field you should get the Google Maps KEY API and add the address.', 'wpcurso'), //descrição da seção
            'priority' => 125 //ordenação da section
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
            'label' => __('API Key', 'wpcurso'),
            'description' => sprintf(
                __('Get your key <a target="_blank" href="%s">here</a>', 'wpcurso'),
                'http://console.developers.google.com/flows/enableapi?apiid=maps_backend'
                ),
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
            'label' => __('Address', 'wpcurso'),
            'description' => __('No special caracters allowed.', 'wpcurso'),
            'section' => 'sec_map',
            'type' => 'textarea'    
        )
    );

    // Slider
    $wp_customize->add_section(
        'sec_slider', array( 
            'title' => __('Slider', 'wpcurso'), //titulo da seção
            'description' => __('Slider Section', 'wpcurso'), //descrição da seção
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
            'label' => __('Choose your design type here.', 'wpcurso'),
            'description' => __('Choose your design type.', 'wpcurso'),
            'section' => 'sec_slider',
            'type' => 'select',
            'choices' => array(
                '1' => __('Design Type 1', 'wpcurso'),
                '2' => __('Design Type 2', 'wpcurso'),
                '3' => __('Design Type 3', 'wpcurso'),
                '4' => __('Design Type 4', 'wpcurso')
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
            'label' => __('Number of posts to display.', 'wpcurso'),
            'description' => __('Choose the number of post to be displayer.', 'wpcurso'),
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
            'description' => __('Choose show date.', 'wpcurso'),
            'section' => 'sec_slider',
            'type' => 'select',
            'choices' => array(
                'true' => __('Show', 'wpcurso'),
                'false' => __('Hidden', 'wpcurso')
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
            'label' => __('Show author.', 'wpcurso'),
            'description' => __('Choose show author.', 'wpcurso'),
            'section' => 'sec_slider',
            'type' => 'select',
            'choices' => array(
                'true' => __('Show', 'wpcurso'),
                'false' => __('Hidden', 'wpcurso')
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
            'label' => __('Show button more.', 'wpcurso'),
            'description' => __('Choose show button more.', 'wpcurso'),
            'section' => 'sec_slider',
            'type' => 'select',
            'choices' => array(
                'true' => __('Show', 'wpcurso'),
                'false' => __('Hidden', 'wpcurso')
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
            'label' => __('Show category.', 'wpcurso'),
            'description' => __('Choose show category.', 'wpcurso'),
            'section' => 'sec_slider',
            'type' => 'select',
            'choices' => array(
                'true' => __('Show', 'wpcurso'),
                'false' => __('Hidden', 'wpcurso')
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



