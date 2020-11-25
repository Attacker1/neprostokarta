<?php
// Передаем переменную в js
function js_variables()
{
    $js_params = [
        'experience_img' => \App\asset_path('images/experience/animation/'),
    ];
    echo
    '<script type="text/javascript">window.wp_data = ',
    json_encode($js_params),
    ';</script>';
}

add_action('wp_head', 'js_variables');
