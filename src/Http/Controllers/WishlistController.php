<?php

namespace Src\Http\Controllers;

use Slim\Psr7\Request;
use Slim\Psr7\Response;
use Src\Http\Models\Category;
use Src\Http\Models\Game;
use Src\Providers\View;

class WishlistController
{
    public static function index(Request $req, Response $res, $args)
    {
        // get categories for navigation
        $categories = Category::all();

        // get category from url
        $categorySlug = $req->getAttribute('category');

        if (!$categorySlug) {
            // get all games from database
            $games = Game::all();
        } else {
            // get games from category
            $category = Category::where('slug', $categorySlug)->first();
            $games = $category->games;
        }

        $view = View::render(
            'wishlist',
            compact('games', 'categories', 'categorySlug')
        );
        $res->getBody()->write($view);
        return $res;
    }

    public static function detail(Request $req, Response $res, $args)
    {
        $categories = Category::all();
        $categorySlug = $req->getAttribute('category');
        $gameSlug = $req->getAttribute('gameslug');
        $game = Game::where('slug', $gameSlug)->first();
        $view = View::render(
            'detail',
            compact('game', 'categories', 'categorySlug')
        );
        $res->getBody()->write($view);
        return $res;
    }

    public static function addCategory(Request $req, Response $res, $args)
    {
        // get data from form
        $data = $req->getParsedBody();

        // create new game
        $category = new Category();
        $category->title = $data['inputCategory'];
        $category->category_id = 1;
        $category->save();

        // redirect to wishlist
        // header("Location: " . $data['redirect']);
        // exit;
        return $res->withHeader('Location', $data['redirect'])->withStatus(302);
    }

    public static function deleteGame($id)
    {
    }

    public static function test(Request $req, Response $res, $args)
    {

        $res->getBody()->write('{ "json": true }');
        return $res;
    }
}
