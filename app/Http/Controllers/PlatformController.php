<?php

namespace App\Http\Controllers;

use App\Models\Platform;
use Illuminate\Http\Request;

/**
 * Class PlatformController
 * @package App\Http\Controllers
 */
class PlatformController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $platforms = Platform::paginate();

        return view('platform.index', compact('platforms'))
            ->with('i', (request()->input('page', 1) - 1) * $platforms->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $platform = new Platform();
        return view('platform.create', compact('platform'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Platform::$rules);

        $platform = Platform::create($request->all());

        return redirect()->route('platforms.index')
            ->with('success', 'Platform created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $platform = Platform::find($id);

        return view('platform.show', compact('platform'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $platform = Platform::find($id);

        return view('platform.edit', compact('platform'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Platform $platform
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Platform $platform)
    {
        request()->validate(Platform::$rules);

        $platform->update($request->all());

        return redirect()->route('platforms.index')
            ->with('success', 'Platform updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $platform = Platform::find($id)->delete();

        return redirect()->route('platforms.index')
            ->with('success', 'Platform deleted successfully');
    }
}
