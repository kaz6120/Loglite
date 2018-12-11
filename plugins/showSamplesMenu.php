<?php
/*
 これはshowSamplesMenuというプラグインです。navigationの部分のプラグインフィルターを使い、
 Expanderモジュールのサンプル例を紹介するリンクを表示します。

*/

$this->plugin->addFilter('navigation', 'showSamplesMenu');


function showSamplesMenu($text)
{
    global $config, $pathToIndex;

    switch ($config['language']) {
        case 'japanese':
            $textParts = array(
                'マニュアル',
                ''
            );
            break;
        default:
            $textParts = array(
                'Manual',
                ''
            );
            break;
    }

    return '<h2>Admin</h2>
<ul class="menu">
<li id="admin-login">
<a href="' . $pathToIndex . '/admin/login.php">Login</a>
</li>
<li id="manual">
<a href="' . $pathToIndex . '/modules/manual/" class="menu">
LogLite ' . $textParts[0] . '
</a>
</li>
</ul>
' . $text;
}
