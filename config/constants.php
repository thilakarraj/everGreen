<?php
return [
    /*'options' => [
        'option_attachment' => '13',
        'option_email' => '14',
        'option_monetery' => '15',
        'option_ratings' => '16',
        'option_textarea' => '17',
    ]*/
    'options' => [


	    // admin menu
	    'superadmin_menu' => '[{
				"label": "SuperAdmin",
				"menu_id": "org0",
				"url": "superadmin",
				"children": []
			},
			{
				"label": "All",
				"menu_id": "modimg",
				"children": [{
					"label": "All",
					"menu_id": "adm0",
					"url": "all",
					"children": []
				},{
					"label": "List Product",
					"menu_id": "adm0",
					"url": "listProduct",
					"children": []
				},{
					"label": "Add Product",
					"menu_id": "adm0",
					"url": "addProduct",
					"children": []
				}]
			},
			{
				"label": "Admin",
				"menu_id": "org0",
				"url": "admin",
				"children": []
			},
			{
				"label": "User",
				"menu_id": "org0",
				"url": "user",
				"children": []
			},
			{
				"label": "Download PDF",
				"menu_id": "org0",
				"url": "download-pdf",
				"children": []
			}
		]',
		// user menu
        'admin_menu' => '[{
				"label": "SuperAdmin",
				"menu_id": "org0",
				"url": "superadmin",
				"children": []
			},{
				"label": "All",
				"menu_id": "modimg",
				"children": [{
					"label": "All",
					"menu_id": "adm0",
					"url": "all",
					"children": []
				}]
			},
			{
				"label": "Admin",
				"menu_id": "org0",
				"url": "admin",
				"children": []
			},
			{
				"label": "User",
				"menu_id": "org0",
				"url": "user",
				"children": []
			}
		]',
        'user_menu' => '[{
				"label": "SuperAdmin",
				"menu_id": "org0",
				"url": "superadmin",
				"children": []
			},{
				"label": "All",
				"menu_id": "modimg",
				"children": [{
					"label": "All",
					"menu_id": "adm0",
					"url": "all",
					"children": []
				}]
			},
			{
				"label": "User",
				"menu_id": "org0",
				"url": "user",
				"children": []
			}
		]',
		'_menu' => '[{
				"label": "SuperAdmin",
				"menu_id": "org0",
				"url": "superadmin",
				"children": []
			},{
				"label": "All",
				"menu_id": "modimg",
				"children": [{
					"label": "All",
					"menu_id": "adm0",
					"url": "all",
					"children": []
				}]
			},
			{
				"label": "User",
				"menu_id": "org0",
				"url": "user",
				"children": []
			}
		]',

    ]
];
?>