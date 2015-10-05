<?php
defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

/**
* Plugin Name: Code Sex
* Plugin URI: http://jacksonjd.com/
* Description: A plugin that lets you easily write/style code inside the Wordpress wysiwyg.
* Version: 0.1
* Author: James Jackson
* Author URI: http://jacksonjd.com/
* Documentation: https://github.com/google/code-prettify
**/


	function codeSexStylesheet() {
		wp_enqueue_style( 'codeSex', plugin_dir_url( __FILE__ ) . 'css/styles.css', false );
	}

	function codeSexJs() {
		wp_enqueue_script( 'codeSex', 'https://cdn.rawgit.com/google/code-prettify/master/loader/run_prettify.js?skin=desert', false);
	}

	add_action( 'wp_enqueue_scripts', 'codeSexStylesheet' );
	add_action( 'wp_enqueue_scripts', 'codeSexJs' );
