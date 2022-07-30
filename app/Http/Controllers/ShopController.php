<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use Illuminate\Http\Request;

/**
 * Class ShopController
 * @package App\Http\Controllers
 */
class ShopController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'checkadmin']);
    }
    
    public function index()
    {
        $shops = Shop::paginate();

        $admin_active = 'active';
        $title = 'Lojas';

        return view('shop.index', compact('shops', 'title', 'admin_active'))
            ->with('i', (request()->input('page', 1) - 1) * $shops->perPage());
    }

    public function create()
    {
        $shop = new Shop();
        $admin_active = 'active';
        $title = 'Adicionar Loja';

        return view('shop.create', compact('shop', 'title', 'admin_active'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Shop::$rules);

        $shop = Shop::create($request->all());

        return redirect()->route('shops.index')
            ->with('success', 'Shop created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $shop = Shop::find($id);

        return view('shop.show', compact('shop'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $shop = Shop::find($id);

        return view('shop.edit', compact('shop'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Shop $shop
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Shop $shop)
    {
        request()->validate(Shop::$rules);

        $shop->update($request->all());

        return redirect()->route('shops.index')
            ->with('success', 'Shop updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $shop = Shop::find($id)->delete();

        return redirect()->route('shops.index')
            ->with('success', 'Shop deleted successfully');
    }
}
