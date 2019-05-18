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


/**
 * Sheee Image Banner Block
 */

if ( function_exists( 'acf_add_local_field_group' ) ) {

	acf_add_local_field_group( array(
		'key'                   => 'group_5cc98fd97102f',
		'title'                 => 'Sheee Image Banner',
		'fields'                => array(
			array(
				'key'               => 'field_5cc98fe2e8545',
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
			array(
				'key'               => 'field_5cc9947476bc7',
				'label'             => 'CTA Button',
				'name'              => 'cta_button',
				'type'              => 'link',
				'instructions'      => '',
				'required'          => 0,
				'conditional_logic' => 0,
				'wrapper'           => array(
					'width' => '',
					'class' => '',
					'id'    => '',
				),
				'return_format'     => 'array',
			),
			array(
				'key'               => 'field_5cc98ff9e8546',
				'label'             => 'Title',
				'name'              => 'title',
				'type'              => 'text',
				'instructions'      => '',
				'required'          => 0,
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
				'key'               => 'field_5cc99010e8547',
				'label'             => 'Text',
				'name'              => 'text',
				'type'              => 'wysiwyg',
				'instructions'      => '',
				'required'          => 0,
				'conditional_logic' => 0,
				'wrapper'           => array(
					'width' => '',
					'class' => '',
					'id'    => '',
				),
				'default_value'     => '',
				'tabs'              => 'all',
				'toolbar'           => 'basic',
				'media_upload'      => 0,
				'delay'             => 0,
			),
			array(
				'key'               => 'field_5cc996805ef57',
				'label'             => 'Full Width',
				'name'              => 'full_width',
				'type'              => 'checkbox',
				'instructions'      => '',
				'required'          => 0,
				'conditional_logic' => 0,
				'wrapper'           => array(
					'width' => '',
					'class' => '',
					'id'    => '',
				),
				'choices'           => array(
					'full' => 'Full',
				),
				'allow_custom'      => 0,
				'default_value'     => array(),
				'layout'            => 'vertical',
				'toggle'            => 0,
				'return_format'     => 'value',
				'save_custom'       => 0,
			),
		),
		'location'              => array(
			array(
				array(
					'param'    => 'block',
					'operator' => '==',
					'value'    => 'acf/sheeeblock-imagebanner',
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
		'name'            => 'sheeeblock-imagebanner',
		'title'           => __( 'Sheee Image Banner' ),
		'description'     => __( 'Sheee Image Banner' ),
		'render_callback' => 'sheee_block_imagebanner_render'
		//'category'		=> '',
		//'icon'			=> '',
		//'keywords'		=> array(),
	) );
}

function sheee_block_imagebanner_render() {
	$fields = get_fields();

	$image = wp_get_attachment_url( $fields['image'] );

	?>
    <div class="sheee-imagebanner <?php echo ( $fields['full_width'][0] == 'full' ) ? 'full-width' : 'wide-width' ?>"
         style="background-image: url(<?php echo $image ?>);">
        <div class="overlay">
			<?php if ( ! empty( $fields['cta_button']['title'] ) ): ?>
                <div class="cta-wrapper">
                    <a href="<?php echo $fields['cta_button']['url'] ?>"><?php echo $fields['cta_button']['title'] ?></a>
                </div>
			<?php endif; ?>
            <h2><?php echo $fields['title'] ?></h2>
			<?php echo $fields['text'] ?>
        </div>
    </div>
	<?php
}


// Change output of File block, put the button before the text.
function sheee_file_block_render( $attributes, $content ) {

	$d = new DOMDocument();
	$d->loadHTML('<?xml encoding="utf-8" ?>' . $content);

	$links = $d->getElementsByTagName('a');

	// Now grab the two link tags and switch them in the content
	$textLink = $links->item(1);
	$buttonLink = $links->item(0);

	$textLink->insertBefore($buttonLink);

    // switched output
	return $d->saveHTML();
}

function sheee_register_file_block() {
	register_block_type( 'core/file', array(
		'render_callback' => 'sheee_file_block_render',
	) );
}

//add_action( 'init', 'sheee_register_file_block' );
