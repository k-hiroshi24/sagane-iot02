<?php

/**
 * テーマのセットアップ
 * 参考：https://wpdocs.osdn.jp/%E9%96%A2%E6%95%B0%E3%83%AA%E3%83%95%E3%82%A1%E3%83%AC%E3%83%B3%E3%82%B9/add_theme_support#HTML5
 **/
function my_setup()
{
	add_theme_support('post-thumbnails'); // アイキャッチ画像を有効化
	add_theme_support('automatic-feed-links'); // 投稿とコメントのRSSフィードのリンクを有効化
	add_theme_support('title-tag'); // タイトルタグ自動生成
	add_theme_support(
		'html5',
		array( //HTML5でマークアップ
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		)
	);
}

add_action('after_setup_theme', 'my_setup');
// セットアップの書き方の型
// function custom_theme_setup() {
// add_theme_support( $feature, $arguments );
// }
// add_action( 'after_setup_theme', 'custom_theme_setup' );



add_action('wp_print_styles', 'my_deregister_styles', 100);
function my_deregister_styles()
{
	wp_deregister_style('wp-pagenavi');
}

add_filter('get_archives_link', 'my_archives_link');
function my_archives_link($output)
{
	$output = preg_replace('/<\/a>\s*(&nbsp;)\((\d+)\)/', '（$2）</a>', $output);
	return $output;
}
