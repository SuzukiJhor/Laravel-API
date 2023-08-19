<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Repositories\LessonRepositoryInterface;
use App\Repositories\ModuleRepositoryInterface;
use Illuminate\Http\Request;

class LessonController extends Controller
{
    protected $repository;
    protected $repositoryModule;
    
    public function __construct(ModuleRepositoryInterface $repositoryModule, LessonRepositoryInterface $repository)
    {
        $this->$repositoryModule = $repositoryModule;
        $this->repository = $repository;
    }

    public function index(Request $request, $moduleId)
    {
        if (!$module = $this->repositoryModule->findById($moduleId))
            return back();

        $data = $this->repository->getAllByModuleId(
            moduleId: $moduleId,
            filter: $request->filter ?? ''
        );

        $lessons = convertArrayToObject($data);

        return view('admin.courses.modules.lessons.index-lessons', compact('module', 'lessons'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
