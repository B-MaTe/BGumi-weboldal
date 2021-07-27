<?php

    $module = $app['routing']['default'];
    $menu = [];

    $menuSelect = "SELECT * FROM menu ORDER BY `order` ASC";
    $menuRes = mysqli_query($link, $menuSelect);

    if (mysqli_num_rows($menuRes)) {
        while ($row = mysqli_fetch_object($menuRes)) {
            $locations = explode(",",$row->location);

            for($i = 0; $i < count($locations); $i++) {
                $menu[$locations[$i]][$row->order] = $row;
            }


            if (substr($row->url,0,4) != 'http') {
                $moduleName = getModuleNameFromUrl($row->url);
                $app['routing'][$moduleName] = $row->module;
            }
        }
    }

    if (isset($_GET['q'])) {
        $moduleName = getModuleNameFromUrl($_GET['q']);

        if (isset($app['routing'][$moduleName])) {
            $module = $app['routing'][$moduleName];
        } else {
            header('Location: /');
            exit;
        }
    }

    function getModuleNameFromUrl($url) {
        list($moduleName) = explode("/",$url);

        return $moduleName;
    }

    function renderMenu($location) {
        global $menu;
        global $module;

        if (isset($menu[$location])) {
            foreach($menu[$location] as $menuItem) {

                $url = $menuItem->url;
                $ID = $menuItem->id;
                $target = ' target="_blank"';
    
                if (substr($url,0,4) != 'http') {
                    $url = '/'. $url;
                    $target = '';
                }
                
    
                if (!isset($_GET['q'])) {
                    $_GET['q'] = '';
                }

                echo '<li '. (($_GET['q'] == $menuItem->url) ? 'class="active"' : '') .'><a href="'. $url .'"'. $target .'>'. $menuItem->title .'</a></li>';
            }
        }

    }


?>