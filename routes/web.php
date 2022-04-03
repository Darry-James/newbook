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

Route::prefix('admin')->group(function () {
    Route::get('/', [App\Http\Controllers\AdminController::class, 'index'])->name('admin');
    Route::get('/ecovers', [App\Http\Controllers\AdminController::class, 'adminEcovers'])->name('adminEcovers');
    Route::get('/ecoverList', [App\Http\Controllers\AdminController::class, 'adminEcoversList'])->name('adminEcoversList');
    Route::get('/editEcoverList/{ecover_id}', [App\Http\Controllers\AdminController::class, 'adminEditEcoverList'])->name('adminEditEcoverList');
    Route::post('/editEcoverList/{ecover_id}', [App\Http\Controllers\AdminController::class, 'adminEditEcoverListPost'])->name('adminEditEcoverListPost');
    Route::get('/ecovers/add/{title}/{type?}', [App\Http\Controllers\AdminController::class, 'addAdminEcovers'])->name('addAdminEcovers');

    Route::get('/ebooks', [App\Http\Controllers\AdminController::class, 'adminEbooks'])->name('adminEbooks');
    Route::get('/editEbook/{ebook_id}', [App\Http\Controllers\AdminController::class, 'adminEditEbook'])->name('adminEditEbook');
    Route::post('/editEbook/{ebook_id}', [App\Http\Controllers\AdminController::class, 'adminEditEbookPost'])->name('adminEditEbookPost');

    Route::get('/add-ebooks', [App\Http\Controllers\AdminController::class, 'addAdminEbooks'])->name('addAdminEbooks');
    Route::post('/add-ebooks', [App\Http\Controllers\AdminController::class, 'addAdminEbooksPost'])->name('addAdminEbooksPost');

    Route::get('/upload-ebooks', [App\Http\Controllers\AdminController::class, 'adminUploadEbooks'])->name('adminUploadEbooks');
    Route::get('/add-uploadEbook', [App\Http\Controllers\AdminController::class, 'addAdminUploadEbooks'])->name('addAdminUploadEbooks');
    Route::post('/add-uploadEbook', [App\Http\Controllers\AdminController::class, 'addAdminUploadEbooksPost'])->name('addAdminUploadEbooksPost');

    Route::get('/users', [App\Http\Controllers\AdminController::class, 'adminUsers'])->name('adminUsers');
    Route::get('/editUser/{user_id}', [App\Http\Controllers\AdminController::class, 'adminEditUser'])->name('adminEditUser');
    Route::post('/editUser/{user_id}', [App\Http\Controllers\AdminController::class, 'adminEditUserPost'])->name('adminEditUserPost');

    Route::get('/products', [App\Http\Controllers\AdminController::class, 'adminProducts'])->name('adminProducts');
    Route::get('/editProduct/{product_id}', [App\Http\Controllers\AdminController::class, 'adminEditProduct'])->name('adminEditProduct');
    Route::post('/editProduct/{product_id}', [App\Http\Controllers\AdminController::class, 'adminEditProductPost'])->name('adminEditProductPost');
    
    Route::get('/funnels', [App\Http\Controllers\AdminController::class, 'adminFunnels'])->name('adminFunnels');
    Route::get('/editFunnel/{funnel_id}', [App\Http\Controllers\AdminController::class, 'adminEditFunnel'])->name('adminEditFunnel');
    Route::post('/editFunnel/{funnel_id}', [App\Http\Controllers\AdminController::class, 'adminEditFunnelPost'])->name('adminEditFunnelPost');
});

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [App\Http\Controllers\FrontController::class, 'landing'])->name('landing');

//Login, register, logout
Route::get('/login', [App\Http\Controllers\FrontController::class, 'login'])->name('login');
Route::post('/login', [App\Http\Controllers\FrontController::class, 'loginPost'])->name('loginPost');
Route::get('/register', [App\Http\Controllers\FrontController::class, 'register'])->name('register');
Route::post('/register', [App\Http\Controllers\FrontController::class, 'registerPost'])->name('registerPost');
Route::get('/logout', [App\Http\Controllers\FrontController::class, 'logout'])->name('logout');

//page manager
Route::get('/pgManager/{chapter_type}/{chapter_id?}', [App\Http\Controllers\PageBuilderController::class, 'pgManager'])->name('pgManager');
Route::post('/save-pgManager', [App\Http\Controllers\PageBuilderController::class, 'pgManagerPost'])->name('pgManagerPost');

//ecover
Route::prefix('ecover')->group(function () {
    Route::get('/', [App\Http\Controllers\EcoverController::class, 'ecoverCreator'])->name('ecoverCreator');
    Route::post('/', [App\Http\Controllers\EcoverController::class, 'ecoverCreatorPost'])->name('ecoverCreatorPost');
    Route::post('/save', [App\Http\Controllers\EcoverController::class, 'ecoverCreatorSaveToLocal'])->name('ecoverCreatorSaveToLocal');
    Route::get('/downoad/{id}/{ext}', [App\Http\Controllers\EcoverController::class, 'downloadfile'])->name('downloadfile');
    Route::get('/delete/{id}', [App\Http\Controllers\EcoverController::class, 'deleteEcover'])->name('deleteEcover');
    Route::get('/editor', [App\Http\Controllers\EcoverController::class, 'editorPage'])->name('editorPage');
});

