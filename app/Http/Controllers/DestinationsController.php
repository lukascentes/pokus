<?php


namespace App\Http\Controllers;
use App\Destinations;
use Illuminate\Http\Request;

class DestinationsController extends Controller
{
    public function showAllAction()
    {
        $destinations = Destinations::all();
        return view("frontView.admin.destinations", ['destinations' => $destinations]);

    }


    public function getAddDestinationForm(){

        return view ("frontView.admin.adddestination");
    }

    public function insertAction(Request $request){

        $stat = $request->input('stat');
        $typ = $request->input('typ');
        $popis = $request->input('popis');
        $datum = $request->input('datum');
        $zakladne_info = $request->input('zakladne_info');
        $vyhlasenie_kde = $request->input('vyhlasenie_kde');
        $vyhlasenie_kedy = $request->input('vyhlasenie_kedy');
        $vyhlasenie_prianie = $request->input('vyhlasenie_prianie');
        $vyhlasenie_kto = $request->input('vyhlasenie_kto');
        $vyhlasenie = $request->input('vyhlasenie');
        $pred_odjazdom = $request->input('pred_odjazdom');
        $po_navrate = $request->input('po_navrate');




        $destination = new Destinations();
        $destination->stat = $stat;
        $destination->typ = $typ;
        $destination->popis = $popis;
        $destination->datum = $datum;
        $destination->zakladne_info = $zakladne_info;
        $destination->vyhlasenie_kde = $vyhlasenie_kde;
        $destination->vyhlasenie_kedy = $vyhlasenie_kedy;
        $destination->vyhlasenie_prianie = $vyhlasenie_prianie;
        $destination->vyhlasenie_kto = $vyhlasenie_kto;
        $destination->vyhlasenie = $vyhlasenie;
        $destination->pred_odjazdom = $pred_odjazdom;
        $destination->po_navrate = $po_navrate;
        $destination->save();

        return response() -> view('frontView.admin.adddestination');
    }

    public function showDestinationAction($id)
    {
        $destination = Destinations::find($id);
        return view("frontView.admin.updatedestination", ['destination'=>$destination]);
    }

    public function updateAction($id, Request $request)
    {
        $destination = Destinations::where("id", "=", $id)->first();
        $destination->update(["stat" => $request->input('stat'),
            "typ"=> $request->input('typ'),
            "popis"=> $request->input('popis'),
            "datum"=> $request->input('datum'),
            "email"=> $request->input('email'),
            "vyhlasenie_kde"=> $request->input('vyhlasenie_kde'),
            "vyhlasenie_kedy"=> $request->input('vyhlasenie_kedy'),
            "vyhlasenie_prianie"=> $request->input('vyhlasenie_prianie'),
            "vyhlasenie_kto"=> $request->input('vyhlasenie_kto'),
            "vyhlasenie"=> $request->input('vyhlasenie'),
            "pred_odjazdom"=> $request->input('pred_odjazdom'),
            "po_navrate"=> $request->input('po_navrate'),
        ]);

        return redirect()->action('DestinationsController@showAllAction');
    }

    public function deleteAction($id){
        $destination = Destinations::find($id);
        $destination ->delete();

        return redirect()->action('FrontController@destinations');
    }
}