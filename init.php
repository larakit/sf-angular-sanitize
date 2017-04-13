<?php
/**
 * Created by Larakit.
 * Link: http://github.com/larakit
 * User: Alexey Berdnikov
 * Date: 23.05.16
 * Time: 10:02
 */
\Larakit\StaticFiles\Manager::package('larakit/sf-angular-sanitize')
    ->setSourceDir('public')
    ->usePackage('larakit/sf-angular')
    ->jsPackage('angular-sanitize.min.js');