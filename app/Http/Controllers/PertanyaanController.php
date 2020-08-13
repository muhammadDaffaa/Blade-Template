<?php

namespace App\Http\Controllers;

use App\post;
use Illuminate\Http\Request;

use DB;
use Dotenv\Result\Success;

use function GuzzleHttp\Promise\all;

class PertanyaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $post = post::all();
        return view('post.index', compact('post'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('post.create');
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
            'judul' => 'required|unique:pertanyaan',
            'isi' => 'required'
        ]);

        post::create($request->all());
        return redirect('/pertanyaan')->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $show = post::find($id);
        return view('post.detail', compact('show'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $show = post::find($id);
        return view('post.edit', compact('show'));
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
        post::where('id', $id)
            ->update([
                'judul' => $request['judul'],
                'isi' => $request['isi']
            ]);
        return redirect('/pertanyaan')->with('success', 'Berhasil Di Ubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        post::destroy($id);
        return redirect('/pertanyaan')->with('success', 'Berhasil Di Hapus!');
    }
}
