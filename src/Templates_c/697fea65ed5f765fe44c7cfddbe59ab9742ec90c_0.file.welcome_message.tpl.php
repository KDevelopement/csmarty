<?php
/* Smarty version 4.2.1, created on 2022-11-11 10:17:27
  from 'A:\laragon\www\panel\vendor\kseven\csmarty\src\templates\Default\welcome_message.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_636e7597678b33_28849342',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '697fea65ed5f765fe44c7cfddbe59ab9742ec90c' => 
    array (
      0 => 'A:\\laragon\\www\\panel\\vendor\\kseven\\csmarty\\src\\templates\\Default\\welcome_message.tpl',
      1 => 1668183441,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_636e7597678b33_28849342 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Welcome to SmartyLib <?php echo $_smarty_tpl->tpl_vars['Version']->value;?>
</title>
        <meta name="description" content="The small framework with powerful features">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" type="image/png" href="https://www.smarty.net/images/logo.png"/>
        <style>
            * {
                transition: background-color 300ms ease, color 300ms ease;
            }
            *:focus {
                background-color: rgba(221, 72, 20, .2);
                outline: none;
            }
            html, body {
                color: rgba(33, 37, 41, 1);
                font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji";
                font-size: 16px;
                margin: 0;
                padding: 0;
                -webkit-font-smoothing: antialiased;
                -moz-osx-font-smoothing: grayscale;
                text-rendering: optimizeLegibility;
            }
            header {
                background-color: rgba(247, 248, 249, 1);
                padding: .4rem 0 0;
            }
            .menu {
                padding: .4rem 2rem;
            }
            header ul {
                border-bottom: 1px solid rgba(242, 242, 242, 1);
                list-style-type: none;
                margin: 0;
                overflow: hidden;
                padding: 0;
                text-align: right;
            }
            header li {
                display: inline-block;
            }
            header li a {
                border-radius: 5px;
                color: rgba(0, 0, 0, .5);
                display: block;
                height: 44px;
                text-decoration: none;
            }
            header li.menu-item a {
                border-radius: 5px;
                margin: 5px 0;
                height: 38px;
                line-height: 36px;
                padding: .4rem .65rem;
                text-align: center;
            }
            header li.menu-item a:hover,
            header li.menu-item a:focus {
                background-color: rgba(221, 72, 20, .2);
                color: rgba(221, 72, 20, 1);
            }
            header .logo {
                float: left;
                height: 44px;
                padding: .4rem .5rem;
            }
            header .menu-toggle {
                display: none;
                float: right;
                font-size: 2rem;
                font-weight: bold;
            }
            header .menu-toggle button {
                background-color: rgba(221, 72, 20, .6);
                border: none;
                border-radius: 3px;
                color: rgba(255, 255, 255, 1);
                cursor: pointer;
                font: inherit;
                font-size: 1.3rem;
                height: 36px;
                padding: 0;
                margin: 11px 0;
                overflow: visible;
                width: 40px;
            }
            header .menu-toggle button:hover,
            header .menu-toggle button:focus {
                background-color: rgba(221, 72, 20, .8);
                color: rgba(255, 255, 255, .8);
            }
            header .heroe {
                margin: 0 auto;
                max-width: 1100px;
                padding: 1rem 1.75rem 1.75rem 1.75rem;
            }
            header .heroe h1 {
                font-size: 2.5rem;
                font-weight: 500;
            }
            header .heroe h2 {
                font-size: 1.5rem;
                font-weight: 300;
            }
            section {
                margin: 0 auto;
                max-width: 1100px;
                padding: 2.5rem 1.75rem 3.5rem 1.75rem;
            }
            section h1 {
                margin-bottom: 2.5rem;
            }
            section h2 {
                font-size: 120%;
                line-height: 2.5rem;
                padding-top: 1.5rem;
            }
            section pre {
                background-color: rgba(247, 248, 249, 1);
                border: 1px solid rgba(242, 242, 242, 1);
                display: block;
                font-size: .9rem;
                margin: 2rem 0;
                padding: 1rem 1.5rem;
                white-space: pre-wrap;
                word-break: break-all;
            }
            section code {
                display: block;
            }
            section a {
                color: rgba(221, 72, 20, 1);
            }
            section svg {
                margin-bottom: -5px;
                margin-right: 5px;
                width: 25px;
            }
            .further {
                background-color: rgba(247, 248, 249, 1);
                border-bottom: 1px solid rgba(242, 242, 242, 1);
                border-top: 1px solid rgba(242, 242, 242, 1);
            }
            .further h2:first-of-type {
                padding-top: 0;
            }
            footer {
                background-color: rgba(221, 72, 20, .8);
                text-align: center;
            }
            footer .environment {
                color: rgba(255, 255, 255, 1);
                padding: 2rem 1.75rem;
            }
            footer .copyrights {
                background-color: rgba(62, 62, 62, 1);
                color: rgba(200, 200, 200, 1);
                padding: .25rem 1.75rem;
            }
            @media (max-width: 629px) {
                header ul {
                    padding: 0;
                }
                header .menu-toggle {
                    padding: 0 1rem;
                }
                header .menu-item {
                    background-color: rgba(244, 245, 246, 1);
                    border-top: 1px solid rgba(242, 242, 242, 1);
                    margin: 0 15px;
                    width: calc(100% - 30px);
                }
                header .menu-toggle {
                    display: block;
                }
                header .hidden {
                    display: none;
                }
                header li.menu-item a {
                    background-color: rgba(221, 72, 20, .1);
                }
                header li.menu-item a:hover,
                header li.menu-item a:focus {
                    background-color: rgba(221, 72, 20, .7);
                    color: rgba(255, 255, 255, .8);
                }
            }
        </style>
    </head>
    <body>
        <header>
            <div class="menu">
                <ul>
                    <li class="logo">
                        <a href="https://github.com/ks7ven/csmarty" target="_blank">
                            <img src="https://www.smarty.net/images/logo.png">
                        </a>
                    </li>
                    <li class="menu-toggle">
                        <button onclick="toggleMenu();">&#9776;</button>
                    </li>
                    <li class="menu-item hidden"><a href="#">Home</a></li>
                    <li class="menu-item hidden"><a href="https://smarty-php.github.io/smarty/" target="_blank">Docs of Smarty</a>
                    </li>
                    <li class="menu-item hidden"><a href="https://codeigniter4.github.io/userguide/" target="_blank">Docs of CodeIgniter 4</a>
                    </li>
                    <li class="menu-item hidden"><a href="https://forum.codeigniter.com/" target="_blank">Community of CodeIgniter 4</a></li>
                    <li class="menu-item hidden"><a
                            href="https://github.com/ks7ven/csmarty/blob/develop/CONTRIBUTING.md" target="_blank">Contribute of SmartyLib</a>
                    </li>
                </ul>
            </div>
            <div class="heroe">
                <h1>Welcome to Smarty 4 for CodeIgniter 4</h1>
                <h2>The small framework with powerful features</h2>
            </div>
        </header>
        <section>
            <h1>About this page</h1>
            <p>The page you are looking at is being generated dynamically by CodeIgniter (usage SmartyLib).</p>
            <p>If you would like to edit this page you will find it located at:</p>
            <pre><code>vendor/kseven/csmarty/src/templates/Default/welcome_message.tpl</code></pre>
            <p>The corresponding controller for this page can be found at:</p>
            <pre><code>vendor/kseven/csmarty/src/Controllers/Home.php</code></pre>
        </section>
        <div class="further">
            <section>
                <h2>
                    <svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 512 512'><rect x='32' y='96' width='64' height='368' rx='16' ry='16' style='fill:none;stroke:#000;stroke-linejoin:round;stroke-width:32px'/><line x1='112' y1='224' x2='240' y2='224' style='fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px'/><line x1='112' y1='400' x2='240' y2='400' style='fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px'/><rect x='112' y='160' width='128' height='304' rx='16' ry='16' style='fill:none;stroke:#000;stroke-linejoin:round;stroke-width:32px'/><rect x='256' y='48' width='96' height='416' rx='16' ry='16' style='fill:none;stroke:#000;stroke-linejoin:round;stroke-width:32px'/><path d='M422.46,96.11l-40.4,4.25c-11.12,1.17-19.18,11.57-17.93,23.1l34.92,321.59c1.26,11.53,11.37,20,22.49,18.84l40.4-4.25c11.12-1.17,19.18-11.57,17.93-23.1L445,115C443.69,103.42,433.58,94.94,422.46,96.11Z' style='fill:none;stroke:#000;stroke-linejoin:round;stroke-width:32px'/></svg>
                    Smarty
                </h2>
                <p>
                    Smarty is a template engine for PHP, facilitating the separation of presentation (HTML/CSS) from application logic.
                    Check the <a href="https://smarty-php.github.io/smarty/" target="_blank">User Guide</a> !
                </p>
            </section>
        </div>
        <footer>
            <div class="copyrights">
                <p>&copy; <?php echo date('Y');?>
 // Credits: CodeIgniter, Smarty And KSeven.</p>
            </div>
        </footer>
        <?php echo '<script'; ?>
>
            function toggleMenu() {
                var menuItems = document.getElementsByClassName('menu-item');
                for (var i = 0; i < menuItems.length; i++) {
                    var menuItem = menuItems[i];
                    menuItem.classList.toggle("hidden");
                }
            }
        <?php echo '</script'; ?>
>
    </body>
</html>
<?php }
}
