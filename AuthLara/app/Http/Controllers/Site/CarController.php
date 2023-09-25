<?php

namespace App\Http\Controllers\Site;

use App\Models\Cars;
use App\Models\CarModels;
use App\Models\CarCompanies;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;

class CarController extends Controller
{
    use Traits\SimilarTrait;
    public function index()
    {
        $cars = Cars::paginate(6);
        return view('vendor.cars.index', compact('cars'));
    }

    public function search(Request $request)
    {
        $cars = Cars::paginate(6);
        $cars_show = Cars::where(
            [
                ['company', $request->company == 'الكل' ? '!=' : '=', $request->company == 'الكل' ? null : $request->company],
                ['model', $request->model == 'الكل' ? '!=' : '=', $request->model == 'الكل' ? null : $request->model],
                ['city', $request->city == 'الكل' ? '!=' : '=', $request->city == 'الكل' ? null : $request->city],
                ['fuel_type', $request->fuel_type == 'الكل' ? '!=' : '=', $request->fuel_type == 'الكل' ? null : $request->fuel_type],
                ['lime_type', $request->lime_type == 'الكل' ? '!=' : '=', $request->lime_type == 'الكل' ? null : $request->lime_type],
                ['driving_license', $request->driving_license == 'الكل' ? '!=' : '=', $request->driving_license == 'الكل' ? null : $request->driving_license],
            ]
        )->whereBetween('price', [(int) $request->price_min, (int) $request->price_max])->paginate(6);
        if (count($cars_show) < 1) {
            $cars_show =  Cars::paginate(6);
        } 
        return view('vendor.cars.search', compact('cars_show', 'cars'));
    }
    public function getCarModels($carCompany)
    {
        try {
            // Query the database to retrieve car models for the selected car company
            $carModels = CarModels::where('car_company_name', $carCompany)->pluck('model_name', 'id');

            // Return the car models as JSON
            return response()->json($carModels);
        } catch (\Exception $e) {
            // Log the exception for debugging
            Log::error($e->getMessage());

            // Return an error response with a 500 status code
            return response()->json(['error' => 'An error occurred'], 500);
        }
    }
    public function product(Request $request)
    {


        $cars = Cars::all();
        //$semes = \similar_text()
        $car = Cars::find($request->car);
        $similar = $this->similar($cars, $car, ['model_year' => 30, 'price' => 70]);
        return view('vendor.cars.details', compact('cars', 'car', 'similar'));
    }

    public function add()
    {
        $cars = Cars::all();
        $carCompanies = CarCompanies::all();
        return view('vendor.cars.add', compact('cars', 'carCompanies'));
    }

    public function choseAdd()
    {
        return view('vendor.choseAdd');
    }
}
