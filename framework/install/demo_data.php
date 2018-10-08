<?php
function excitor_fw_ext_backups_demos($demos) {
    $demos_array = array(
		'excitor' => array(
			'title' => esc_html__('Excitor', 'excitor'),
			'screenshot' => 'http://import.bearsthemespro.com/excitor/excitor/screenshot.jpg',
			'preview_link' => 'http://theme.bearsthemespro.com/excitor/',
		),
		
    );

    $download_url = 'http://import.bearsthemespro.com/excitor/';

    foreach ($demos_array as $id => $data) {
        $demo = new FW_Ext_Backups_Demo($id, 'piecemeal', array(
            'url' => $download_url,
            'file_id' => $id,
        ));
        $demo->set_title($data['title']);
        $demo->set_screenshot($data['screenshot']);
        $demo->set_preview_link($data['preview_link']);

        $demos[ $demo->get_id() ] = $demo;

        unset($demo);
    }

    return $demos;
}
add_filter('fw:ext:backups-demo:demos', 'excitor_fw_ext_backups_demos');
