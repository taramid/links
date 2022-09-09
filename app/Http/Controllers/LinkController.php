<?php

namespace App\Http\Controllers;

use App\Models\Link;
use Hidehalo\Nanoid\Client;
use Illuminate\Http\Request;
use Symfony\Component\Routing\Annotation\Route;

class LinkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    #[Route('/links')]
    public function index()
    {
        return response()->view('links.index', [
            'links' => Link::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return response()->view('links.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $nano = new Client();

        $link = new Link();
        $link->user_id = 1;
        $link->url = $request->input('url');
        $link->hook = $nano->generateId(env('HOOK_LEN', 5));

        $link->save();

        return redirect()->route('links.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Link  $link
     * @return \Illuminate\Http\Response
     */
    public function show(Link $link)
    {
        return response()->view('links.show', [
            'link' => $link
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Link  $link
     * @return \Illuminate\Http\Response
     */
    public function edit(Link $link)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Link  $link
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Link $link)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Link  $link
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Link $link)
    {
        $link->delete();

        return redirect()->route('links.index');
    }
}
