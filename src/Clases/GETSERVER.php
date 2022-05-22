<?php

 /**
 * --------------------------------------------------------------------------
 * MANEJO DE VARIABLES DEL SERVIDOR
 * --------------------------------------------------------------------------
 *
 * Validacion del Navegador usado en la conexión
 * Verificacion del Sistema Operativo Cliente
 * Retorno de Variables de Servidor o Varables de Entorno Laravel
 * --------------------------------------------------------------------------
 *
 * AUTOR: ING. RAUL MAURICIO UÑATE CASTRO
 * FECHA: 25-11-2021
 * V: 1.0.0
 * STATIC::CLASS
 *
 * METODOS USO ESTATICO
 *
 * @method GETSERVER::is_iPhone() | Retorna TRUE si el usuario se está conectando al sistema desde un IPhone. |
 * @method GETSERVER::is_Macintosh() | Retorna TRUE si el usuario se está conectando al sistema desde un MAC. |
 * @method GETSERVER::is_Linux() | Retorna TRUE si el usuario se está conectando al sistema desde un Linux (PC o Sistemas Android). |
 * @method GETSERVER::is_Android() | Retorna TRUE si el usuario se está conectando al sistema desde un Android. |
 * @method GETSERVER::is_Windows() | Retorna TRUE si el usuario se está conectando al sistema desde un Windows. |
 * @method GETSERVER::get_Browser() | Retorna un objeto con los datos del navegador en uso. |
 * @method GETSERVER::user() | Ejemplo Return: "www-data".|
 * @method GETSERVER::home() | Ejemplo Return: "/var/www". |
 * @method GETSERVER::script_name() | Contiene la ruta del script actual. Esto es de utilidad para las páginas que necesiten apuntarse a si mismas. La constante __FILE__ contiene la ruta absoluta y el nombre del archivo actual incluido. |
 * @method GETSERVER::request_uri() |  La URI que se empleó para acceder a la página. Por ejemplo: '/index.html'. |
 * @method GETSERVER::query_string() | Si existe, la cadena de la consulta de la petición de la página. |
 * @method GETSERVER::request_method() | Método de petición empleado para acceder a la página, por ejemplo 'GET', 'HEAD', 'POST', 'PUT'. |
 * @method GETSERVER::server_protocol() | Nombre y número de revisión del protocolo de información a través del cual la página es solicitada, por ejemplo 'HTTP/1.0'. |
 * @method GETSERVER::gateway_interface() | Número de revisión de la especificación CGI que está empleando el servidor, por ejemplo 'CGI/1.1'. |
 * @method GETSERVER::redirect_url() | URL definitica de la petición. |
 * @method GETSERVER::remote_port() | El puerto empleado por la máquina del usuario para comunicarse con el servidor web. |
 * @method GETSERVER::script_filename() | La ruta del script ejecutándose actualmente en forma absoluta. |
 * @method GETSERVER::server_admin() | El valor dado a la directiva SERVER_ADMIN (de Apache) en el archivo de configuración del servidor web. Si el script se está ejecutando en un host virtual, el valor dado será el definido para dicho host virtual. |
 * @method GETSERVER::context_document_root() | La ruta del script ejecutándose actualmente hasta la carpeta sin ficehero. |
 * @method GETSERVER::context_prefix() | Metodo sin Documentacion nueva version Apache. |
 * @method GETSERVER::request_scheme() |  Retorna HTTP o HTTPS. |
 * @method GETSERVER::document_root() |  El directorio raíz de documentos del servidor en el cual se está ejecutando el script actual, según está definida en el archivo de configuración del servidor. |
 * @method GETSERVER::remote_addr() |  La dirección IP desde la cual está viendo la página actual el usuario. |
 * @method GETSERVER::server_port() |  El puerto de la máquina del servidor usado por el servidor web para la comunicación. Para las configuraciones por omisión, el valor será '80'; el empleo de SSL, por ejemplo, cambiará dicho valor al valor definido para el puerto HTTP seguro. |
 * @method GETSERVER::server_addr() | La dirección IP del servidor donde se está ejecutando actualmente el script. |
 * @method GETSERVER::server_name() | El nombre del host del servidor donde se está ejecutando actualmente el script. Si el script se ejecuta en un host virtual se obtendrá el valor del nombre definido para dicho host virtual. |
 * @method GETSERVER::server_software() | Cadena de identificación del servidor dada en las cabeceras de respuesta a las peticiones. |
 * @method GETSERVER::server_signature() | Cadena que contiene la versión del servidor y el nombre del host virtual que son añadidas a las páginas generadas por el servidor, si esta habilitada esta funcionalidad. |
 * @method GETSERVER::path() |  Retorno de directorio bin. |
 * @method GETSERVER::http_cookie() |  Contiene el valor bruto del encabezado 'Cookie' enviado por el agente de usuario. |
 * @method GETSERVER::http_accept_language() |  Contenido de la cabecera Accept-Language: de la petición actual, si existe. Por ejemplo: 'en'. |
 * @method GETSERVER::http_accept_encoding() |  Contenido de la cabecera Accept-Encoding: de la petición actual, si existe. Por ejemplo: 'gzip'. |
 * @method GETSERVER::http_sec_fetch_dest() |  Por ejemplo: 'document'. |
 * @method GETSERVER::http_sec_fetch_user() |  Por ejemplo: '?1'. |
 * @method GETSERVER::http_sec_fetch_mode() |  Por ejemplo: 'navigate'. |
 * @method GETSERVER::http_sec_fetch_site() |  Por ejemplo: 'none'. |
 * @method GETSERVER::http_accept() |  Contenido de la cabecera Accept: de la petición actual, si existe. |
 * @method GETSERVER::http_user_agent() | Contenido de la cabecera User-Agent: de la petición actual, si existe. Consiste en una cadena que indica el agente de usuario empleado para acceder a la pagina. Un ejemplo típico es: Mozilla/4.5 [en] (X11; U; Linux 2.2.9 i586). Entre otras opciones, puede emplear dicho valor con get_browser() para personalizar el resultado de la salida de la página en función de las capacidades del agente de usuario empleado. |
 * @method GETSERVER::http_upgrade_insecure_requests() | Solicitudes inseguras de actualización http |
 * @method GETSERVER::http_sec_ch_ua_platform() | Plataforma de conexion del usuario |
 * @method GETSERVER::http_sec_ch_ua_mobile() | Conexion movil a la plataforma |
 * @method GETSERVER::http_host() | Contenido de la cabecera Host: de la petición actual, si existe. |
 * @method GETSERVER::request_time_float() | El timestamp del inicio de la solicitud, con precisión microsegundo. Disponible desde PHP 5.4.0. |
 * @method GETSERVER::request_time() | Fecha Unix de inicio de la petición. Disponible desde PHP 5.1.0. |
 * @method GETSERVER::all_server() | Retorno de un objeto con todos los datos de las variables globales del servidor. |
 * @method GETSERVER::server() | Retorno de un objeto con los datos de las variables globales del servidor sin contemplar las variables del ENV de Laravel. |
 * @method GETSERVER::env() | Retorno de un objeto con los datos de las variables en entorno de Laravel (Expone el contenido del ENV). |
 *
 */

