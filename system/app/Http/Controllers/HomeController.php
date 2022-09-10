<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\Provinsi;

class HomeController extends Controller{

    function showBeranda(){
        return view('template.base');
    }

    function showPC(){
        return view('template.section.pc');
    }

    function showLaptop(){
        return view('template.section.laptop');
    }

    function showSmartphone(){
        return view('template.section.smartphone');
    }

    function showAccessories(){
        return view('template.section.accessories');
    }

    // function showList(){
    //     return view('list.index');
    // }

    public function showList()
    {
        $list_bike = ['Honda', 'Yamaha', 'Kawasaki', 'suzuki', 'vespa', 'BMW', 'KTM'];
        $list_bike = collect($list_bike);
        $list_products = Produk::all();

        // Sorting
        // Sort By Harga Terendah
        // dd($list_produk->sortBy('harga'));
        // Sort By Harga Tertinggi
        // dd($list_produk->sortByDesc('harga'));

        // Map
        // foreach ($list_produk as $item) {
        //     echo "$item->nama<br>";
        // }
        // $list_produk->each(function ($item) {
        //     echo "$item->nama<br>";
        // });

        // filter
        // $filtered = $list_produk->filter(function ($item) {
        //     return $item->harga > 200000;
        // });

        // dd($filtered);

        // $sum = $list_produk->avg('harga');
        // dd($sum);

        $data['list'] = Produk::Paginate(10);
        return view('list.index', $data);
    }

    function testAjax()
    {
        $data['list_provinsi'] = Provinsi::all();
        return view('test-ajax', $data);
    }
}