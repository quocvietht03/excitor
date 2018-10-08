<?php if ( ! defined( 'FW' ) ) die( 'Forbidden' );

$options = array(
	'post_options' => array(
		'type' => 'multi',
		'label' => false,
		'inner-options' => array(
			'post_general' => array(
				'title' => esc_html__('General', 'excitor'),
				'type' => 'tab',
				'options' => array(
					'titlebar_background' => array(
						'label' => esc_html__( 'Title Bar Background', 'excitor' ),
						'desc'  => esc_html__( 'Upload title bar background image.', 'excitor' ),
						'type'  => 'upload',
					),
				),
			),
			'post_gallery' => array(
				'title' => esc_html__('Gallery', 'excitor'),
				'type' => 'tab',
				'options' => array(
					'gallery_images' => array(
						'label' => esc_html__( 'Add Images', 'excitor' ),
						'desc'  => esc_html__( 'Upload gallery images.', 'excitor' ),
						'type'  => 'multi-upload',
					),
				),
			),
			'post_video' => array(
				'title' => esc_html__('Video', 'excitor'),
				'type' => 'tab',
				'options' => array(
					'video_url' => array(
						'label' => esc_html__( 'Video Url', 'excitor' ),
						'desc'  => esc_html__( 'Please video url(vimeo/youtube/mp4). Ex: https://www.youtube.com/embed/YE7VzlLtp-4?rel=0', 'excitor' ),
						'type'  => 'text',
					),
					'video_poster' => array(
						'label' => esc_html__( 'Add Image', 'excitor' ),
						'desc'  => esc_html__( 'Upload video poster image.', 'excitor' ),
						'type'  => 'upload',
					),
					'video_caption' => array(
						'label' => esc_html__( 'Video Caption', 'excitor' ),
						'desc'  => esc_html__( 'Please video caption.', 'excitor' ),
						'type'  => 'text',
					),
				),
			),
			'post_audio' => array(
				'title' => esc_html__('Audio', 'excitor'),
				'type' => 'tab',
				'options' => array(
					'audio_type' => array(
						'type' => 'multi-picker',
						'label' => false,
						'desc' => false,
						'picker' => array(
							'type' => array(
								'type' => 'short-select',
								'label' => esc_html__('Audio Types', 'excitor'),
								'desc' => esc_html__('Choose the audio type.', 'excitor'),
								'value' => 'html5',
								'choices' => array(
									'html5' => esc_html__('HTML5', 'excitor'),
									'embed' => esc_html__('Embed', 'excitor')
								),
							),
						),
						'choices' => array(
							'html5' => array(
								'format' => array(
									'type'  => 'short-select',
									'value' => 'mp3',
									'label' => esc_html__('Format', 'excitor'),
									'desc'  => esc_html__('Choose the audio format.', 'excitor'),
									'choices' => array(
										'audio/mpeg' => esc_html__('MP3', 'excitor'),
										'audio/ogg' => esc_html__('Ogg', 'excitor'),
										'audio/wav' => esc_html__('Wav', 'excitor')
									)
								),
								'src' => array(
									'label' => esc_html__('Src', 'excitor'),
									'desc' => esc_html__('Enter url audio (Ex: http://yourdomain.com/audio.mp3)', 'excitor'),
									'type' => 'text',
									'value' => ''
								),
							),
							'embed' => array(
								'iframe' => array(
									'label' => esc_html__('Embed', 'excitor'),
									'desc' => esc_html__('Please enter embed code(SoundCloud, ...)', 'excitor'),
									'type' => 'textarea',
									'value' => '',
								),
							),
							
						),
					),
				),
			) ,
			'post_quote' => array(
				'title' => esc_html__('Quote', 'excitor'),
				'type' => 'tab',
				'options' => array(
					'quote_text' => array(
						'label' => esc_html__( 'Quote Text', 'excitor' ),
						'desc'  => esc_html__( 'Please enter quote.', 'excitor' ),
						'type'  => 'textarea',
					),
				),
			),
			'post_link' => array(
				'title' => esc_html__('Link', 'excitor'),
				'type' => 'tab',
				'options' => array(
					'url' => array(
						'label' => esc_html__( 'Url', 'excitor' ),
						'desc'  => esc_html__( 'Please enter url.', 'excitor' ),
						'type'  => 'text',
					),
				),
			),
			
		),
	),
	
);
