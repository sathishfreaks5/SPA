<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Activity;
use App\Block;

class BannerController extends Controller
{
    protected $block;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Block $block)
    {
        $this->middleware('auth');
        $this->block = $block;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data =  $this->block->latest()->paginate(5);
        //admin.blocks.standard.banner.index
        return view('admin.blocks.standard.banner.index', compact('data'))
                ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.blocks.standard.banner.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([ 
            'image'         =>  'required|image|max:2048'
        ]);
        $image = $request->file('image');
        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $new_name);
        $form_data = array( 
            'image'            =>   $new_name,
            'isEnabled'        =>   1, 
            'block'        =>   'banner', 
        );
       $this->block->create($form_data);
        return redirect('banner-management')->with('success', 'Data Added successfully.');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data =$this->block->findOrFail($id);
        return view('admin.blocks.standard.banner.view', compact('data'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data =$this->block->findOrFail($id);
        return view('admin.blocks.standard.banner.edit', compact('data'));
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
        $image_name = $request->hidden_image;
        $image = $request->file('image');
        if($image != '')
        {
            $request->validate([ 
                'image'         =>  'image|max:2048'
            ]);
            $image_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $image_name);
        }
        else
        {
            
        }
        $form_data = array( 
            'image'         =>  $image_name
        );
       $this->block->whereId($id)->update($form_data);
        return redirect('banner-management')->with('success', 'Data is successfully updated');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data =$this->block->findOrFail($id);
        $data->delete();
        return redirect('banner-management')->with('success', 'Data is successfully deleted');
    }
}