namespace App\Clases;

class GETSERVER{

    #======== IDENTIFICACION SISTEMA OPERATIVO =========#

    /**
     * Retorna TRUE si el usuario se está conectando al sistema desde un IPhone.
     *
     * @return BOOL
     */
    public static function is_iPhone(){

        $http_user_agent = strval($_SERVER['HTTP_USER_AGENT']);
        $identifiers = array('iPhone', 'iPhone OS');

        foreach ($identifiers as $identifier) {
            $check = strpos($http_user_agent, $identifier);
            if ($check >= 1){
                return true;
            }
        }
        return false;

    }

    /**
     * Retorna TRUE si el usuario se está conectando al sistema desde un MAC.
     *
     * @return BOOL
     */
    public static function is_Macintosh(){

        $http_user_agent = strval($_SERVER['HTTP_USER_AGENT']);
        $identifiers = array('Macintosh','Intel Mac OS');

        foreach ($identifiers as $identifier) {
            $check = strpos($http_user_agent, $identifier);
            if ($check >= 1){
                return true;
            }
        }
        return false;

    }

    /**
     * Retorna TRUE si el usuario se está conectando al sistema desde un Linux (PC o Sistemas Android).
     *
     * @return BOOL
     */
    public static function is_Linux(){

        $http_user_agent = strval($_SERVER['HTTP_USER_AGENT']);
        $identifiers = array('Linux');

        foreach ($identifiers as $identifier) {
            $check = strpos($http_user_agent, $identifier);
            if ($check >= 1){
                return true;
            }
        }
        return false;

    }

