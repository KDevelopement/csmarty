<?php

    if (! function_exists('asset_url')) {
        function asset_url($relativePath = '', ? string $scheme = null) : string {
            $config = clone config('App');
            $config->indexPage = '';
            $TemplateDir = \CSmarty\Config\Smarty::$templatesDir;
            $TemplateSelected = \CSmarty\Config\Smarty::$templateDefault;
            $FilesURL = \CSmarty\Config\Smarty::$FilesURL;
            return rtrim(site_url($TemplateDir . "/" . $TemplateSelected . "/" . $FilesURL["assets"] . "/" .  $relativePath, $scheme, $config), '/');
        }
    }

    if (! function_exists('vendor_url')) {
        function vendor_url($relativePath = '', ? string $scheme = null) : string {
            $config = clone config('App');
            $config->indexPage = '';
            $TemplateDir = \CSmarty\Config\Smarty::$templatesDir;
            $TemplateSelected = \CSmarty\Config\Smarty::$templateDefault;
            $FilesURL = \CSmarty\Config\Smarty::$FilesURL;
            return rtrim(site_url($TemplateDir . "/" . $TemplateSelected . "/" . $FilesURL["vendors"] . "/" .  $relativePath, $scheme, $config), '/');
        }
    }

    if (! function_exists('img_url')) {
        function img_url($relativePath = '', ? string $scheme = null) : string {
            $config = clone config('App');
            $config->indexPage = '';
            $TemplateDir = \CSmarty\Config\Smarty::$templatesDir;
            $TemplateSelected = \CSmarty\Config\Smarty::$templateDefault;
            $FilesURL = \CSmarty\Config\Smarty::$FilesURL;
            return rtrim(site_url($TemplateDir . "/" . $TemplateSelected . "/" . $FilesURL["imgs"] . "/" .  $relativePath, $scheme, $config), '/');
        }
    }

    if (! function_exists('upload_url')) {
        function upload_url($relativePath = '', ? string $scheme = null) : string {
            $config = clone config('App');
            $config->indexPage = '';
            $TemplateDir = \CSmarty\Config\Smarty::$templatesDir;
            $TemplateSelected = \CSmarty\Config\Smarty::$templateDefault;
            $FilesURL = \CSmarty\Config\Smarty::$FilesURL;
            return rtrim(site_url($TemplateDir . "/" . $TemplateSelected . "/" . $FilesURL["uploads"] . "/" .  $relativePath, $scheme, $config), '/');
        }
    }
    
