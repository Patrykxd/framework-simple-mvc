<?

use SystemEngineRoute as Route;

/**
 * Page not found
 * 404
 */

Route::get('/',                         'SystemCore',               'view');
Route::get('/strona-glowna',            'SystemCore',               'view');
Route::get('/welcome',                  'ControllerWelcomeWelcome', 'index');
/**
 * Route::page_404();
 * zawsze jaki ostatni w routingu sprawdza czy strona istnieje
 */
Route::page_404();
//var_dump('<pre>',Route::fetch());