    /**
     * Retorna TRUE si el usuario se está conectando al sistema desde un Android.
     *
     * @return BOOL
     */
    public static function is_Android(){

        $http_user_agent = strval($_SERVER['HTTP_USER_AGENT']);
        $identifiers = array('Android');

        foreach ($identifiers as $identifier) {
            $check = strpos($http_user_agent, $identifier);
            if ($check >= 1){
                return true;
            }
        }
        return false;

    }

    /**
     * Retorna TRUE si el usuario se está conectando al sistema desde un Windows.
     *
     * @return BOOL
     */
    public static function is_Windows(){

        $http_user_agent = strval($_SERVER['HTTP_USER_AGENT']);
        $identifiers = array('Windows');

        foreach ($identifiers as $identifier) {
            $check = strpos($http_user_agent, $identifier);
            if ($check >= 1){
                return true;
            }
        }
        return false;

    }

    #======== IDENTIFICACION NAVEGADOR =========#

    /**
     * Retorna un objeto con los datos del navegador en uso.
     *
     * @return OBJECT
     */
    public static function get_Browser(){

        $u_agent = $_SERVER['HTTP_USER_AGENT'];
        $bname = 'Desconocido';
        $platform = 'Desconocido';
        $version= "Desconocido";

        # Plataforma
        if (preg_match('/linux/i', $u_agent)) {
            $platform = 'Linux';
        } else if (preg_match('/macintosh|mac os x/i', $u_agent)) {
            $platform = 'Macintosh';
        } else if (preg_match('/windows|win32/i', $u_agent)) {
            $platform = 'Windows';
        }

        # Navegador
        if(preg_match('/MSIE/i',$u_agent) && !preg_match('/Opera/i',$u_agent)){
            $bname = 'Internet Explorer';
            $ub = "MSIE";
        } else if(preg_match('/Firefox/i',$u_agent)){
            $bname = 'Mozilla Firefox';
            $ub = "Firefox";
        } else if(preg_match('/Chrome/i',$u_agent)){
            $bname = 'Google Chrome';
            $ub = "Chrome";
        } else if(preg_match('/Safari/i',$u_agent)){
            $bname = 'Apple Safari';
            $ub = "Safari";
        } else if(preg_match('/Opera/i',$u_agent)){
            $bname = 'Opera';
            $ub = "Opera";
        } else if(preg_match('/Netscape/i',$u_agent)){
            $bname = 'Netscape';
            $ub = "Netscape";
        }

        # Número de Version
        $known = array('Version', $ub, 'other');
        $pattern = '#(?<browser>' . join('|', $known) . ')[/ ]+(?<version>[0-9.|a-zA-Z.]*)#';
        if (!preg_match_all($pattern, $u_agent, $matches)) {
            // No tenemos un número coincidente , solo continúa.
        }

        // Mirar Cuantas Versiones Tenemos
        $i = count($matches['browser']);
        if ($i != 1) {
            // Tendremos dos ya que no estamos usando 'otro' argumento todavía
            // Ver si la versión está antes o después del nombre
            if (strripos($u_agent,"Version") < strripos($u_agent,$ub)){
                $version= $matches['version'][0];
            } else {
                $version= $matches['version'][1];
            }
        } else {
            $version= $matches['version'][0];
        }

        // Comprobar si tenemos una version.
        if ($version==null || $version==""){
            $version="?";
        }

        return (object) [
            'userAgent' =>  $u_agent,
            'name'      =>  $bname,
            'version'   =>  $version,
            'platform'  =>  $platform,
            'pattern'   =>  $pattern
        ];
    }

