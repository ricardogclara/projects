<?php

// Home
/*Breadcrumbs::register('home', function($breadcrumbs)
{
    $breadcrumbs->push('Home', route('home'));
});

// Home > About
Breadcrumbs::register('bares', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Bares', route('bares'));
});

Breadcrumbs::register('login', function($breadcrumbs)
{
    $breadcrumbs->push('Login', route('login'));
});
Breadcrumbs::register('flyers', function($breadcrumbs)
{
	 $breadcrumbs->parent('home');
    $breadcrumbs->push('Flyers', route('flyers'));
});
Breadcrumbs::register('edit-bares', function($breadcrumbs)
{
	 $breadcrumbs->parent('bares');
    $breadcrumbs->push('Edit', route('edit-bares'));
});*/









	

// // Home > Blog
// Breadcrumbs::register('blog', function($breadcrumbs)
// {
//     $breadcrumbs->parent('home');
//     $breadcrumbs->push('Blog', route('blog'));
// });

// // Home > Blog > [Category]
// Breadcrumbs::register('category', function($breadcrumbs, $category)
// {
//     $breadcrumbs->parent('blog');
//     $breadcrumbs->push($category->title, route('category', $category->id));
// });

// // Home > Blog > [Category] > [Page]
// Breadcrumbs::register('page', function($breadcrumbs, $page)
// {
//     $breadcrumbs->parent('category', $page->category);
//     $breadcrumbs->push($page->title, route('page', $page->id));
// });