//ebook
Route::prefix('ebook')->group(function () {
    Route::get('/', [App\Http\Controllers\EbookController::class, 'ebookCreator'])->name('ebookCreator');

    //by article
    Route::post('/articles', [App\Http\Controllers\EbookController::class, 'articlesPost'])->name('articlesPost');
    Route::get('/articles', [App\Http\Controllers\EbookController::class, 'articlesFromApi'])->name('articlesFromApi');
    Route::post('/articleSelected', [App\Http\Controllers\EbookController::class, 'articlesFromApiPost'])->name('articlesFromApiPost');
    Route::get('/articleSetUp', [App\Http\Controllers\EbookController::class, 'articleSetUp'])->name('articleSetUp');
    Route::post('/articleSetUp', [App\Http\Controllers\EbookController::class, 'articleSetUpPost'])->name('articleSetUpPost');
    
    Route::get('/deleteArticleSelect/{id}', [App\Http\Controllers\EbookController::class, 'deleteArticleSelect'])->name('deleteArticleSelect');
    

    //by manual
    Route::post('/manual', [App\Http\Controllers\EbookController::class, 'manualEbook'])->name('manualEbook');
    Route::get('/manual', [App\Http\Controllers\EbookController::class, 'manualSetUp'])->name('manualSetUp');
    Route::post('/manualSetUp', [App\Http\Controllers\EbookController::class, 'manualSetUpPost'])->name('manualSetUpPost');
  
    
    // Route::post('/saveEbook', [PDFSetUpController::class, 'saveEbook'])->name('saveEbook');

    //by url
    Route::post('/url', [App\Http\Controllers\EbookController::class, 'fetchArticleFromUrl'])->name('fetchArticleFromUrl');
    Route::get('/urlGrab', [App\Http\Controllers\EbookController::class, 'urlGrab'])->name('urlGrab');
    Route::post('/urlGrab', [App\Http\Controllers\EbookController::class, 'urlGrabPost'])->name('urlGrabPost');
    Route::get('/urlSetup', [App\Http\Controllers\EbookController::class, 'urlSetUp'])->name('urlSetUp');
    Route::post('/urlSetup', [App\Http\Controllers\EbookController::class, 'urlSetUpPost'])->name('urlSetUpPost');
    
    //by Upload
    Route::post('/upload', [App\Http\Controllers\EbookController::class, 'grabUpload'])->name('grabUpload');
    Route::get('/uploadSetUp', [App\Http\Controllers\EbookController::class, 'uploadSetUp'])->name('uploadSetUp');
    Route::post('/uploadSetUp', [App\Http\Controllers\EbookController::class, 'uploadSetUpPost'])->name('uploadSetUpPost');

    //dfy
    Route::post('/dfySelected', [App\Http\Controllers\EbookController::class, 'dfySelected'])->name('dfySelected');

    //copyDfyChapters //unused yet
    Route::post('/copyDfyChapters', [App\Http\Controllers\EbookController::class, 'copyDfyChapters'])->name('copyDfyChapters');

    Route::post('/articleUploads', [EbookController::class, 'articleUploads'])->name('articleUploads');
    Route::get('/ebookUploadInterface', [EbookController::class, 'ebookUploadInterface'])->name('ebookUploadInterface');
    Route::post('/saveUploadedEbook', [EbookController::class, 'saveUploadedEbook'])->name('saveUploadedEbook');
});
////

//library
Route::prefix('library')->group(function () {
    Route::get('/{ebook_id?}/{action_type?}', [App\Http\Controllers\LibraryController::class, 'index'])->name('library');
});

//product
Route::prefix('product')->group(function () {
    Route::get('/', [App\Http\Controllers\ProductController::class, 'product'])->name('product');
    Route::get('/add', [App\Http\Controllers\ProductController::class, 'addProduct'])->name('addProduct');
    Route::post('/add', [App\Http\Controllers\ProductController::class, 'addProductPost'])->name('addProductPost');
    Route::get('/edit/{id}', [App\Http\Controllers\ProductController::class, 'editProduct'])->name('editProduct');
    Route::post('/edit/{id}', [App\Http\Controllers\ProductController::class, 'editProductPost'])->name('editProductPost');
    Route::get('/add-to-funnel/{product_id}', [App\Http\Controllers\ProductController::class, 'addProductToFunnel'])->name('addProductToFunnel');
    Route::post('/add-to-funnel/{product_id}', [App\Http\Controllers\ProductController::class, 'addProductToFunnelPost'])->name('addProductToFunnelPost');
});

//ajax
Route::get('/templates', [App\Http\Controllers\ProductController::class, 'loadTemplates'])->name('loadTemplates');
Route::get('/saleTemplates', [App\Http\Controllers\ProductController::class, 'saleTemplates'])->name('saleTemplates');
Route::get('/getContent/{id}', [App\Http\Controllers\ProductController::class, 'getContent'])->name('getContent');
Route::get('/getSaleContent/{id}', [App\Http\Controllers\ProductController::class, 'getSaleContent'])->name('getSaleContent');

//funnel
Route::prefix('funnel')->group(function () {
    Route::get('/', [App\Http\Controllers\FunnelController::class, 'funnel'])->name('funnel');
    Route::post('/', [App\Http\Controllers\FunnelController::class, 'addFunnelPost'])->name('addFunnelPost');
    Route::get('/edit/{id}', [App\Http\Controllers\FunnelController::class, 'editFunnel'])->name('editFunnel');
    Route::get('/dfy', [App\Http\Controllers\FunnelController::class, 'dfyFunnel'])->name('dfyFunnel'); 
    Route::get('/add-dfy/{dfyFunnel_id}', [App\Http\Controllers\FunnelController::class, 'addDfyFunnelToMyFunnel'])->name('addDfyFunnelToMyFunnel'); 
});

//others
Route::get('/version', [App\Http\Controllers\FrontController::class, 'unlimitedVersion'])->name('unlimitedVersion');
Route::get('/conversionTools', [App\Http\Controllers\FrontController::class, 'conversionTools'])->name('conversionTools');



