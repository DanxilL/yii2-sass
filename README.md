Yii2 sass compiler
==================
compiles sass assets

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist danxill/yii2-sass "*"
```

or add

```
"danxill/yii2-sass": "*"
```

to the require section of your `composer.json` file.

Configuration
-----
```php
'components' => array(
    ...
   'sass' => [
               // Path to the SassHandler class
               'class' => '\danxill\sass\SassHandler',
               // Enable Compass support, defaults to false
               'enableCompass' => true,
               
               //By default it is '@runtime/sass-cache'
                'cachePath' => '@runtime/sass-cache',                       
               
               
               // Path to a directory with compiled CSS files.
               // Will be created automatically if it doesn't exist.
               // Will be chmod'ed to become writable,
               // see "writableDirectoryPermissions" parameter.
               // Yii aliases can be used.
               // Defaults to '@web/css-compiled'
               'sassCompiledPath' => '@web/css-compiled',
               
               // Force compilation/recompilation on each request.
               // False value means that compilation will be done only if 
               // source SCSS file or related imported files have been
               // changed after previous compilation.
               // Defaults to false
               'forceCompilation' => false,
               
               // Turn on/off overwriting of already compiled CSS files.
               // Will be ignored if "forceCompilation" parameter's value is true.
               //
               // True value means that compiled CSS file will be overwriten
               // if the source SCSS file or related imported files have
               // been changed after previous compilation.
               //
               // False value means that compilation will be done only if
               // an output CSS file doesn't exist.
               //
               // Defaults to true
               'allowOverwrite' => true,
               
               // Automatically add directory containing SCSS file being processed
               // as an import path for the @import Sass directive.
               // Defaults to true
               'autoAddCurrentDirectoryAsImportPath' => true,
               
               // List of import paths.
               // Can be a list of strings or callable functions:
               // function($searchPath) {return $targetPath;}
               // Defaults to an empty array
               'importPaths' => array(),
               
               // Chmod permissions used for creating/updating of writable
               // directories for cache files and compiled CSS files.
               // Mind the leading zero for octal values.
               // Defaults to 0777
               'writableDirectoryPermissions' => 0777,
       
               // Chmod permissions used for creating/updating of writable
               // cache files and compiled CSS files.
               // Mind the leading zero for octal values.
               // Defaults to 0666
               'writableFilePermissions' => 0666,
       
             
               
               // Customize the formatting of the output CSS.
               // Use one of the SassHandler::OUTPUT_FORMATTING_* constants
               // to set the formatting type.
               // @link http://leafo.net/scssphp/docs/#output_formatting
               // Default is OUTPUT_FORMATTING_NESTED
               'compilerOutputFormatting' => SassHandler::OUTPUT_FORMATTING_NESTED,
               
               // Id of the cache application component.
               // Defaults to 'cache' (the primary cache application component)
               'cacheComponentId' => 'cache',
           ],
    ...
),
```


Usage
-----


Once the extension is installed, simply use it in your code by  :
```php
namespace app\assets;


use Yii;
use yii\web\AssetBundle;

class ThemeAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'scss/site.scss',
    ];
    public $js = [
    ];

    public function init()
    {
        parent::init();
        $this->css = Yii::$app->sass->publishAndGetPathArray($this->css,Yii::getAlias($this->baseUrl));
    }



}
```