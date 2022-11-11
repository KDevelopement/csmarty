<?php
    namespace CSmarty\Config;

    use CodeIgniter\Config\BaseConfig;

    class Smarty extends BaseConfig {

        public static $TemplateErrors = E_ALL & ~E_NOTICE;

    //panel\vendor\kseven\csmarty\src
    
        public static $templatesDir = ROOTPATH . "vendor/kseven/csmarty/src/templates";

        public static $templateDefault = "Default";

        public static $forceCompile = FALSE;

        public static $compileDir = ROOTPATH . "vendor/kseven/csmarty/src/templates_c";

        public static $cacheDir = APPPATH . "../vendor/kseven/csmarty/src/Cache";

        public static $configDir = APPPATH . "../vendor/kseven/csmarty/src/Config";

        public static $pluginsDir = ROOTPATH . "vendor/kseven/csmarty/src/modules";

        public static $fileExtension = "tpl";

        public static $cacheOn = FALSE;

        public static $cacheLifeTime = 3600;

        public static $Debug = FALSE;
        
        public static $FilesURL = [
            "assets" => "assets",
            "vendors" => "vendors",
            "imgs" => "imgs",
            "uploads" => "uploads",
        ];

    }