    #======== SERVER DATA UNIQUE =========#

    /**
     * Ejemplo Return: "www-data".
     *
     * @return STRING
     */
    public static function user(){

        if (isset($_SERVER['USER'])) {
            $response = $_SERVER['USER'];
        } else {
            $response = NULL;
        }
        return $response;

    }

    /**
     * Ejemplo Return: "/var/www".
     *
     * @return STRING
     */
    public static function home(){

        if (isset($_SERVER['HOME'])) {
            $response = $_SERVER['HOME'];
        } else {
            $response = NULL;
        }
        return $response;

    }

    /**
     * Contiene la ruta del script actual. Esto es de utilidad para las páginas que necesiten apuntarse a si mismas. La constante __FILE__ contiene la ruta absoluta y el nombre del archivo actual incluido.
     *
     * @return STRING
     */
    public static function script_name(){

        if (isset($_SERVER['SCRIPT_NAME'])) {
            $response = $_SERVER['SCRIPT_NAME'];
        } else {
            $response = NULL;
        }
        return $response;

    }

    /**
     * La URI que se empleó para acceder a la página. Por ejemplo: '/index.html'.
     *
     * @return STRING
     */
    public static function request_uri(){

        if (isset($_SERVER['REQUEST_URI'])) {
            $response = $_SERVER['REQUEST_URI'];
        } else {
            $response = NULL;
        }
        return $response;

    }

    /**
     * Si existe, la cadena de la consulta de la petición de la página.
     *
     * @return STRING
     */
    public static function query_string(){

        if (isset($_SERVER['QUERY_STRING'])) {
            $response = $_SERVER['QUERY_STRING'];
        } else {
            $response = NULL;
        }
        return $response;

    }

    /**
     * Método de petición empleado para acceder a la página, por ejemplo 'GET', 'HEAD', 'POST', 'PUT'.
     *
     * @return STRING
     */
    public static function request_method(){

        if (isset($_SERVER['REQUEST_METHOD'])) {
            $response = $_SERVER['REQUEST_METHOD'];
        } else {
            $response = NULL;
        }
        return $response;

    }

    /**
     * Nombre y número de revisión del protocolo de información a través del cual la página es solicitada, por ejemplo 'HTTP/1.0'.
     *
     * @return STRING
     */
    public static function server_protocol(){

        if (isset($_SERVER['SERVER_PROTOCOL'])) {
            $response = $_SERVER['SERVER_PROTOCOL'];
        } else {
            $response = NULL;
        }
        return $response;

    }

    /**
     * Número de revisión de la especificación CGI que está empleando el servidor, por ejemplo 'CGI/1.1'.
     *
     * @return STRING
     */
    public static function gateway_interface(){

        if (isset($_SERVER['GATEWAY_INTERFACE'])) {
            $response = $_SERVER['GATEWAY_INTERFACE'];
        } else {
            $response = NULL;
        }
        return $response;

    }

    /**
     * URL definitica de la petición.
     *
     * @return STRING
     */
    public static function redirect_url(){

        if (isset($_SERVER['REDIRECT_URL'])) {
            $response = $_SERVER['REDIRECT_URL'];
        } else {
            $response = NULL;
        }
        return $response;

    }

    /**
     * El puerto empleado por la máquina del usuario para comunicarse con el servidor web.
     *
     * @return STRING
     */
    public static function remote_port(){

        if (isset($_SERVER['REMOTE_PORT'])) {
            $response = $_SERVER['REMOTE_PORT'];
        } else {
            $response = NULL;
        }
        return $response;

    }

    /**
     * La ruta del script ejecutándose actualmente en forma absoluta.
     *
     * @return STRING
     */
    public static function script_filename(){

        if (isset($_SERVER['SCRIPT_FILENAME'])) {
            $response = $_SERVER['SCRIPT_FILENAME'];
        } else {
            $response = NULL;
        }
        return $response;

    }

