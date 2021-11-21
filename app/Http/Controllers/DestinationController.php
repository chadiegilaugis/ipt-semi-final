<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DestinationModel;

class DestinationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        return view('pages.index');
    }


    public function destinationList()
    {
        return view('pages.destination_list');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('pages.create_destination');
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

        $destinations = new DestinationModel();

        $destinations->name = $request->name;
        $destinations->address = $request->address;
        $destinations->type = $request->type;
        $destinations->rating = $request->rating;

        $destinations->save();

        return redirect('create-destination')->with(['success' => 'New Destination created successfully']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {


        $destinationList = DestinationModel::paginate(4);

        return view('pages.destination_list',['destinationList'=>$destinationList]);

    }



}
