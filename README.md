# Manejo Variables de Servidor PHP-LARAVEL
## _Una simple pero muy útil clase para manejar las variables del servidor PHP (LARAVEL)_

[![N|Solid](https://i.ibb.co/ZLzQTpm/Firma-Git-Hub.png)](#)

Obtenga las variables globales del servidor, así como las variables propias de Laravel, para hacer sus propias validaciones o algoritmos.

## Características

- Conozca desde que sistema operativo se conectan a su aplicación.
- Valide si es un acceso móvil o web.
- Obtenga los datos globales del servidor.
- Obtenga los datos del ENV de laravel para las revisiones que requiera.

## Instalación

Descargue el contenido del repositorio a su equipo.
Cree un directorio en la carpeta App de laravel con el nombre *Clases*

```sh
App\Clases\GETSERVER.php
```

Esta carpeta se carga por defecto dentro del Framework, por lo cual podremos llamar la clase en cualquier controlador con total libertad.

Llamado y uso de Clase

```sh
<?php
use App\Clases\GETSERVER;
```

## Métodos

Podrá invocar el método que requiera de la clase de manera estatica.
Listado Actual de Métodos

METODOS PARA USO EN CONTROLADORES

| METODO | DESCRIPCIÓN |
| ------ | ------ |
| GETSERVER::is_iPhone() | Retorna TRUE si el usuario se está conectando al sistema desde un IPhone. |
| GETSERVER::is_Macintosh() | Retorna TRUE si el usuario se está conectando al sistema desde un MAC. |
| GETSERVER::is_Linux() | Retorna TRUE si el usuario se está conectando al sistema desde un Linux (PC o Sistemas Android). |
| GETSERVER::is_Android() | Retorna TRUE si el usuario se está conectando al sistema desde un Android. |
| GETSERVER::is_Windows() | Retorna TRUE si el usuario se está conectando al sistema desde un Windows. |
| GETSERVER::get_Browser() | Retorna un objeto con los datos del navegador en uso. |
| GETSERVER::user() | Ejemplo Return: "www-data".|
| GETSERVER::home() | Ejemplo Return: "/var/www". |
| GETSERVER::script_name() | Contiene la ruta del script actual. Esto es de utilidad para las páginas que necesiten apuntarse a si mismas. La constante __FILE__ contiene la ruta absoluta y el nombre del archivo actual incluido. |
| GETSERVER::request_uri() |  La URI que se empleó para acceder a la página. Por ejemplo: '/index.html'. |
| GETSERVER::query_string() | Si existe, la cadena de la consulta de la petición de la página. |
| GETSERVER::request_method() | Método de petición empleado para acceder a la página, por ejemplo 'GET', 'HEAD', 'POST', 'PUT'. |
| GETSERVER::server_protocol() | Nombre y número de revisión del protocolo de información a través del cual la página es solicitada, por ejemplo 'HTTP/1.0'. |
| GETSERVER::gateway_interface() | Número de revisión de la especificación CGI que está empleando el servidor, por ejemplo 'CGI/1.1'. |
| GETSERVER::redirect_url() | URL definitica de la petición. |
| GETSERVER::remote_port() | El puerto empleado por la máquina del usuario para comunicarse con el servidor web. |
| GETSERVER::script_filename() | La ruta del script ejecutándose actualmente en forma absoluta. |
| GETSERVER::server_admin() | El valor dado a la directiva SERVER_ADMIN (de Apache) en el archivo de configuración del servidor web. Si el script se está ejecutando en un host virtual, el valor dado será el definido para dicho host virtual. |
| GETSERVER::context_document_root() | La ruta del script ejecutándose actualmente hasta la carpeta sin ficehero. |
| GETSERVER::context_prefix() | Metodo sin Documentacion nueva version Apache. |
| GETSERVER::request_scheme() |  Retorna HTTP o HTTPS. |
| GETSERVER::document_root() |  El directorio raíz de documentos del servidor en el cual se está ejecutando el script actual, según está definida en el archivo de configuración del servidor. |
| GETSERVER::remote_addr() |  La dirección IP desde la cual está viendo la página actual el usuario. |
| GETSERVER::server_port() |  El puerto de la máquina del servidor usado por el servidor web para la comunicación. Para las configuraciones por omisión, el valor será '80'; el empleo de SSL, por ejemplo, cambiará dicho valor al valor definido para el puerto HTTP seguro. |
| GETSERVER::server_addr() | La dirección IP del servidor donde se está ejecutando actualmente el script. |
| GETSERVER::server_name() | El nombre del host del servidor donde se está ejecutando actualmente el script. Si el script se ejecuta en un host virtual se obtendrá el valor del nombre definido para dicho host virtual. |
| GETSERVER::server_software() | Cadena de identificación del servidor dada en las cabeceras de respuesta a las peticiones. |
| GETSERVER::server_signature() | Cadena que contiene la versión del servidor y el nombre del host virtual que son añadidas a las páginas generadas por el servidor, si esta habilitada esta funcionalidad. |
| GETSERVER::path() |  Retorno de directorio bin. |
| GETSERVER::http_cookie() |  Contiene el valor bruto del encabezado 'Cookie' enviado por el agente de usuario. |
| GETSERVER::http_accept_language() |  Contenido de la cabecera Accept-Language: de la petición actual, si existe. Por ejemplo: 'en'. |
| GETSERVER::http_accept_encoding() |  Contenido de la cabecera Accept-Encoding: de la petición actual, si existe. Por ejemplo: 'gzip'. |
| GETSERVER::http_sec_fetch_dest() |  Por ejemplo: 'document'. |
| GETSERVER::http_sec_fetch_user() |  Por ejemplo: '?1'. |
| GETSERVER::http_sec_fetch_mode() |  Por ejemplo: 'navigate'. |
| GETSERVER::http_sec_fetch_site() |  Por ejemplo: 'none'. |
| GETSERVER::http_accept() |  Contenido de la cabecera Accept: de la petición actual, si existe. |
| GETSERVER::http_user_agent() | Contenido de la cabecera User-Agent: de la petición actual, si existe. Consiste en una cadena que indica el agente de usuario empleado para acceder a la pagina. Un ejemplo típico es: Mozilla/4.5 [en] (X11; U; Linux 2.2.9 i586). Entre otras opciones, puede emplear dicho valor con get_browser() para personalizar el resultado de la salida de la página en función de las capacidades del agente de usuario empleado. |
| GETSERVER::http_upgrade_insecure_requests() | Solicitudes inseguras de actualización http |
| GETSERVER::http_sec_ch_ua_platform() | Plataforma de conexion del usuario |
| GETSERVER::http_sec_ch_ua_mobile() | Conexion movil a la plataforma |
| GETSERVER::http_host() | Contenido de la cabecera Host: de la petición actual, si existe. |
| GETSERVER::request_time_float() | El timestamp del inicio de la solicitud, con precisión microsegundo. Disponible desde PHP 5.4.0. |
| GETSERVER::request_time() | Fecha Unix de inicio de la petición. Disponible desde PHP 5.1.0. |
| GETSERVER::all_server() | Retorno de un objeto con todos los datos de las variables globales del servidor. |
| GETSERVER::server() | Retorno de un objeto con los datos de las variables globales del servidor sin contemplar las variables del ENV de Laravel. |
| GETSERVER::env() | Retorno de un objeto con los datos de las variables en entorno de Laravel (Expone el contenido del ENV). |

_Ejemplo validación desde que sistema se conectan a la aplicación_
```sh
function messageOS(){
        if(GETSERVER::is_iPhone()){
            return '<i class="fa-brands fa-apple"></i>&nbsp;Móvil iPhone';
        }else if(GETSERVER::is_Macintosh()){
            return '<i class="fa-brands fa-apple"></i>&nbsp;Macintosh';
        }else if(GETSERVER::is_Android()){
            return '<i class="fa-brands fa-android"></i>&nbsp;Móvil Android';
        }else if(GETSERVER::is_Windows()){
            return '<i class="fa-brands fa-windows"></i>&nbsp;Windows';
        }
    }
```


## Desarrollador

Ingeniero, Raúl Mauricio Uñate Castro
raulmauriciounate@gmail.com

## Licencia
MIT
