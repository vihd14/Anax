<?php
namespace Viza\CNavigation;

$urlHome  = $app->url->create("");
$urlAbout = $app->url->create("about");
$urlReport = $app->url->create("report");
$urlRemServer = $app->url->create("rem");
$urlComments = $app->url->create("comments");

$menu = array(
  'home'  => array('text'=>'HOME',  'url'=>$urlHome),
  'about'  => array('text'=>'ABOUT',  'url'=>$urlAbout),
  'report' => array('text'=>'REPORT', 'url'=>$urlReport),
  'rem' => array('text'=>'REM SERVER', 'url'=>$urlRemServer),
  'comments' => array('text'=>'COMMENTS', 'url'=>$urlComments),
);

class CNavigation
{
    public static function generateMenu($items, $class)
    {
        $html = "<nav class='$class'>\n";

        foreach ($items as $key => $item) {
            $basename = str_replace(".php", "", basename($_SERVER['REQUEST_URI']));
            $selected = ($basename == $key)
                ? 'selected'
                : null;
            $html .= "<a href='{$item['url']}' class='{$selected}'>{$item['text']}</a>\n";
        }

        // foreach ($items as $item) {
        //     $html .= "<a href='{$item['url']}'>{$item['text']}</a>\n";
        // }
        $html .= "</nav>\n";
        return $html;
    }
}

echo CNavigation::generateMenu($menu, "navbar transparent rm-default rm-desktop");
// echo CNavigation::generateMenu($menu, "navbarMax rm-default rm-mobile");?>

<article>
