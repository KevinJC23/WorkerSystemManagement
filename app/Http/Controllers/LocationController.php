<?php
    namespace App\Http\Controllers;

    use Illuminate\Http\Request;
    use App\Models\Location;

    class LocationController extends Controller {
        public function index() {
            $locations = Location::all(["id", "location_name", "province", "postal_code"]);
            return view("location/index", ["locations" => $locations]);
        }

        public function add() {
            return view("location/form");
        }

        public function update(string $id) {
            $locations = Location::find($id);
            return view("location/form", [
                "location" => $locations
            ]);
        }

        public function save(Request $request) {
            if (isset($request->id)) { 
                $location = Location::find($request->id);
            } 
            else {
                $location = new Location(); 
            }

            $location->location_name = $request->location_name;
            $location->province = $request->province;
            $location->postal_code = $request->postal_code;
            $location->save();

            return redirect("/location");
        }

        public function delete(Request $request) {
            if ($request->method() == "POST") {
                Location::find($request->id)->delete();
                return redirect("/location");
            } 
            else {
                $location = Location::find($request->id);
                return view("location/delete", ["location" => $location]);
            }
        }
    }