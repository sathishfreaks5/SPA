<?php

namespace App\Http\Controllers;

use App\Block;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic as Image;

class BlockController extends Controller
{

    private $block;

   public function __construct(Block $block){
       // $this->middleware(['auth']);

        $this->block = $block;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function banner()
    {
         return view('admin.blocks.standard.banner_list');
    }

     public function logo()
    {
        $filename = 'no_image.png';
      $logo = $this->block->select('content')->where('block','=','logo')->first();
     if(!empty($logo))  {  $filename = $logo['content']; } 
 
        return view('admin.blocks.standard.logo',['filename' => $filename]);
    } 





     public function logo_store(Request $request)
    {

        $request->validate([
            'image' => 'required|image|mimes:jpeg,jpg,png' 
        ]);


            if($request->hasFile('image')){
                //get image file.
                $image = $request->image;
                //get just extension.
                $ext = $image->getClientOriginalExtension();
                //make a unique name
                $filename = uniqid().'.'.$ext;
                //upload the image
               // $image->storeAs('public/logo',$filename);
                // $imagePath = $request->file('image')->store('public');
                // Storage::put($imagePath,$filename);
                // $image = Image::make('public/logo/'.$filename)->resize(300, 200);
                    

                  $insertArray['isEnabled'] = 1; 
                  $insertArray['content'] = $filename;


                  Block::updateOrInsert(  ['block' => 'logo'], $insertArray);        
                //delete the previous image.
                    // Storage::delete("public/pics/{$user->image}");
          
              return redirect()->route('admin.blocks.standard.logo')
                        ->with('success','Logo created successfully.');
            }
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
     * @param  \App\Block  $block
     * @return \Illuminate\Http\Response
     */
    public function show(Block $block)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Block  $block
     * @return \Illuminate\Http\Response
     */
    public function edit(Block $block)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Block  $block
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Block $block)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Block  $block
     * @return \Illuminate\Http\Response
     */
    public function destroy(Block $block)
    {
        //
    }
}
