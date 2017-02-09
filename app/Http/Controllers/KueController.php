<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\kue as Kue;
use Input;

class KueController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function submit(Request $r)
	{
		$data = new Kue;
		$data->nama = Input::get('nama');
		$data->jeniskue = Input::get('jeniskue');
		$data->harga = Input::get('harga');
		$data->rasa = Input::get('rasa');
		$photo = $r->file('gambar_pesanan');
		$filename = round(microtime(true));
		$ext = $photo->getClientOriginalExtension();
		$photo->move('img',$filename.'.'.$ext);
		$data->gambar_pemesanan = $filename.'.'.$ext;	
		$data->save();
		return redirect('/admin/pesanan/datakue');
	}
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
