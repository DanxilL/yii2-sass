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


Usage
-----

Once the extension is installed, simply use it in your code by  :
I'll update later
```php
<?php Yii::$app->sass->register(Yii::getAlias('@app') . '/web/scss/site.scss'); ?>```