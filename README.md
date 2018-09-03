#Developer

# myexamblog - cakePHP exam blog - Ian Christopher Pulan
- database name     : myexamblog
- database username : root
- database password : ''
- hostname          : localhost
-sql file           : myexamblog.slq // import under database name: myexamblog

# pages - public pages
+ index page    - localhost/myexamblog/ // set as home
+ archive page  - localhost/myexamblog/posts/archive
 - subpages are the following best if accessed in 'index' or in 'archive':
    + single page   - localhost/myexamblog/posts/single/{{id}} // Where {{id}} is equal to Posts.id

+ admin-login page  - localhost/myexamblog/users/login // ex.user&pass user = index123 | pass = index123
  # if you need to add user, I created a view for this purpose only, you can delete it after creating your own user
    - add-user page - localhost/myexamblog/users/add-user

# admin pages - required login
+ admin-list page - localhost/myexamblog/posts/admin-list
+ admin-post page - localhost/myexamblog/posts/admin-post
  - subpages are the following best if accessed in parent page 'admin-post':
  - admin-post-edit page  - localhost/myexamblog/posts/admin-post-edit/{{id}} // Where {{id}} is equal to Posts.id  





# CakePHP Application Skeleton

[![Build Status](https://img.shields.io/travis/cakephp/app/master.svg?style=flat-square)](https://travis-ci.org/cakephp/app)
[![Total Downloads](https://img.shields.io/packagist/dt/cakephp/app.svg?style=flat-square)](https://packagist.org/packages/cakephp/app)

A skeleton for creating applications with [CakePHP](https://cakephp.org) 3.x.

The framework source code can be found here: [cakephp/cakephp](https://github.com/cakephp/cakephp).

## Installation

1. Download [Composer](https://getcomposer.org/doc/00-intro.md) or update `composer self-update`.
2. Run `php composer.phar create-project --prefer-dist cakephp/app [app_name]`.

If Composer is installed globally, run

```bash
composer create-project --prefer-dist cakephp/app
```

In case you want to use a custom app dir name (e.g. `/myapp/`):

```bash
composer create-project --prefer-dist cakephp/app myapp
```

You can now either use your machine's webserver to view the default home page, or start
up the built-in webserver with:

```bash
bin/cake server -p 8765
```

Then visit `http://localhost:8765` to see the welcome page.

## Update

Since this skeleton is a starting point for your application and various files
would have been modified as per your needs, there isn't a way to provide
automated upgrades, so you have to do any updates manually.

## Configuration

Read and edit `config/app.php` and setup the `'Datasources'` and any other
configuration relevant for your application.

## Layout

The app skeleton uses a subset of [Foundation](http://foundation.zurb.com/) (v5) CSS
framework by default. You can, however, replace it with any other library or
custom styles.
