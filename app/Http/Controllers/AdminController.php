<?php

namespace App\Http\Controllers;

use App\Repositories\ImageRepository;

class AdminController extends Controller
{
    protected $repository;

    /**
     * Create a new AdminController instance.
     *
     * @param  \App\Repositories\ImageRepository $repository
     */
    public function __construct(ImageRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Display a listing of the orphans.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orphans = $this->repository->getOrphans ();
        $countOrphans = count($orphans);

        return view('maintenance.index', compact ('orphans', 'countOrphans'));
    }

    /**
     * Remove orphans from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        $this->repository->destroyOrphans ();

        return response()->json();
    }
}
