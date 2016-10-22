zf-app-blank
============

Autoloading standart [PSR-4](http://www.php-fig.org/psr/psr-4/).

Coding standart [PSR-2](http://www.php-fig.org/psr/psr-2/).

Features
--------

- PHP7
- [Zend Framework 3](https://github.com/zendframework/zendframework)
- [Backbone.js](http://backbonejs.org/)
- [Bootstrap 3](http://getbootstrap.com/)
- [Doctrine ORM 2](http://www.doctrine-project.org/)
- [Debug Bar](https://github.com/snapshotpl/ZfSnapPhpDebugBar)
- [Twig](http://twig.sensiolabs.org/)
- [Assetic Management](https://github.com/kriswallsmith/assetic)
- [RBAC](https://github.com/ZF-Commons/zfc-rbac)
- [Flexible Form Builder](https://github.com/bupy7/zf-form)
- [Support Vagrant](https://www.vagrantup.com/)
- [Support Composer](https://getcomposer.org/)
- [Support Bower](https://bower.io/)
- [Database is PostgreSQL](https://www.postgresql.org/)
- [YUI Comressor](https://github.com/yui/yuicompressor)
- [UglifyJS2](https://github.com/mishoo/UglifyJS2)
- Multilanguage (English and Russian).
- Simple example application (Sign in and Sign up).

Installation
------------

1) Download and unpack the repository.

2) Copy the file `workenv/bootstrap.conf.dist` to `workenv/bootstrap.conf` and
configure its.

3) Run install the work environment using `Vargant`:

```
$ vagrant up
```

4) Run init the work environment.

```
$ vagrant ssh -c 'php bin/init'
```

5) Run install PHP packages:

```
$ vagrant ssh -c 'composer install'
```

6) Run install client-side packages:

```
$ vagrant ssh -c 'bower install'
```

and follow steps.

7) Run create the database schema:

```
$ php bin/console orm:schema-tool:create
```

8) Done.

License
-------

zf-app-blank is released under the BSD 3-Clause License.
