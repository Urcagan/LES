<?php

namespace App\Http\Controllers\OldControllers;

use App\Http\Controllers\Controller;
use App\Models\Complex;
use App\Models\Plant;


class PlantController extends Controller{

    public function index()
    {
        $plants = Plant::all();
        return view('plant.index', compact('plants'));
    }

    public function create()
    {
        $complexes = Complex::all();
        return view( 'plant.create', compact('complexes'));
    }

    public function store()
    {
        $data = request()->validate([
            'NamePlant' => 'string',
            'Description' => 'nullable | string',
            'complex_id' => 'required | numeric',
        ]);
        Plant::create($data);
        return redirect()->route('plants.index');
    }

    public function show(Plant $plant)
    {
        $complex = $plant->complex;
        return view('plant.show', compact('plant', 'complex'));

    }

    public function edit (Plant $plant)
    {
        $complexes = Complex::all();

        return view('plant.edit', compact('plant','complexes'));
    }

    public function update(Plant $plant)
    {
        $data = request()->validate([
            'NamePlant' => 'string',
            'Description' => 'string',
            'complex_id' => 'integer',
        ]);
        @$plant->update($data);
        return redirect()->route('plants.show', $plant->id);
    }

    public function destroy(Plant $plant)
    {
        $plant->delete();
        return redirect()->route('plants.index');
    }


    public function create_man()
    {
    dump('Заполнение таблици Complexes');
    $plantsArr = [
        [
            'NameComplex' => 'КТУ ГПВГ',
            'Description'=> 'Комплекс технологических установок глубокой переработки вакуумного газоиля',
        ],
        [
            'NameComplex' => 'КТУ ППН',
            'Description'=> 'Комплекс технологических установок первичной переработки нефти',
        ],
        [
            'NameComplex' => 'КТУ ПГиБ',
            'Description'=> 'Комплекс технологических установок переработки газов и бензинов',
        ],
        [
            'NameComplex' => 'КТУ КРиИБФ',
            'Description'=> 'Комплекс технологических установок каталитического риформинга и изомеризации бензиновых фракций',
        ]
    ];

        foreach ($plantsArr as $item){
            dump($item);
            Plant::create($item);
        }
        return redirect()->route('plants.index');
    }

}
