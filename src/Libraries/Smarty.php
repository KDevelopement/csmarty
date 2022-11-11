<?php
    namespace CSmarty\Libraries;

    use Smarty AS SmartyRun;

    class Smarty
    {

        /**
         * Iniciar a biblioteca Smarty
         * @var SmartyRun
         */
        protected $Smarty;

        /**
         * LibVersion 
         * @var string
         */
        protected $Version = "4.0.0";
    
        /**
         * Pasta de templates
         * @var string
         */
        protected $templatesDir;

        /**
         * Pasta de template (One)
         * @var string
         */
        protected $templateDefault;

        /**
         * Pasta de plugins
         * @var string
         */
        protected $pluginsDir;
    
        /**
         * Pasta de compilações
         * @var bool
         */
        protected $forceCompile;

        /**
         * Pasta de compilações
         * @var string
         */
        protected $compileDir;
    
        /**
         * @var bool
         */
        protected $cacheOn;

        /**
         * @var int
         */
        protected $cacheLifeTime;

        /**
         * Pasta de caches
         * @var string
         */
        protected $cacheDir;
    
        /**
         * Pasta de configurações
         * @var string
         */
        protected $configDir;

        /**
         * Ext. de arquivo
         * @var string
         */
        protected $fileExtension;

        /**
         * Status de debug
         * @var bool
         */
        protected $Debug;

        public function __construct(array $Config = [])
        {   
            $this->Smarty = new SmartyRun();
            $this->templateDefault = $Config["Template"];
            $this->templatesDir = \CSmarty\Config\Smarty::$templatesDir;
            $this->pluginsDir = \CSmarty\Config\Smarty::$pluginsDir;
            $this->force_compile = \CSmarty\Config\Smarty::$forceCompile;
            $this->compileDir = \CSmarty\Config\Smarty::$compileDir;
            $this->cacheOn = \CSmarty\Config\Smarty::$cacheOn;
            $this->cacheDir = \CSmarty\Config\Smarty::$cacheDir;
            $this->cacheLifeTime = \CSmarty\Config\Smarty::$cacheLifeTime;
            $this->configDir = \CSmarty\Config\Smarty::$configDir;
            $this->fileExtension = \CSmarty\Config\Smarty::$fileExtension;
            $this->Debug = \CSmarty\Config\Smarty::$Debug;
        }


        public function Init () 
        {
            $Templates = [];
            $RootFolder = $this->templatesDir;
            $CountFiles = count(glob($RootFolder));
            $isEmpty = ($CountFiles) > 1 ? TRUE : FALSE;
            if(!$isEmpty){
                $Folders = array_diff(scandir($RootFolder), ['..', '.', 'index.html', 'index.php']);
                foreach ($Folders AS $Folder){
                    $Templates[$Folder] = $this->templatesDir . DIRECTORY_SEPARATOR . $Folder;
                }
            }
            if($Templates) {
                $DefaultSys = ["Default" => APPPATH . "Views"];
                $AllTemplate = array_merge($DefaultSys, $Templates);
            }else{
                $AllTemplate = ["Default" => APPPATH . "Views"];
            }
            $this->Smarty->setTemplateDir($AllTemplate);
            //$this->Smarty->setPluginsDir($this->pluginsDir);
            $this->Smarty->force_compile = $this->forceCompile;
            $this->Smarty->setCompileDir($this->compileDir);
            $this->Smarty->caching = $this->cacheOn;
            $this->Smarty->setCacheDir($this->cacheDir);
            $this->Smarty->cache_lifetime = $this->cacheLifeTime;
            $this->Smarty->setConfigDir($this->configDir);
            $this->Smarty->debugging = $this->Debug;
        }

        private function DataPredf () 
        {
            return [
                "Version" => $this->Version,
            ];
        }

        public function View ($View, array $Data = [])
        {
            $DataPDF = $this->DataPredf();
            $Data = array_merge($Data, $DataPDF);
            $this->Smarty->assign($Data);
            $TemplateSelected = $this->templateDefault;
            if($TemplateSelected != "Default"){
                $getFolder = $this->templatesDir . DIRECTORY_SEPARATOR . $TemplateSelected;
                if(!is_dir($getFolder)){
                    $Template = $this->Smarty->getTemplateDir("Default");
                }else{
                    $Template = $this->Smarty->getTemplateDir($TemplateSelected);
                }
            }else{
                $Template = $this->Smarty->getTemplateDir("Default");
            }
            $ViewSelected =  $Template . $View . "." . $this->fileExtension;
            if( !$this->Smarty->templateExists($ViewSelected) ){
                $getViewDefault = $this->Smarty->getTemplateDir("Default") . $View . "." . $this->fileExtension;
                if(!$this->Smarty->templateExists($getViewDefault)){
                    return $this->Smarty->display($this->Smarty->getTemplateDir("Default") . "/errors/ErroView" . "." . $this->fileExtension);
                }
                return $this->Smarty->display($getViewDefault);
            }
            return $this->Smarty->display($ViewSelected);
        }

    }