    /**
     * El valor dado a la directiva SERVER_ADMIN (de Apache) en el archivo de configuración del servidor web. Si el script se está ejecutando en un host virtual, el valor dado será el definido para dicho host virtual.
     *
     * @return STRING
     */
    public static function server_admin(){

        if (isset($_SERVER['SERVER_ADMIN'])) {
            $response = $_SERVER['SERVER_ADMIN'];
        } else {
            $response = NULL;
        }
        return $response;

    }

    /**
     * La ruta del script ejecutándose actualmente hasta la carpeta sin ficehero.
     *
     * @return STRING
     */
    public static function context_document_root(){

        if (isset($_SERVER['CONTEXT_DOCUMENT_ROOT'])) {
            $response = $_SERVER['CONTEXT_DOCUMENT_ROOT'];
        } else {
            $response = NULL;
        }
        return $response;

    }

    /**
     * Metodo sin Documentacion nueva version Apache.
     *
     * @return STRING
     */
    public static function context_prefix(){

        if (isset($_SERVER['CONTEXT_PREFIX'])) {
            $response = $_SERVER['CONTEXT_PREFIX'];
        } else {
            $response = NULL;
        }
        return $response;

    }

    /**
     * Retorna HTTP o HTTPS.
     *
     * @return STRING
     */
    public static function request_scheme(){

        if (isset($_SERVER['REQUEST_SCHEME'])) {
            $response = strtoupper($_SERVER['REQUEST_SCHEME']);
        } else {
            $response = NULL;
        }
        return $response;

    }

    /**
     * El directorio raíz de documentos del servidor en el cual se está ejecutando el script actual, según está definida en el archivo de configuración del servidor.
     *
     * @return STRING
     */
    public static function document_root(){

        if (isset($_SERVER['DOCUMENT_ROOT'])) {
            $response = $_SERVER['DOCUMENT_ROOT'];
        } else {
            $response = NULL;
        }
        return $response;

    }

    /**
     * La dirección IP desde la cual está viendo la página actual el usuario.
     *
     * @return STRING
     */
    public static function remote_addr(){

        if (isset($_SERVER['REMOTE_ADDR'])) {
            $response = $_SERVER['REMOTE_ADDR'];
        } else {
            $response = NULL;
        }
        return $response;

    }

    /**
     * El puerto de la máquina del servidor usado por el servidor web para la comunicación. Para las configuraciones por omisión, el valor será '80'; el empleo de SSL, por ejemplo, cambiará dicho valor al valor definido para el puerto HTTP seguro.
     *
     * @return STRING
     */
    public static function server_port(){

        if (isset($_SERVER['SERVER_PORT'])) {
            $response = $_SERVER['SERVER_PORT'];
        } else {
            $response = NULL;
        }
        return $response;

    }

    /**
     * La dirección IP del servidor donde se está ejecutando actualmente el script.
     *
     * @return STRING
     */
    public static function server_addr(){

        if (isset($_SERVER['SERVER_ADDR'])) {
            $response = $_SERVER['SERVER_ADDR'];
        } else {
            $response = NULL;
        }
        return $response;

    }

    /**
     * El nombre del host del servidor donde se está ejecutando actualmente el script. Si el script se ejecuta en un host virtual se obtendrá el valor del nombre definido para dicho host virtual.
     *
     * @return STRING
     */
    public static function server_name(){

        if (isset($_SERVER['SERVER_NAME'])) {
            $response = $_SERVER['SERVER_NAME'];
        } else {
            $response = NULL;
        }
        return $response;

    }

    /**
     * Cadena de identificación del servidor dada en las cabeceras de respuesta a las peticiones.
     *
     * @return STRING
     */
    public static function server_software(){

        if (isset($_SERVER['SERVER_SOFTWARE'])) {
            $response = $_SERVER['SERVER_SOFTWARE'];
        } else {
            $response = NULL;
        }
        return $response;

    }

    /**
     * Cadena que contiene la versión del servidor y el nombre del host virtual que son añadidas a las páginas generadas por el servidor, si esta habilitada esta funcionalidad.
     *
     * @return STRING
     */
    public static function server_signature(){

        if (isset($_SERVER['SERVER_SIGNATURE'])) {
            $response = $_SERVER['SERVER_SIGNATURE'];
        } else {
            $response = NULL;
        }
        return $response;

    }

