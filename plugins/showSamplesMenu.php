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
                'このメニューを消すには、「/plugin/」フォルダにある「showSamplesMenu」プラグインを削除するか「/plugin/off/」フォルダに移動してください。'
            );
            break;
        default:
            $textParts = array(
                'Manual',
                'Delete or Remove "/plugins/showSamplesMenu.php" plugin to "/plugins/off" folder to disable this menu.'
            );
            break;
    }

    return '<h2>References</h2>
<ul class="menu">
<li id="admin-login">
<a href="' . $pathToIndex . '/admin/login.php">Login</a>
</li>
<li id="manual">
<a href="' . $pathToIndex . '/modules/manual/" title="Show Loggix Manual" class="menu">
Loggix ' . $textParts[0] . '
</a>
</li>
</ul>
<div class="important warning">
(&uarr;) ' . $textParts[1] . '
</div>
' . $text;
}
