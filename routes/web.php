                            <?php

                            use Illuminate\Support\Facades\Route;
                            $url = "App\Http\Controllers";

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
                                return view('home');
                            });

                            Route::get('table/edit/{product_slug}', $url. '\productController@edit');
                            Route::get('table', $url . "\productController@showTable");
                            Route::get('tambah', $url . "\productController@addTable");
                            Route::get('products/{slug}', $url . "\productController@showProduct");
                            // Route::resource('products', $url . '\ProductController');
                            Route::patch('product/update',$url. '\productController@update');
                            Route::delete('table/delete/{product:product_slug}', $url. '\productController@destroy');