    /**
     * Retorno de directorio bin
     *
     * @return STRING
     */
    public static function path(){

        if (isset($_SERVER['PATH'])) {
            $response = $_SERVER['PATH'];
        } else {
            $response = NULL;
        }
        return $response;

    }

    /**
     * Contiene el valor bruto del encabezado 'Cookie' enviado por el agente de usuario.
     *
     * @return STRING
     */
    public static function http_cookie(){

        if (isset($_SERVER['HTTP_COOKIE'])) {
            $response = $_SERVER['HTTP_COOKIE'];
        } else {
            $response = NULL;
        }
        return $response;

    }

    /**
     * Contenido de la cabecera Accept-Language: de la petición actual, si existe. Por ejemplo: 'en'.
     *
     * @return STRING
     */
    public static function http_accept_language(){

        if (isset($_SERVER['HTTP_ACCEPT_LANGUAGE'])) {
            $response = $_SERVER['HTTP_ACCEPT_LANGUAGE'];
        } else {
            $response = NULL;
        }
        return $response;

    }

    /**
     * Contenido de la cabecera Accept-Encoding: de la petición actual, si existe. Por ejemplo: 'gzip'.
     *
     * @return STRING
     */
    public static function http_accept_encoding(){

        if (isset($_SERVER['HTTP_ACCEPT_ENCODING'])) {
            $response = $_SERVER['HTTP_ACCEPT_ENCODING'];
        } else {
            $response = NULL;
        }
        return $response;

    }

    /**
     * Por ejemplo: 'document'.
     *
     * @return STRING
     */
    public static function http_sec_fetch_dest(){

        if (isset($_SERVER['HTTP_SEC_FETCH_DEST'])) {
            $response = $_SERVER['HTTP_SEC_FETCH_DEST'];
        } else {
            $response = NULL;
        }
        return $response;

    }

    /**
     * Por ejemplo: '?1'.
     *
     * @return STRING
     */
    public static function http_sec_fetch_user(){

        if (isset($_SERVER['HTTP_SEC_FETCH_USER'])) {
            $response = $_SERVER['HTTP_SEC_FETCH_USER'];
        } else {
            $response = NULL;
        }
        return $response;

    }

    /**
     * Por ejemplo: 'navigate'.
     *
     * @return STRING
     */
    public static function http_sec_fetch_mode(){

        if (isset($_SERVER['HTTP_SEC_FETCH_MODE'])) {
            $response = $_SERVER['HTTP_SEC_FETCH_MODE'];
        } else {
            $response = NULL;
        }
        return $response;

    }

    /**
     * Por ejemplo: 'none'.
     *
     * @return STRING
     */
    public static function http_sec_fetch_site(){

        if (isset($_SERVER['HTTP_SEC_FETCH_SITE'])) {
            $response = $_SERVER['HTTP_SEC_FETCH_SITE'];
        } else {
            $response = NULL;
        }
        return $response;

    }

    /**
     * Contenido de la cabecera Accept: de la petición actual, si existe.
     *
     * @return STRING
     */
    public static function http_accept(){

        if (isset($_SERVER['HTTP_ACCEPT'])) {
            $response = $_SERVER['HTTP_ACCEPT'];
        } else {
            $response = NULL;
        }
        return $response;

    }

    /**
     * Contenido de la cabecera User-Agent: de la petición actual, si existe. Consiste en una cadena que indica el agente de usuario empleado para acceder a la pagina. Un ejemplo típico es: Mozilla/4.5 [en] (X11; U; Linux 2.2.9 i586). Entre otras opciones, puede emplear dicho valor con get_browser() para personalizar el resultado de la salida de la página en función de las capacidades del agente de usuario empleado.
     *
     * @return STRING
     */
    public static function http_user_agent(){

        if (isset($_SERVER['HTTP_USER_AGENT'])) {
            $response = $_SERVER['HTTP_USER_AGENT'];
        } else {
            $response = NULL;
        }
        return $response;

    }

