<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use App\Models\Car;
use App\Models\Gallery;

class CarController extends Controller
{
    //show all cars
    public function index() {
        // $c =  Car::with('galleries')->latest()->filter(request(['search']))->paginate(6);
        // return count($c[0] -> galleries) ? "yes": "no";
        // return [] ? "yes" : "no";
        return view('cars.index', [
            'cars' => Car::with('galleries')->latest()->filter(request(['search']))->paginate(6)
        ]);
        // return view('cars.index', [
        //     'cars' => Car::with('galleries')->paginate(3)
        // ]);
    
    }
    //show single car
    public function show($car) {
        // return [] ? "yes" : "no";
        return view('cars.show',[
            'car' => Car::with('galleries')->find($car)
            
        ]);


    }

    //show Create
    public function create() {
        return view('cars.create');
    }

    // store car data
    public function store(Request $request) {
        $formFields = $request->validate([
            'title' => 'required',
            'model' => 'required',
            'category' => 'required',
            'engine' => 'required',
            'wheel' => 'required',
            'fuel_type' => 'required',
            'location' => 'required',
            'year' => 'required', 
        ]);


        $formFields['user_id'] = auth()->id();
        $formFields['image'] = 'default.jpg';
        
        $newCar = Car::create($formFields);

        if($request->hasFile('image')) {
            // $formFields['image'] = $request->file('image')->store('images', 'public');
            foreach ($request->file('image') as $image) {
                $uploadedImage = $image -> store('images', 'public');
                Gallery::create([
                    'car_id' => $newCar -> id,
                    'image' => $uploadedImage
                ]);
            }
        }

        return redirect('/')->with('message', 'car create successfully!');

    }

    //show Edit Form
    public function edit(Car $car) {
        return view('cars.edit', ['car' => $car]); 
    }

    // Update car data
    public function update(Request $request, Car $car ) {

        // Make sura logged in user is 
        if (Auth()->user()-> role != 'admin') {
                if($car->user_id != auth()->id()) {
                abort(403, 'Unauthorized Action');
            }
        }
        

        $formFields = $request->validate([
            'title' => 'required',
            'model' => 'required',
            'category' => 'required',
            'engine' => 'required',
            'wheel' => 'required',
            'fuel_type' => 'required',
            'location' => 'required',
            'year' => 'required', 
        ]);

        // if($request->hasFile('image')) {
        //     $formFields['image'] = $request->file('image')->store('images', 'public');
        // }

        // $formFields['user_id'] = auth()->id();
        $formFields['user_id'] = auth()->id();
        $formFields['image'] = 'default.jpg';
        
        // $newCar = Car::create($formFields);
        $car->update($formFields);
        if($request->hasFile('image')) {
            // $formFields['image'] = $request->file('image')->store('images', 'public');
            foreach ($request->file('image') as $image) {
                $uploadedImage = $image -> store('images', 'public');
                Gallery::create([
                    'car_id' => $car -> id,
                    'image' => $uploadedImage
                ]);
            }
        }

        

        return back()->with('message', 'car create successfully!');
    }    

    //Delete car
    public function destroy(Car $car) {
        if (Auth()->user()-> role != 'admin') {
            if($car->user_id != auth()->id()) {
                abort(403, 'Unauthorized Action');
            }
        }
        
        $car->delete();
        return redirect('/')->with('message', 'car deleted successfully!');
    }

    // Manage cars
    public function manage() {

        if ( auth()->user()-> role == 'admin' ) {
            $cars = Car::all();
        } else {
            $cars = auth()->user()->cars()->get();
        }

        return view('cars.manage', ['cars' => $cars]);
    }

}
