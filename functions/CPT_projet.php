<?php
/*

Registering CPT

*/
add_action('init', 'create_my_custom_post_type'); 
function create_my_custom_post_type() { 
/* notre code PHP pour rajouter les custom post type */ 
register_post_type(   
	'aqua_project',   
	array(     
		'label' => 'Projets',     
		'labels' => array(       
			'name' => 'Projets',     
			'singular_name' => 'Projet',  
			'all_items' => 'Tous les projets',  
			'add_new_item' => 'Ajouter un projet',     
			'edit_item' => 'Éditer le projet',    
			'new_item' => 'Nouveau projet',      
			'view_item' => 'Voir le projet',   
			'search_items' => 'Rechercher parmi les projets',    
			'not_found' => 'Pas de projet trouvé',      
			'not_found_in_trash'=> 'Pas de projet dans la corbeille'  
			),     
		'public' => true,     
		'capability_type' => 'post', 
		'supports' => array(       
			'title',       
			'editor',   
			'thumbnail'
			//'custom-fields'     
			),     
		'has_archive' => true,
		'menu_position' => 5,
		'rewrite' => array('slug' => 'projects')
		) 
	);
}
/*

Registering Taxo

*/

add_action( 'init', 'create_my_taxonomies', 0 );
function create_my_taxonomies() {
    register_taxonomy(
        'aqua_projet_taxonomy',
        'aqua_project',
        array(
            'labels' => array(
                'name' => 'Catégories',
                'add_new_item' => 'Ajouter une catégorie',
                'new_item_name' => 'Nouvelle catégorie'
            ),
            'show_ui' => true,
            'show_tagcloud' => false,
            'hierarchical' => true
        )
    );
}