    /**
     * Solicitudes inseguras de actualización http
     *
     * @return STRING
     */
    public static function http_upgrade_insecure_requests(){

        if (isset($_SERVER['HTTP_UPGRADE_INSECURE_REQUESTS'])) {
            $response = $_SERVER['HTTP_UPGRADE_INSECURE_REQUESTS'];
        } else {
            $response = NULL;
        }
        return $response;

    }

    /**
     * Plataforma de conexion del usuario
     *
     * @return STRING
     */
    public static function http_sec_ch_ua_platform(){

        if (isset($_SERVER['HTTP_SEC_CH_UA_PLATFORM'])) {

            $preResponse = $_SERVER['HTTP_SEC_CH_UA_PLATFORM'];
            $preResponse = filter_var($preResponse, FILTER_SANITIZE_STRING);
            $preResponse = filter_var($preResponse, FILTER_SANITIZE_URL);
            $response = $preResponse;
        } else {
            $response = NULL;
        }
        return $response;

    }

    /**
     * Conexion movil a la plataforma
     *
     * @return STRING
     */
    public static function http_sec_ch_ua_mobile(){

        if (isset($_SERVER['HTTP_SEC_CH_UA_MOBILE'])) {
            $response = str_replace('?', '' , $_SERVER['HTTP_SEC_CH_UA_MOBILE']);
        } else {
            $response = NULL;
        }
        return $response;

    }

    /**
     * Contenido de la cabecera Host: de la petición actual, si existe.
     *
     * @return STRING
     */
    public static function http_host(){

        if (isset($_SERVER['HTTP_HOST'])) {
            $response = $_SERVER['HTTP_HOST'];
        } else {
            $response = NULL;
        }
        return $response;

    }

    /**
     * El timestamp del inicio de la solicitud, con precisión microsegundo. Disponible desde PHP 5.4.0.
     *
     * @return STRING
     */
    public static function request_time_float(){

        if (isset($_SERVER['REQUEST_TIME_FLOAT'])) {
            $response = $_SERVER['REQUEST_TIME_FLOAT'];
        } else {
            $response = NULL;
        }
        return $response;

    }

    /**
     * Fecha Unix de inicio de la petición. Disponible desde PHP 5.1.0.
     *
     * @return STRING
     */
    public static function request_time(){

        if (isset($_SERVER['REQUEST_TIME'])) {
            $response = $_SERVER['REQUEST_TIME'];
        } else {
            $response = NULL;
        }
        return $response;

    }

    #======== SERVER DATA OBJECT =========#

    /**
     * Retorno de un objeto con todos los datos de las variables globales del servidor.
     *
     * @return OBJECT
     */
    public static function all_server(){
        $response = (object)$_SERVER;
        return $response;
    }

    /**
     * Retorno de un objeto con los datos de las variables globales del servidor sin contemplar las variables del ENV de Laravel.
     *
     * @return OBJECT
     */
    public static function server(){

        $chunk  =   false;
        $count = 0;
        foreach ($_SERVER as $dato => $valor) {
            /* Definir donde Separar el Arreglo */
            if ($dato != 'APP_NAME' && $chunk == false){
                $count = $count + 1;
            } else {
                $chunk = true;
            }
        }

        $response = array_chunk($_SERVER ,$count, true);
        return (object)$response[0];
    }

    /**
     * Retorno de un objeto con los datos de las variables en entorno de Laravel (Expone el contenido del ENV).
     *
     * @return OBJECT
     */
    public static function env(){

        $chunk  =   false;
        $count = 0;
        foreach ($_SERVER as $dato => $valor) {
            /* Definir donde Separar el Arreglo */
            if ($dato != 'APP_NAME' && $chunk == false){
                $count = $count + 1;
            } else {
                $chunk = true;
            }
        }

        $arrayResponse = array_chunk($_SERVER ,$count, true);
        $partes =  count($arrayResponse);

        $data = [];
        for ($i=1; $i < $partes; $i++) {
            $data = array_merge($data, $arrayResponse[$i]);
        }

        return (object)$data;
    }

}
?>
