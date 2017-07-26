<?php
Route::get('/', function () {
    return view('auth.login');
});
Auth::routes();


Route::group(['middleware' => 'auth'], function () {

Route::group(['middleware' => ['role:admin']], function() {

        Route::get('admin/domaines', ['as' => 'admin.domaines.index', 'uses' => 'Admin\domaineController@index']);
        Route::post('admin/domaines', ['as' => 'admin.domaines.store', 'uses' => 'Admin\domaineController@store']);
        Route::get('admin/domaines/create', ['as' => 'admin.domaines.create', 'uses' => 'Admin\domaineController@create']);
        Route::put('admin/domaines/{domaines}', ['as' => 'admin.domaines.update', 'uses' => 'Admin\domaineController@update']);
        Route::patch('admin/domaines/{domaines}', ['as' => 'admin.domaines.update', 'uses' => 'Admin\domaineController@update']);
        Route::delete('admin/domaines/{domaines}', ['as' => 'admin.domaines.destroy', 'uses' => 'Admin\domaineController@destroy']);
        Route::get('admin/domaines/{domaines}', ['as' => 'admin.domaines.show', 'uses' => 'Admin\domaineController@show']);
        Route::get('admin/domaines/{domaines}/edit', ['as' => 'admin.domaines.edit', 'uses' => 'Admin\domaineController@edit']);

        Route::get('admin/users', ['as' => 'admin.users.index', 'uses' => 'Admin\usersController@index']);
        Route::post('admin/users', ['as' => 'admin.users.store', 'uses' => 'Admin\usersController@store']);
        Route::get('admin/users/create', ['as' => 'admin.users.create', 'uses' => 'Admin\usersController@create']);
        Route::put('admin/users/{users}', ['as' => 'admin.users.update', 'uses' => 'Admin\usersController@update']);
        Route::patch('admin/users/{users}', ['as' => 'admin.users.update', 'uses' => 'Admin\usersController@update']);
        Route::delete('admin/users/{users}', ['as' => 'admin.users.destroy', 'uses' => 'Admin\usersController@destroy']);
        Route::get('admin/users/{users}', ['as' => 'admin.users.show', 'uses' => 'Admin\usersController@show']);
        Route::get('admin/users/{users}/edit', ['as' => 'admin.users.edit', 'uses' => 'Admin\usersController@edit']);
});



/*route de client*/
Route::group(['middleware' => ['role:clt']], function () {
Route::get('admin/competences', ['as'=> 'admin.competences.index', 'uses' => 'Admin\competencesController@index']);
Route::post('admin/competences', ['as'=> 'admin.competences.store', 'uses' => 'Admin\competencesController@store']);
Route::get('admin/competences/create', ['as'=> 'admin.competences.create', 'uses' => 'Admin\competencesController@create']);
Route::put('admin/competences/{competences}', ['as'=> 'admin.competences.update', 'uses' => 'Admin\competencesController@update']);
Route::patch('admin/competences/{competences}', ['as'=> 'admin.competences.update', 'uses' => 'Admin\competencesController@update']);
Route::delete('admin/competences/{competences}', ['as'=> 'admin.competences.destroy', 'uses' => 'Admin\competencesController@destroy']);
Route::get('admin/competences/{competences}', ['as'=> 'admin.competences.show', 'uses' => 'Admin\competencesController@show']);
Route::get('admin/competences/{competences}/edit', ['as'=> 'admin.competences.edit', 'uses' => 'Admin\competencesController@edit']);

Route::get('admin/centreinterets', ['as'=> 'admin.centreinterets.index', 'uses' => 'Admin\centreinteretsController@index']);
Route::post('admin/centreinterets', ['as'=> 'admin.centreinterets.store', 'uses' => 'Admin\centreinteretsController@store']);
Route::get('admin/centreinterets/create', ['as'=> 'admin.centreinterets.create', 'uses' => 'Admin\centreinteretsController@create']);
Route::put('admin/centreinterets/{centreinterets}', ['as'=> 'admin.centreinterets.update', 'uses' => 'Admin\centreinteretsController@update']);
Route::patch('admin/centreinterets/{centreinterets}', ['as'=> 'admin.centreinterets.update', 'uses' => 'Admin\centreinteretsController@update']);
Route::delete('admin/centreinterets/{centreinterets}', ['as'=> 'admin.centreinterets.destroy', 'uses' => 'Admin\centreinteretsController@destroy']);
Route::get('admin/centreinterets/{centreinterets}', ['as'=> 'admin.centreinterets.show', 'uses' => 'Admin\centreinteretsController@show']);
Route::get('admin/centreinterets/{centreinterets}/edit', ['as'=> 'admin.centreinterets.edit', 'uses' => 'Admin\centreinteretsController@edit']);

Route::get('admin/experiences', ['as'=> 'admin.experiences.index', 'uses' => 'Admin\experienceController@index']);
Route::post('admin/experiences', ['as'=> 'admin.experiences.store', 'uses' => 'Admin\experienceController@store']);
Route::get('admin/experiences/create', ['as'=> 'admin.experiences.create', 'uses' => 'Admin\experienceController@create']);
Route::put('admin/experiences/{experiences}', ['as'=> 'admin.experiences.update', 'uses' => 'Admin\experienceController@update']);
Route::patch('admin/experiences/{experiences}', ['as'=> 'admin.experiences.update', 'uses' => 'Admin\experienceController@update']);
Route::delete('admin/experiences/{experiences}', ['as'=> 'admin.experiences.destroy', 'uses' => 'Admin\experienceController@destroy']);
Route::get('admin/experiences/{experiences}', ['as'=> 'admin.experiences.show', 'uses' => 'Admin\experienceController@show']);
Route::get('admin/experiences/{experiences}/edit', ['as'=> 'admin.experiences.edit', 'uses' => 'Admin\experienceController@edit']);

Route::get('admin/formations', ['as'=> 'admin.formations.index', 'uses' => 'Admin\formationController@index']);
Route::post('admin/formations', ['as'=> 'admin.formations.store', 'uses' => 'Admin\formationController@store']);
Route::get('admin/formations/create', ['as'=> 'admin.formations.create', 'uses' => 'Admin\formationController@create']);
Route::put('admin/formations/{formations}', ['as'=> 'admin.formations.update', 'uses' => 'Admin\formationController@update']);
Route::patch('admin/formations/{formations}', ['as'=> 'admin.formations.update', 'uses' => 'Admin\formationController@update']);
Route::delete('admin/formations/{formations}', ['as'=> 'admin.formations.destroy', 'uses' => 'Admin\formationController@destroy']);
Route::get('admin/formations/{formations}', ['as'=> 'admin.formations.show', 'uses' => 'Admin\formationController@show']);
Route::get('admin/formations/{formations}/edit', ['as'=> 'admin.formations.edit', 'uses' => 'Admin\formationController@edit']);
});








/*route de entreprise*/
Route::group(['middleware' => ['role:company']], function () {

Route::get('admin/entretiens', ['as'=> 'admin.entretiens.index', 'uses' => 'Admin\entretienController@index']);
Route::post('admin/entretiens', ['as'=> 'admin.entretiens.store', 'uses' => 'Admin\entretienController@store']);
Route::get('admin/entretiens/create', ['as'=> 'admin.entretiens.create', 'uses' => 'Admin\entretienController@create']);
Route::put('admin/entretiens/{entretiens}', ['as'=> 'admin.entretiens.update', 'uses' => 'Admin\entretienController@update']);
Route::patch('admin/entretiens/{entretiens}', ['as'=> 'admin.entretiens.update', 'uses' => 'Admin\entretienController@update']);
Route::delete('admin/entretiens/{entretiens}', ['as'=> 'admin.entretiens.destroy', 'uses' => 'Admin\entretienController@destroy']);
Route::get('admin/entretiens/{entretiens}', ['as'=> 'admin.entretiens.show', 'uses' => 'Admin\entretienController@show']);
Route::get('admin/entretiens/{entretiens}/edit', ['as'=> 'admin.entretiens.edit', 'uses' => 'Admin\entretienController@edit']);

Route::get('admin/offretravails', ['as'=> 'admin.offretravails.index', 'uses' => 'Admin\offretravailController@index']);
Route::post('admin/offretravails', ['as'=> 'admin.offretravails.store', 'uses' => 'Admin\offretravailController@store']);
Route::get('admin/offretravails/create', ['as'=> 'admin.offretravails.create', 'uses' => 'Admin\offretravailController@create']);
Route::put('admin/offretravails/{offretravails}', ['as'=> 'admin.offretravails.update', 'uses' => 'Admin\offretravailController@update']);
Route::patch('admin/offretravails/{offretravails}', ['as'=> 'admin.offretravails.update', 'uses' => 'Admin\offretravailController@update']);
Route::delete('admin/offretravails/{offretravails}', ['as'=> 'admin.offretravails.destroy', 'uses' => 'Admin\offretravailController@destroy']);
Route::get('admin/offretravails/{offretravails}', ['as'=> 'admin.offretravails.show', 'uses' => 'Admin\offretravailController@show']);
Route::get('admin/offretravails/{offretravails}/edit', ['as'=> 'admin.offretravails.edit', 'uses' => 'Admin\offretravailController@edit']);

});





Route::get('admin/offretravails/{offretravails}', ['as'=> 'admin.offretravails.show', 'uses' => 'Admin\offretravailController@show']);
Route::get('admin/Profile', 'ProfileController@editprofile'); ;
Route::post('admin/Profile', 'ProfileController@saveeditprofile');
Route::get('/home', 'HomeController@index');
Route::get('admin/cv', ['as'=> 'admin.cv', 'uses' => 'Admin\CVController@index']);
Route::get('admin/cv/{cv}', ['as'=> 'admin.cv.show', 'uses' => 'Admin\CVController@show']);
Route::get('admin/allcv', ['as'=> 'admin.allcv', 'uses' => 'Admin\CVController@allcv']);
Route::get('admin/entretien', ['as'=> 'admin.entretien', 'uses' => 'Admin\entretienController@entretienclt']);



});



