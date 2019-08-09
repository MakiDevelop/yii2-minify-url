Yii 2 Minify-URL Project (Shortener)
============================

[![Codacy Badge](https://api.codacy.com/project/badge/Grade/40ba1520435842279111a89b137aace0)](https://www.codacy.com/app/gaalferov/yii2-minify-url?utm_source=github.com&amp;utm_medium=referral&amp;utm_content=gaalferov/yii2-minify-url&amp;utm_campaign=Badge_Grade)

Project on Yii2 framework for create your short business url with analytics (geo position (country), browser, platform, referal url)

You can see [demo](https://burl.pro/)

What can you do
----
* Input your long url and get 'public' short link with analytics information
* For registration you can use any popular social networks (VK, FB, Google+, etc)
* After registration, you can input your long url and get 'private' shortlink. In 'private' url, analytic information hidden from other users

For example:
* Long url: https://gaalferov.com/about-me.html
* Short url: https://burl.pro/QTkNRW

![Example](https://burl.pro/images/example.gif)

### Install via Composer
----
If you do not have [Composer](http://getcomposer.org/), you may install it by following the instructions at [getcomposer.org](http://getcomposer.org/doc/00-intro.md#installation-nix).

You can then install the application using the following command:

~~~
git clone https://github.com/gaalferov/yii2-minify-url.git .
composer global update fxp/composer-asset-plugin --no-plugins
composer install
~~~

GETTING STARTED
---------------

After you install the application, you have to conduct the following steps to initialize the installed application. You only need to do these once for all.

* Create a new database
* Add and edit the file `config/db-local.php` with real data, for example:
```php
<?php
return [
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host=localhost;dbname=yii2',
    'username' => 'yourUsername',
    'password' => 'yourPassword',
    'charset' => 'utf8',
    'tablePrefix' => 'nix_',
];
```
* Add to file `config/web-local.php` your oauth data, for example:
```php
<?php
return  [
  'components' => [
    'authClientCollection' => [
      'clients' => [
        'vkontakte' => [
          'class' => 'budyaga\users\components\oauth\VKontakte',
          'clientId' => 'XXX',
          'clientSecret' => 'XXX',
          'scope' => 'email'
        ],
        'google' => [
          'class' => 'budyaga\users\components\oauth\Google',
          'clientId' => 'XXX',
          'clientSecret' => 'XXX',
        ],
        'facebook' => [
          'class' => 'budyaga\users\components\oauth\Facebook',
          'clientId' => 'XXX',
          'clientSecret' => 'XXX',
        ],
        'github' => [
          'class' => 'budyaga\users\components\oauth\GitHub',
          'clientId' => 'XXX',
          'clientSecret' => 'XXX',
          'scope' => 'user:email, user'
        ],
        'linkedin' => [
          'class' => 'budyaga\users\components\oauth\LinkedIn',
          'clientId' => 'XXX',
          'clientSecret' => 'XXX',
        ],
        'live' => [
          'class' => 'budyaga\users\components\oauth\Live',
          'clientId' => 'XXX',
          'clientSecret' => 'XXX',
        ],
        'yandex' => [
          'class' => 'budyaga\users\components\oauth\Yandex',
          'clientId' => 'XXX',
          'clientSecret' => 'XXX',
        ],
        'twitter' => [
          'class' => 'budyaga\users\components\oauth\Twitter',
          'consumerKey' => 'XXX',
          'consumerSecret' => 'XXX',
        ],
      ],
    ],
  ],
];
```

* Apply migrations with console command:
```php
php yii migrate
```

Now, you can use the application:
~~~
Admin user: admin@burl.pro
Admin password: adminpassword

http://localhost/
https://localhost/user/admin (Manage all users)
https://localhost/url (Manage all urls)
https://localhost/user/rbac (Role-Based Access Control)
https://localhost/profile (Your profile)
~~~


TESTS
---------------

In progress...
