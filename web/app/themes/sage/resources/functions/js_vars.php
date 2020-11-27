<?php
// Передаем переменную в js
function js_variables()
{
    $path = \App\config('assets.relative_path') . '/images/experience/animation';
    $imagesRaw = scandir($path);
    $images = array_diff($imagesRaw, ['.', '..']);
    $imagesList = [];

    foreach ($images as $img) {
        $index = preg_replace('/[^0-9]/', '', $img);
        preg_match('/_(\d+)_/', $img, $matches);
        $index = $matches[1];
        $imagesList[$index] = \App\asset_path('images/experience/animation/') . $img;
    }


    $js_params = [
        'experience_img' => \App\asset_path('images/experience/animation/'),
        'imagesUrls' => $imagesList
    ];
    echo
    '<script type="text/javascript">window.wp_data = ',
    json_encode($js_params),
    ';</script>';
}

add_action('wp_head', 'js_variables');
