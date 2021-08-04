<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task; //addon
use Session; //addon

class TasksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tasks = Task::all();
        return view('tasks.index')->with('tasks',$tasks);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //============================================
        //Generate New Solution
        //============================================
        $solution = "";
        $iterations = 0;
        $result = true;
        while($result){
            $iterations += 1;
            $dataset = array(0,1,2,3,4,5,6,7,8,9);
            shuffle($dataset); //random number from dataset.
            if(($dataset[0]!=0)&&($dataset[4]!=0)&&($dataset[2]!=0)&&($dataset[9]!=0)){ //HGEN are not zero
                $H=$dataset[0];//*
                $I=$dataset[1];
                $E=$dataset[2];//*
                $R=$dataset[3];
                $G=$dataset[4];//*
                $B=$dataset[5];
                $T=$dataset[6];
                $U=$dataset[7];
                $S=$dataset[8];
                $N=$dataset[9];//*

                $eq1 = (($H*1000)+($I*100)+($E*10)+($R)) + (($G*1000)+($I*100)+($B*10)+($T)) + (($E*10)+($S));
                $eq2 = (($N*10000)+($E*1000)+($U*100)+($E*10)+($S));

                if($eq1 == $eq2){
                    $solution = "$H$I$E$R + $G$I$B$T + $E$S = $N$E$U$E$S";
                    $result=false;
                }
            }
        }
        return view('tasks.create')->with('solution',$solution)->with('iteration',$iterations);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'solution' => 'required',
            'iteration' => 'required'
        ]);

        $input = $request->all();

        Task::create($input);

        Session::flash('flash_message', 'Task successfully added!');

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $task = Task::find($id);
        return view('tasks.show')->with('task',$task);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        //============================================
        //Re Generate New Solution
        //============================================
        $solution = "";
        $iterations = 0;
        $result = true;
        while($result){
            $iterations += 1;
            $dataset = array(0,1,2,3,4,5,6,7,8,9);
            shuffle($dataset); //random number from dataset.
            if(($dataset[0]!=0)&&($dataset[4]!=0)&&($dataset[2]!=0)&&($dataset[9]!=0)){ //HGEN are not zero
                $H=$dataset[0];//*
                $I=$dataset[1];
                $E=$dataset[2];//*
                $R=$dataset[3];
                $G=$dataset[4];//*
                $B=$dataset[5];
                $T=$dataset[6];
                $U=$dataset[7];
                $S=$dataset[8];
                $N=$dataset[9];//*

                $eq1 = (($H*1000)+($I*100)+($E*10)+($R)) + (($G*1000)+($I*100)+($B*10)+($T)) + (($E*10)+($S));
                $eq2 = (($N*10000)+($E*1000)+($U*100)+($E*10)+($S));

                if($eq1 == $eq2){
                    $solution = "$H$I$E$R + $G$I$B$T + $E$S = $N$E$U$E$S";
                    $result=false;
                }
            }
        }
//      return view('tasks.create')->with('solution',$solution)->with('iteration',$iterations);

        $task = Task::find($id);
        return view('tasks.edit')->with('task',$task)->with('solution',$solution)->with('iteration',$iterations);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $task = Task::find($id);

        $this->validate($request, [
            'solution' => 'required',
            'iteration' => 'required'
        ]);

        $input = $request->all();

        $task->fill($input)->save();

        Session::flash('flash_message', 'Task successfully updated!');

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $task = Task::find($id);

        $task->delete();

        Session::flash('flash_message', 'Task successfully deleted!');

        return redirect()->route('tasks.index');
    }
}
