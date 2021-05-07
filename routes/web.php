<?php
use App\StudySet;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/studysets/create', function () {
    return view('study_sets.create');
});



Route::post('/studysets/store', function (Request $request) {
    
    $title = $request->title;
    $description = $request->description;
    
    
    if ($title && $description){

       
        $studyset =new Studyset();
        $studyset->title = $title;
        $studyset->description = $description;
        $studyset->save();

        return redirect('/home');
    }else {

        return redirect('/studysets/create');
    }
    
})->name('studysets.store');



Auth::routes();



Route::get('/studysets/all', function () {

    $studySets = StudySet::all();

    return view('study_sets.all',['studySets' => $studySets]);
});



Route::get('/home', function () {

    $studySets = StudySet::all();

    return view('Home',['studySets' => $studySets]);
    
});
