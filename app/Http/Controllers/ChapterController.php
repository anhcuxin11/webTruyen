<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Chapter;
use App\Models\Truyen;

class ChapterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $chapter = Chapter::with('truyen')->orderBy('id', 'DESC')->get();
        return view('adminpc.chapter.index')->with(compact('chapter'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $truyen = Truyen::orderBy('id', 'DESC')->get();
        return view('adminpc.chapter.create')->with(compact('truyen'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate(
            [
                'tieude' => 'required|unique:chapter|max:255',
                'slug_chapter' => 'required|unique:chapter|max:255',

                'tomtat' => 'required',
                'noidung' => 'required',
                'kichhoat' => 'required',
                'truyen_id' => 'required',
            ],
            [
                'slug_chapter.unique' => 'Slug_chapter đã có, xin điền tên khác',
                'tieude.unique' => 'Tiêu đề đã có, xin điền tên khác',
                'tieude.required' => 'Tiêu đề không được để trống',
                'tomtat.required' => 'Tóm tắt chapter không được để trống',
                'noidung.required' => 'Nội dung chapter không được để trống',
                'slug_chapter.required' => 'Slug_chapter không được để trống',
            ]
        );

        $chapter = new Chapter();
        $chapter->tieude = $data['tieude'];
        $chapter->slug_chapter = $data['slug_chapter'];
        $chapter->tomtat = $data['tomtat'];
        $chapter->kichhoat = $data['kichhoat'];
        $chapter->noidung = $data['noidung'];
        $chapter->truyen_id = $data['truyen_id'];

        $chapter->save();
        return redirect()->back()->with('status', 'Thêm chapter thành công');
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
        $chapter = Chapter::find($id);
        $truyen = Truyen::orderBy('id', 'DESC')->get();
        return view('adminpc.chapter.edit')->with(compact('truyen','chapter'));
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
        $data = $request->validate(
            [
                'tieude' => 'required|max:255',
                'slug_chapter' => 'required|max:255',

                'tomtat' => 'required',
                'noidung' => 'required',
                'kichhoat' => 'required',
                'truyen_id' => 'required',
            ],
            [
                'slug_chapter.unique' => 'Slug_chapter đã có, xin điền tên khác',
                'tieude.unique' => 'Tiêu đề đã có, xin điền tên khác',
                'tieude.required' => 'Tiêu đề không được để trống',
                'tomtat.required' => 'Tóm tắt chapter không được để trống',
                'noidung.required' => 'Nội dung chapter không được để trống',
                'slug_chapter.required' => 'Slug_chapter không được để trống',
            ]
        );

        $chapter = Chapter::find($id);
        $chapter->tieude = $data['tieude'];
        $chapter->slug_chapter = $data['slug_chapter'];
        $chapter->tomtat = $data['tomtat'];
        $chapter->kichhoat = $data['kichhoat'];
        $chapter->noidung = $data['noidung'];
        $chapter->truyen_id = $data['truyen_id'];

        $chapter->save();
        return redirect()->back()->with('status', 'Thêm chapter thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Chapter::find($id)->delete();
        return redirect()->back()->with('status', 'Xóa chapter thành công');
    }
}
