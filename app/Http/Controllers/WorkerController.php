<?php
    namespace App\Http\Controllers;

    use Illuminate\Http\Request;
    use App\Models\Worker;
    use App\Models\Wjob;

    class WorkerController extends Controller {
        public function index() {
            $workers = Worker::all(["id", "worker_code", "worker_name", "birthday", "phone_number", "salary", "wjob_id"]);
            return view("worker/index", ["workers" => $workers]);
        }

        public function add() {
            $wjobs = Wjob::all(["id", "wjob_name"]);
            return view("worker/form", [
                "wjobs" => $wjobs,
            ]);
        }

        public function update(string $id) {
            $worker = Worker::find($id);
            $wjobs = Wjob::all(["id", "wjob_name"]);
            return view("worker/form", [
                "worker" => $worker,
                "wjobs" => $wjobs,
            ]);
        }

        public function save(Request $request) {
            if (isset($request->id)) { 
                $worker = Worker::find($request->id);
            } 
            else {
                $worker = new Worker(); 
            }

            $worker->worker_code = $request->worker_code;
            $worker->worker_name = $request->worker_name;
            $worker->birthday = $request->birthday;
            $worker->phone_number = $request->phone_number;
            $worker->salary = $request->salary;
            $worker->wjob_id = $request->wjob;
            $worker->save();

            return redirect("/worker");
        }

        public function delete(Request $request) {
            if ($request->method() == "POST") {
                Worker::find($request->id)->delete();
                return redirect("/worker");
            } 
            else {
                $worker = Worker::find($request->id);
                return view("worker/delete", ["worker" => $worker]);
            }
        }
    }