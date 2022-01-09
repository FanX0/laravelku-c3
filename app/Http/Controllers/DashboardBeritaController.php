<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Category;
use Illuminate\Http\Request;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Str;


class DashboardBeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.berita.index',[
            'berita'=> Berita::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.berita.create', [
            'categories'=> Category::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'judul_berita'=>'required|max:255',
            'slug'=>'required',
            'category_id'=>'required',
            'isi_berita'=>'required'
            ]);
        $validateData['excerpt'] = Str::limit(strip_tags($request->isi_berita). 100);

        Berita::create($validateData);

        return redirect('/dashboard/berita')->with('sukses', 'Berita Baru Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function show(Berita $beritum)
    {
        return view('dashboard.berita.show',[
            'berita'=> $beritum
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function edit(Berita $beritum)
    {
        return view('dashboard.berita.edit', [
            'berita'=> $beritum,
            'categories'=> Category::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Berita $beritum)
    {
        $rules = [
            'judul_berita'=>'required|max:255',
            'category_id'=>'required',
            'isi_berita'=>'required'
        ];
        
        if($request->slug != $beritum->slug){
            $rules['slug']='required|unique:beritas';
        }
        $validateData = $request->validate($rules);
        
        $validateData['excerpt'] = Str::limit(strip_tags($request->isi_berita). 100);

        Berita::where('id', $beritum->id)
                ->update($validateData);

        return redirect('/dashboard/berita')->with('sukses', 'Berita Baru Berhasil Ditambahkan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function destroy(Berita $beritum)
    {
        Berita::destroy($beritum->id);

        return redirect('/dashboard/berita')->with('sukses','Data Berita Berhasil Dihapus');
    }
        public function checkSlug(Request $request){
            $slug = SlugService::createSlug(Berita::class, 'slug', $request->judul_berita);
        
            return response()->json(['slug'=>$slug]);
    }
}