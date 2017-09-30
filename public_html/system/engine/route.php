<?

$_route = array();

/**
 * uzywanie routingu według przykładu 
 *                                
 * $_route['nazwa_podstrony_z_get'] = array('NazwaControllera','metoda');
 * 
 */

$_route['welcome'] = array('ControllerWelcomeWelcome', 'index');
$_route['index'] = array('ControllerCore', 'view');
$_route['error'] = array('ControllerError', 'index');
