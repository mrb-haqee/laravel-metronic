<?php

namespace App\Http\Controllers\Apps\Masterdata;

use App\DataTables\PermissionsDataTable;
use App\Http\Controllers\Controller;
use App\Models\MenuSub;
use App\Http\Requests\StoreMenuSubRequest;
use App\Http\Requests\UpdateMenuSubRequest;

class MenuSubController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(PermissionsDataTable $dataTable)
    {
        return $dataTable->render('pages/apps.masterdata.menu.detail.list');
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
    public function store(StoreMenuSubRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(MenuSub $menuSub)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(MenuSub $menuSub)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMenuSubRequest $request, MenuSub $menuSub)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MenuSub $menuSub)
    {
        //
    }
}
