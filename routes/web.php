<?php

use Illuminate\Support\Facades\Route;

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
    return redirect('/login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'viewHome'])->name('viewHome');
Route::get('/home/store', [\App\Http\Controllers\HomeController::class, 'viewStore'])->name('viewStore');
Route::get('/home/detail/{id}', [App\Http\Controllers\HomeController::class, 'viewDetail'])->name('viewDetail');

Route::post('/home/store', [App\Http\Controllers\ClientController::class, 'store'])->name('store');
Route::patch('/home/detail/update/{id}', [App\Http\Controllers\ClientController::class, 'update'])->name('update');
Route::delete('/home/store/delete/{id}', [App\Http\Controllers\ClientController::class, 'delete'])->name('delete');



Route::get('/faker', function () {
	$faker = Faker\Factory::create('ja_JP');
	$dummyData = [
		'random_no'                     => $faker->randomNumber(4) ,  // 最大4桁の数字
		'name'                     => $faker->name,
		'password'                 => $faker->password,
		'country'                  => $faker->country,
		'prefecture'               => $faker->prefecture,
		'city'                     => $faker->city,
		'postcode'                 => $faker->postcode,
		'address'                  => $faker->address,
		'streetAddress'            => $faker->streetAddress,
		'phoneNumber'              => $faker->phoneNumber,
		'email'                    => $faker->email,
		'safeEmail'                => $faker->safeEmail, // (実在しないアドレスのため処理とかで使っても安心)
		'company'                  => $faker->company,
		'iso8601'                  => $faker->iso8601($max = 'now'),
		'dateTimeBetween'          => $faker->dateTimeBetween($startDate = '-110 years', $endDate = 'now')->format('Y年m月d日'),
		'numberBetween'            => $faker->numberBetween($min = 100, $max = 200),
		'title'                    => $faker->title,
		'realText'                 => $faker->realText($maxNbChars = 50, $indexSize = 2),
		'randomNumber'             => $faker->randomNumber($nbDigits = NULL),
		'randomFloat'              => $faker->randomFloat($nbMaxDecimals = NULL, $min = 0, $max = NULL),
		'randomElement'            => $faker->randomElement($array = ['男性', '女性']),
		'lexify'                   => $faker->lexify($string = '??????'),
		'hexcolor'                 => $faker->hexcolor,
		'ipv4'                     => $faker->ipv4,
		'url'                      => $faker->url,
		'imageUrl'                 => $faker->imageUrl($width = 640, $height = 480, $category = 'cats', $randomize = true, $word = null),
		'userAgent'                => $faker->userAgent,
		'creditCardType'           => $faker->creditCardType,
		'creditCardNumber'         => $faker->creditCardNumber,
		'creditCardExpirationDate' => $faker->creditCardExpirationDate,
		'isbn13'                   => $faker->isbn13,
		'isbn10'                   => $faker->isbn10,
	];
	dump($dummyData);
	exit();
});