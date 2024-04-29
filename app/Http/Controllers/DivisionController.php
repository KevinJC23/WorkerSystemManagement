<?php
    namespace App\Http\Controllers;

    use Illuminate\Http\Request;
    use App\Models\Division;
    use App\Models\Location;

    class DivisionController extends Controller
    {
        public function index() {
            $divisions = Division::all(["id", "division_code", "division_name", "head_division", "contact_info"]);
            return view("division/index", ["divisions" => $divisions]);
        }

        public function add() {
            $locations = Location::all(["id", "location_name"]);
            return view("division/form", [
                "locations" => $locations,
            ]);
        }

        public function update(string $id) {
            $division = Division::find($id);
            $locations = Location::all(["id", "location_name"]);
            $division_locations = $division->locations()->pluck('location_id')->all();
            return view("division/form", [
                "division" => $division,
                "locations" => $locations,
                "division_locations" => $division_locations,
            ]);
        }

        public function save(Request $request) {
            if (isset($request->id)) { 
                $division = Division::find($request->id);
            } 
            else {
                $division = new Division(); 
            }

            $division->division_code = $request->division_code;
            $division->division_name = $request->division_name;
            $division->head_division = $request->head_division;
            $division->contact_info = $request->contact_info;
            $division->save();
            $division->locations()->detach();
            $division->locations()->attach($request->location);

            return redirect("/division");
        }

        public function delete(Request $request) {
            if ($request->method() == "POST") {
                Division::find($request->id)->delete();
                return redirect("/division");
            } 
            else {
                $division = Division::find($request->id);
                return view("division/delete", ["division" => $division]);
            }
        }
    }