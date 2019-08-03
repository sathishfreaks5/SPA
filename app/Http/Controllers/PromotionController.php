<?php

namespace App\Http\Controllers;
 
use App\Block;
use App\Repositories\Repository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic as Image;

class PromotionController extends Controller
{
    protected $model;

    protected $blockName = 'promotion';

   public function __construct(Block $block){ 
        $this->model  = new Repository($block);

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        $myData = $this->model->blocks($this->blockName);
        
        return view('admin.blocks.activity.promotion.index', compact('data')); 
    } 
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
     
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         /*   $this->validate($request, [
           'body' => 'required|max:500'
       ]);

       // create record and pass in only fields that are fillable
       return $this->model->create($request->only($this->model->getModel()->fillable));
       */
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Activity  $activity
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    { 
        $data =$this->model->show($id);
        return view('admin.blocks.activity.promotion.view', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Activity  $activity
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $data =$this->block->show($id);
        return view('admin.blocks.activity.promotion.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Activity  $activity
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        /*
  $this->model->update($request->only($this->model->getModel()->fillable), $id);

       return $this->model->find($id);
        */
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Activity  $activity
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        //
    }
}
