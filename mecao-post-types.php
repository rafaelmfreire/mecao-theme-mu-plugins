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
}

add_action('init', 'mecao_post_types');