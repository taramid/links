<?php

namespace App\Http\Controllers;

use App\Models\Link;
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
            'links' => Link::select('links.id','links.hook','links.url')->orderBy('id', 'desc')->limit(env('INDEX_CHUNK', 44))->get()
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
     * @param  \NanoidClient  $nano
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request, \NanoidClient $nano)
    {
        $request->validate([
            'url' => 'required|url',
            'hook' => 'nullable|max:14|alpha_dash'
        ]);

        $hook = $request->input('hook');
        if (empty($hook)) {
            do {
                $hook = $nano->generateId(env('HOOK_LEN', 5));
            } while ($this->isHookAlreadyTaken($hook));
        } else {
            if ($this->isHookAlreadyTaken($hook)) {
                return back();
            }
        }

        $link = new Link();
        $link->user_id = 1;
        $link->url = $request->input('url');
        $link->hook = $hook;

        $link->save();

        return redirect()->route('links.index');
    }

    /**
     * Check if such a hook already exists
     *
     * @param string $hook
     * @return bool
     */
    private function isHookAlreadyTaken(string $hook)
    {
        return Link::where('hook', $hook)->exists();
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
