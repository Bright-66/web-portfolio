<?php

// laravel:use 相當於php的include
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('welcome', function () {
    return view('welcome');
});

Route::get('/', function () {
    // return view('welcome');
    return redirect()->route('students.index');
});

// Route::get('hello', function () {
//     return view('hello');
// });

// Route::get('/', function () {
//     $data = [
//         's1' => 'amy',
//     ];
//     $data = env('MY_PWD');
//     dd($data);
//     // return view('welcome');
// });

// 多(Route) 對 1(網址)轉址: 用不同的Route網址名 "test" 轉址到 "代名詞"(複數) 的位址
//  "代名詞"通都用複數

// Route::get('/', function () {
//     return redirect()->route('foods');
// });

// Route::get('/test', function () {
//     return redirect()->route('foods');
// });

// Route::get('/leo', function () {
//     return redirect()->route('foods.f1');
// });

// // Route 位址 以 "一個代名詞foods"替代
// // 動作階段都用單數:view & food(資料夾)
// // 標的/位址則用都用複數:foods(name)

// Route::get('/foods', function () {
//     return view('food.index');
// })->name('foods');

// // Route 位址 以 "一個代名詞foods.f1"替代
// Route::get('/foods/f1', function () {
//     return view('food.f1');
// })->name('foods.f1');

// Route::get('/', function () {
//     return redirect()->route('cars');
// });
// Route::get('/leo1', function () {
//     return redirect()->route('cars');
// });

// Route::get('/cars', function () {
//     return view('car.index');
// })->name('cars');

// Route::get('/cars/create', function () {
//     return view('car.create');
// })->name('cars.create');

// Route::get('/cars/del', function () {
//     return view('car.del');
// })->name('cars.del');

// Route::get('/cars/update', function () {
//     return view('car.update');
// })->name('cars.update');

// link to controller

// controller resource
Route::resource('students', StudentController::class);

// single controller
Route::get('/students_excel', [StudentController::class, 'excel']);
Route::get('/students_hello', [StudentController::class, 'sayHello']);
