<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Photos;

class PhotosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $photos = Photos::latest()->paginate(5);
        return view('photos.index',compact('photos'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('photos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // request()->validate([
        //     'url' => 'required',
        //     'caption' => 'required',
        // ]);
        $image = $request->file('url');
        
        $input['imagename'] = time().'.'.$image->getClientOriginalExtension();
    
        $destinationPath = public_path('/img/photos');
    
        $image->move($destinationPath, $input['imagename']);
        $urls = $input['imagename'];
        $data = $request->all();
        $data['url'] = $urls;
        // $this->postImage->add($input);
       
        Photos::create($data);
        return redirect()->route('photos.index')
                        ->with('success','Photo created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $photo = Photos::find($id);
        return view('photos.show',compact('photo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $photo = Photos::find($id);
        return view('photos.edit',compact('photo'));
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
       
        $image = $request->file('url');
        
        $input['imagename'] = time().'.'.$image->getClientOriginalExtension();
    
        $destinationPath = public_path('/img/photos');
    
        $image->move($destinationPath, $input['imagename']);
        $urls = $input['imagename'];
        $data = $request->all();
        $data['url'] = $urls;

        Photos::find($id)->update($data);
        return redirect()->route('photos.index')
                        ->with('success','Photo updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Photos::find($id)->delete();
        return redirect()->route('photos.index')
                        ->with('success','Photo deleted successfully');
    }
}
