<?php

/* * * * * * * * * * * * * *
	THEME DEFAULTS
* * * * * * * * * * * * * */

require_once get_template_directory() . '/functions/defaults.php';

// Includes

require_once get_template_directory() . '/functions/avatar.php';
require_once get_template_directory() . '/functions/assets.php';
require_once get_template_directory() . '/functions/media.php';
require_once get_template_directory() . '/functions/meta-boxes.php';
require_once get_template_directory() . '/functions/panel.php';
require_once get_template_directory() . '/functions/security.php';
require_once get_template_directory() . '/functions/widgets.php';

// Modules

require_once get_template_directory() . '/functions/modules/banners.php';
require_once get_template_directory() . '/functions/modules/breadcrumbs.php';
require_once get_template_directory() . '/functions/modules/categories.php';
require_once get_template_directory() . '/functions/modules/comments.php';
require_once get_template_directory() . '/functions/modules/cookies.php';
require_once get_template_directory() . '/functions/modules/menus.php';
require_once get_template_directory() . '/functions/modules/pagination.php';
require_once get_template_directory() . '/functions/modules/related.php';
require_once get_template_directory() . '/functions/modules/share.php';

/* * * * * * * * * * * * * *
	AMP
* * * * * * * * * * * * * */

require_once get_template_directory() . '/functions/amp.php';

/* * * * * * * * * * * * * *
	GUTENBERG
* * * * * * * * * * * * * */

require_once get_template_directory() . '/functions/gutenberg.php';

/* * * * * * * * * * * * * *
	CUSTOM POSTS
* * * * * * * * * * * * * */

require_once get_template_directory() . '/functions/cpt/faq.php';

/* * * * * * * * * * * * * *
	SHORTCODES
* * * * * * * * * * * * * */

require_once get_template_directory() . '/functions/shortcodes/banners.php';

/* * * * * * * * * * * * * *
	MANUAL
* * * * * * * * * * * * * */

require_once get_template_directory() . '/functions/manual.php';

/* * * * * * * * * * * * * *
	NOTICES
* * * * * * * * * * * * * */

require_once get_template_directory() . '/functions/notices.php';

/* * * * * * * * * * * * * *
	CALCULADORAS
* * * * * * * * * * * * * */

#require_once get_template_directory() . '/functions/optimizations.php';
