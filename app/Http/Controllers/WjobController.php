<?php
    namespace App\Http\Controllers;

    use Illuminate\Http\Request;
    use App\Models\Wjob;
    use App\Models\Division;

    class WjobController extends Controller {
        public function index() {
            $wjobs = Wjob::all(["id", "wjob_code", "wjob_name", "wjob_status", "start_date", "division_id"]);
            return view("wjob/index", ["wjobs" => $wjobs]);
        }

        public function add() {
            $divisions = Division::all(["id", "division_name"]);
            return view("wjob/form", [
                "divisions" => $divisions,
            ]);
        }

        public function update(string $id) {
            $wjob = Wjob::find($id);
            $divisions = Division::all(["id", "division_name"]);
            return view("wjob/form", [
                "wjob" => $wjob,
                "divisions" => $divisions,
            ]);
        }

        public function save(Request $request) {
            if (isset($request->id)) { 
                $wjob = Wjob::find($request->id);
            } 
            else {
                $wjob = new Wjob(); 
            }

            $wjob->wjob_code = $request->wjob_code;
            $wjob->wjob_name = $request->wjob_name;
            $wjob->wjob_status = $request->wjob_status;
            $wjob->start_date = $request->start_date;
            $wjob->division_id = $request->division;
            $wjob->save();
            
            return redirect("/wjob");
        }

        public function delete(Request $request) {
            if ($request->method() == "POST") {
                Wjob::find($request->id)->delete();
                return redirect("/wjob");
            } 
            else {
                $Wjob = Wjob::find($request->id);
                return view("wjob/delete", ["wjob" => $Wjob]);
            }
        }
    }