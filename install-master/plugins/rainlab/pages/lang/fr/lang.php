<?php

return [
    'plugin' => [
        'name' => 'Pages',
        'description' => 'Fonctionnalités de pages et menus statiques.',
    ],
    'page' => [
        'menu_label' => 'Pages',
        'delete_confirmation' => 'Confirmez-vous la suppression des pages sélectionnées ? Les sous-pages seront également supprimées.',
        'no_records' => 'Aucune page trouvée',
        'delete_confirm_single' => 'Confirmez-vous la suppression de cette page ? Les sous-pages seront également supprimées.',
        'new' => 'Nouvelle page',
        'add_subpage' => 'Ajouter une sous-page',
        'invalid_url' => 'Le format d’URL est invalide. L’URL doit commencer par un / et peut contenir des chiffres, des lettres et les symboles suivants : _-/.',
        'url_not_unique' => 'Cette URL est déjà utilisée par une autre page.',
        'layout' => 'Maquette',
        'layouts_not_found' => 'Aucune maquette trouvée',
        'saved' => 'La page a été sauvegardée avec succès.',
        'tab' => 'Pages',
        'manage_pages' => 'Gérer les pages statiques',
        'manage_menus' => 'Gérer les menus statiques',
        'access_snippets' => 'Accès aux fragments',
        'manage_content' => 'Gérer le contenu statique'
    ],
    'menu' => [
        'menu_label' => 'Menus',
        'delete_confirmation' => 'Confirmez-vous la suppression des menus sélectionnés ?',
        'no_records' => 'Aucun menu trouvé',
        'new' => 'Nouveau menu',
        'new_name' => 'Nouveau menu',
        'new_code' => 'nouveau-menu',
        'delete_confirm_single' => 'Confirmez-vous la suppression de ce menu ?',
        'saved' => 'Le menu a été sauvegardé avec succès.',
        'name' => 'Nom',
        'code' => 'Code',
        'items' => 'Éléments du menu',
        'add_subitem' => 'Ajouter un élément',
        'code_required' => 'Le Code est requis',
        'invalid_code' => 'Le format du Code est invalide. Le Code peut contenir des chiffres, des lettres et les symboles suivants : _-'
    ],
    'menuitem' => [
        'title' => 'Titre',
        'editor_title' => 'Modifier l’élément du menu',
        'type' => 'Type',
        'allow_nested_items' => 'Autoriser les sous-éléments',
        'allow_nested_items_comment' => 'Les sous-éléments peuvent être générés dynamiquement par les pages statiques et certains des autres types d’élément',
        'url' => 'URL',
        'reference' => 'Référence',
        'title_required' => 'Le Titre est requis',
        'unknown_type' => 'Type d’élément du menu inconnu',
        'unnamed' => 'Élément de menu sans nom',
        'add_item' => 'Ajouter un élément',
        'new_item' => 'Nouvel élément du menu',
        'replace' => 'Remplacer cet élément part ses sous-éléments générés',
        'replace_comment' => 'Utiliser cette case à cocher pour envoyer les sous-éléments générés au même niveau que cet élément. Cet élément sera lui-même masqué.',
        'cms_page' => 'Page CMS',
        'cms_page_comment' => 'Sélectionnez une page à ouvrir lors d’un clic sur cet élément du menu.',
        'reference_required' => 'La référence de l’élément du menu est requis.',
        'url_required' => 'L’URL est requise',
        'cms_page_required' => 'Sélectionnez une page CMS s’il vous plaît',
        'code' => 'Code',
        'code_comment' => 'Entrez le code de l’élément du menu si vous souhaitez y accéder via l’API.',
        'static_page' => 'Page Statique',
        'all_static_pages' => 'Toutes les pages'
    ],
    'content' => [
        'menu_label' => 'Contenu',
        'cant_save_to_dir' => 'L’enregistrement des fichiers de contenu dans le répertoire des pages statiques n’est pas autorisé.'
    ],
    'sidebar' => [
        'add' => 'Ajouter',
        'search' => 'Rechercher...'
    ],
    'object' => [
        'invalid_type' => 'Type d’objet inconnu',
        'not_found' => 'L’objet demandé n’a pas été trouvé.'
    ],
    'editor' => [
        'title' => 'Titre',
        'new_title' => 'Nouveau titre de la page',
        'content' => 'Contenu',
        'url' => 'URL',
        'filename' => 'Nom du fichier',
        'layout' => 'Maquette',
        'description' => 'Description',
        'preview' => 'Aperçu',
        'enter_fullscreen' => 'Activer le mode plein écran',
        'exit_fullscreen' => 'Annuler le mode plein écran',
        'hidden' => 'Caché',
        'hidden_comment' => 'Les pages cachées sont seulement accessibles aux administrateurs connectés.',
        'navigation_hidden' => 'Masquer dans la navigation',
        'navigation_hidden_comment' => 'Cochez cette case pour masquer cette page dans les menus et le fil d’ariane générés automatiquement.',
    ],
    'snippet' => [
        'partialtab' => 'Fragment',
        'code' => 'Code du fragment',
        'code_comment' => 'Entrez un code pour rendre ce contenu partiel disponible en tant que fragment dans le plugin des Pages Statiques.',
        'name' => 'Nom',
        'name_comment' => 'Le nom est affiché dans la liste des fragments dans le menu latéral des Pages Statiques et dans une Page lorsque qu’un fragment y est ajouté.',
        'no_records' => 'Aucun fragment trouvé',
        'menu_label' => 'Fragments',
        'column_property' => 'Nom de la propriété',
        'column_type' => 'Type',
        'column_code' => 'Code',
        'column_default' => 'Valeur par défaut',
        'column_options' => 'Options',
        'column_type_string' => 'Chaîne de caractères',
        'column_type_checkbox' => 'Case à cocher',
        'column_type_dropdown' => 'Menu déroulant',
        'not_found' => 'Le fragment demandé avec le code :code n’a pas été trouvé dans le thème.',
        'property_format_error' => 'Le code de la propriété devrait commencer par une lettre et ne peut contenir que des lettres et des chiffres',
        'invalid_option_key' => 'Clé de l’option de la liste déroulante invalide. Les clés des options ne peuvent contenir que des chiffres, des lettres et les symboles _ et -'
    ],
    'component' => [
        'static_page_description' => 'Affiche une page statique dans une maquette du CMS.',
        'static_menu_description' => 'Affiche un menu dans une maquette du CMS.',
        'static_menu_menu_code' => 'Spécifiez le code du menu que le composant devrait afficher.',
        'static_breadcrumbs_description' => 'Affiche l\' aide à la navigation dans une page statique.',
    ],
];
