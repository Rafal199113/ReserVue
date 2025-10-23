<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <header>
        <div class=" flex flex-row">
            <div class="flex flex-col flex-1 items-center justify-center">
                <div>
                    <h1 class="text-4xl font-bold text-9xl text-shadow-lg/30 text-shadow-sky-300 text-blue-500">ReserVue
                    </h1>
                </div>
                <div>
                    <p class="font-body text-body">Umów się na wizytę w kilka sekund i zadbaj o swoje zdrowie bez
                        stresu.</p>
                </div>
            </div>
            <div class="flex-1 p-8">
                <div class="relative w-full  rounded-md overflow-hidden">
                    <img src="<?php echo esc_url(get_parent_theme_file_uri('assets/img/header_image.jpg')); ?>"
                        class="w-full h-full object-cover" alt="Header Image" />
                    <div
                        class="absolute inset-0 bg-gradient-to-r from-white via-transparent to-transparent opacity-100">
                    </div>
                </div>
            </div>
        </div>
        <div class="container">


        </div>

    </header>