<?php

/* Formation Block */
if ( function_exists( 'acf_add_local_field_group' ) ) {
	acf_add_local_field_group( array(
		'key'                   => 'group_5cc975aebeb2a',
		'title'                 => 'Sheee Formation Block',
		'fields'                => array(
			array(
				'key'               => 'field_5cc975cd444a4',
				'label'             => 'Formation',
				'name'              => 'formation',
				'type'              => 'text',
				'instructions'      => '',
				'required'          => 1,
				'conditional_logic' => 0,
				'wrapper'           => array(
					'width' => '',
					'class' => '',
					'id'    => '',
				),
				'default_value'     => '',
				'placeholder'       => '',
				'prepend'           => '',
				'append'            => '',
				'maxlength'         => '',
			),
			array(
				'key'               => 'field_5cc97613444a5',
				'label'             => 'Link',
				'name'              => 'link',
				'type'              => 'link',
				'instructions'      => '',
				'required'          => 1,
				'conditional_logic' => 0,
				'wrapper'           => array(
					'width' => '',
					'class' => '',
					'id'    => '',
				),
				'return_format'     => 'url',
			),
			array(
				'key'               => 'field_5cc978de23d02',
				'label'             => 'Image',
				'name'              => 'image',
				'type'              => 'image',
				'instructions'      => '',
				'required'          => 1,
				'conditional_logic' => 0,
				'wrapper'           => array(
					'width' => '',
					'class' => '',
					'id'    => '',
				),
				'return_format'     => 'id',
				'preview_size'      => 'thumbnail',
				'library'           => 'all',
				'min_width'         => '',
				'min_height'        => '',
				'min_size'          => '',
				'max_width'         => '',
				'max_height'        => '',
				'max_size'          => '',
				'mime_types'        => '',
			),
		),
		'location'              => array(
			array(
				array(
					'param'    => 'block',
					'operator' => '==',
					'value'    => 'acf/sheeeblock-formation',
				),
			),
		),
		'menu_order'            => 0,
		'position'              => 'normal',
		'style'                 => 'default',
		'label_placement'       => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen'        => '',
		'active'                => true,
		'description'           => '',
	) );
}

// Register ACF Block
if ( function_exists( 'acf_register_block' ) ) {
	$result = acf_register_block( array(
		'name'            => 'sheeeblock-formation',
		'title'           => __( 'Sheee Formation' ),
		'description'     => __( 'Sheee Formation Block.' ),
		'render_callback' => 'sheee_block_formation_render'
		//'category'		=> '',
		//'icon'			=> '',
		//'keywords'		=> array(),
	) );
}

function sheee_block_formation_render() {
	$fields = get_fields();

	$image = wp_get_attachment_image_src( $fields['image'], 'medium' );


	?>
    <a class="sheee-formation" style="background-image: url(<?php echo $image[0] ?>);"
       href="<?php echo $fields['link'] ?>">
        <h2><span class="sup">Sheee</span><br><?php echo $fields['formation'] ?></h2>
    </a>
	<?php
}