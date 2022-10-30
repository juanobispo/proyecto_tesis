<?php

namespace App\Http\Middleware;
use Closure;

class HeadersSeguros
{
    // Podrías checar la siguiente página para más información acerca de estas cabeceras
    // https://securityheaders.com/

    // Lista las cabeceras que no quieras en tus respuestas de tu aplicación
    // Hay cabeceras que no es recomendable que se muestren, por ejemplo "X-Powered-BY" muestra información del servidor, la puedes editar a tu gusto
    private $headersNoAdmitidos = [
        'X-Powered-By',
        'Server',
    ];
    public function handle($request, Closure $next)
    {
        $this->removerCabecerasNoAdmitidas($this->headersNoAdmitidos);
        $response = $next($request);

        $response->headers->set('Referrer-Policy', 'no-referrer-when-downgrade');
        $response->headers->set('X-Content-Type-Options', 'nosniff');
        $response->headers->set('X-XSS-Protection', '1; mode=block');

        $response->headers->set('X-Frame-Options', 'SAMEORIGIN');
        

        /*es una característica de seguridad que permite a un sitio web indicar a los navegadores que sólo se debe comunicar con HTTPS en lugar de usar HTTP.*/
       // $response->headers->set('Strict-Transport-Security', 'max-age=31536000; includeSubDomains; preload');
        
        
        /**/
        //$response->headers->set('Content-Security-Policy', "script-src 'self'");
        
        
       
        $response->headers->set('Feature-Policy',"accelerometer 'none' ; gyroscope 'none' ;  magnetometer 'none' ; microphone 'none' ;  payment 'none' ; usb 'none' ;geolocation 'none' ; midi 'self' ; microphone 'none' ; camera 'none' ; fullscreen 'self' ; speaker 'none' ; vibrate 'none'  "); 
        
        $response->headers->set('Permissions-Policy',"geolocation=();midi=();notifications=();push=();sync-xhr=();microphone=();camera=();magnetometer=();gyroscope=();speaker=(self);vibrate=();fullscreen=(self);payment=();");
        
    
        $response->headers->set('Set-Cookie',"secure ; httpOnly");
        
        return $response;
    }
    private function removerCabecerasNoAdmitidas($listaCabeceras)
    {
        foreach ($listaCabeceras as $cabecera)
            header_remove($cabecera);
    }
}