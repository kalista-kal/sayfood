<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Food;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;

class FoodController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

        $popular     = Food::with('restaurant')->inRandomOrder()->take(10)->get();
        $mainCourses = Food::with('restaurant')->where('category_id', 1)->get();
        $desserts    = Food::with('restaurant')->where('category_id', 2)->get();
        $drinks      = Food::with('restaurant')->where('category_id', 3)->get();
        $snacks      = Food::with('restaurant')->where('category_id', 4)->get();

        $searchQuery = $request->query('q');
        $priceMax    = $request->query('price');
        $ratingMin   = $request->query('rating');
        $sort        = $request->query('sort');

        $popular = Cache::remember('popular_foods', now()->addHours(1), function () {
            return Food::with('restaurant')->inRandomOrder()->take(10)->get();
        });

        $filters = function ($query) use ($searchQuery, $priceMax, $ratingMin) {
            if ($searchQuery) {
                $query->where(function ($q) use ($searchQuery) {
                    $q->where('foods.name', 'like', '%' . $searchQuery . '%')
                        ->orWhereHas('restaurant', function ($q2) use ($searchQuery) {
                            $q2->where('name', 'like', '%' . $searchQuery . '%');
                        });
                });
            }

            if ($priceMax) {
                $query->where('foods.price', '<=', (int)$priceMax);
            }

            if ($ratingMin) {
                $query->whereHas('restaurant', function ($q) use ($ratingMin) {
                    $q->where('avg_rating', '>=', (float) $ratingMin);
                });
            }
        };


        $applySorting = function ($query) use ($sort) {
            if ($sort === 'nearby') {
                $query->join('restaurants', 'foods.restaurant_id', '=', 'restaurants.id')
                    ->orderBy('restaurants.distance', 'asc')
                    ->select('foods.*');
            } elseif ($sort === 'popular') {
                $query->join('restaurants', 'foods.restaurant_id', '=', 'restaurants.id')
                    ->orderBy('restaurants.avg_rating', 'desc')
                    ->select('foods.*');
            }
        };

        $mainCourses = Food::with('restaurant')->where('category_id', 1)
            ->where($filters)->tap($applySorting)->get();

        $desserts = Food::with('restaurant')->where('category_id', 2)
            ->where($filters)->tap($applySorting)->get();

        $snacks = Food::with('restaurant')->where('category_id', 4)
            ->where($filters)->tap($applySorting)->get();

        $drinks = Food::with('restaurant')->where('category_id', 3)
            ->where($filters)->tap($applySorting)->get();

        $cartItemCount = 0;
        if (Auth::check()) {
            $cartItemCount = Cart::where('user_id', Auth::id())->sum('quantity');
        }

        return view('foods', compact('popular', 'mainCourses', 'desserts', 'snacks', 'drinks', 'cartItemCount'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
