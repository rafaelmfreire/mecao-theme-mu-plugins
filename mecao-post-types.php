<?php
function mecao_post_types()
{
	register_post_type('match', [
		'supports' => ['title', 'editor', 'excerpt'],
		'rewrite' => ['slug' => 'jogos'],
		'has_archive' => true,
		'public' => true,
		'show_in_rest' => true,
		'labels' => [
			'name' => 'Jogos',
			'add_new' => 'Adicionar novo jogo',
			'add_new_item' => 'Adicionar Novo Jogo',
			'edit_item' => 'Alterar Jogo',
			'all_items' => 'Todos os Jogos',
			'singular_name' => 'Jogo',
			'search_items' => 'Buscar jogos'
		],
		'menu_icon' => 'dashicons-list-view'
	]);

	register_post_type('competition', [
		'supports' => ['title', 'editor', 'excerpt'],
		'rewrite' => ['slug' => 'campeonatos'],
		'has_archive' => true,
		'public' => true,
		'show_in_rest' => true,
		'labels' => [
			'name' => 'Campeonatos',
			'add_new' => 'Adicionar novo campeonato',
			'add_new_item' => 'Adicionar Novo Campeonato',
			'edit_item' => 'Alterar Campeonato',
			'all_items' => 'Todos os Campeonatos',
			'singular_name' => 'Campeonato',
			'search_items' => 'Buscar campeonatos'
		],
		'menu_icon' => 'dashicons-awards'
	]);
}

add_action('init', 'mecao_post_types');