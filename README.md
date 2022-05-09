<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Table role
on installe la librairie fortify 
```php 
composer require laravel/fortify
```
ensuite on voit pour les roles
``` php artisan make:model Role -m ```

la function -m nous crééer une table migration, nous pouvons indiquer des liaisons entre les tables
```php
            $table->foreignId('role_id')->constrained();

```
avec des clés étrangères

on indique la relation dans le model user avec la function role
```php
        return $this->belongsTo('App\Models\Role');

```
un php artisan migrate pour migrer dans la base de données nos migrations créées

## construction website 

tags
vip/gold/diamands

villes plus populaires
nouvelle inscrite
filtre recherche
inscrite proche ville

## ficher technique
coordonnees
personnelle notions
details (tags)
langues
a propos
commentaires

vues totales {{ $list->links()->count() }}

vue aujourd'hui
date enregistrement
derniere connection

favoris
ajouter au top50

hauteur
poid
interesse par
fumes 
langues
jour de la semaine
cheveux
yeux
etchni
age
sexe
numero
ville
showname
