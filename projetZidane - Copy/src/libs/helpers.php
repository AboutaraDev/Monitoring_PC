
<?php
function view(string $filename, array $data = []): void
{
    // create variables from the associative array
    foreach ($data as $key => $value) {
        $$key = $value;
    }
    require_once __DIR__ . '/../inc/' . $filename . '.php';
}

function is_post_request() : bool {
    return strtoupper($_SERVER['REQUEST_METHOD']) === 'POST';
}

function is_get_request() : bool {
    return strtoupper($_SERVER['REQUEST_METHOD']) === 'GET';
}

/**
 * Return the error class if error is found in the array $errors
 *
 * @param array $errors
 * @param string $field
 * @return string
 */
function error_class(array $errors, string $field): string
{
    return isset($errors[$field]) ? 'error' : '';
}

/**
 * Redirect to another URL
 *
 * @param string $url
 * @return void
 */
function redirect_to(string $url): void
{
    header('Location:' . $url);
    exit;
}

/**
 * Redirect to a URL with data stored in the items array
 * @param string $url
 * @param array $items
 */
function redirect_with(string $url, array $items): void
{
    foreach ($items as $key => $value) {
        $_SESSION[$key] = $value;
    }

    redirect_to($url);
}

/**
 * Redirect to a URL with a flash message
 * @param string $url
 * @param string $message
 * @param string $type
 */
function redirect_with_message(string $url, string $message, string $type = FLASH_SUCCESS)
{
    flash('flash_' . uniqid(), $message, $type);
    redirect_to($url);
}

/**
 * Flash data specified by $keys from the $_SESSION
 * @param ...$keys
 * @return array
 */
function session_flash(...$keys): array
{
    $data = [];
    foreach ($keys as $key) {
        if (isset($_SESSION[$key])) {
            $data[] = $_SESSION[$key];
            unset($_SESSION[$key]);
        } else {
            $data[] = [];
        }
    }
    return $data;
}

function statistiques() : array {
    file_put_contents("fichier.txt",shell_exec('netstat -e'));
    $myfile=fopen("fichier.txt","r");
    $myData=[];
    $lignes=[];
    while(!feof($myfile)){
        $line=fgets($myfile);
        array_push($lignes,$line);   
    }
    
    $t_lignes=str_split($lignes[5]);
    $t_titre=array_slice($t_lignes,0,21);
    $ltitre=implode("",$t_titre);
    $t_emis_recu=array_slice($t_lignes,34);
    $lt_emis_recu=implode("",$t_emis_recu);


    //modifications
    $valeur=array_slice($t_lignes,22);
    $val = implode("",$valeur);
    $taille = strlen($val);
    $paquetRecu= intval(substr($val,0,$taille/2 +1));
    $p=intval($paquetRecu);
    $paquetEmis= intval(substr($val,$taille/2 +1));



    $myData=[
    'title'=>$ltitre,
    'emis'=>$paquetEmis,
    'recu'=>$paquetRecu
    ];
   
    return $myData;

}

function getStatsOntime()  {
   
       
    $myData=statistiques();
    array_push( $_SESSION['donnees']['titre'],$myData['title']);
    array_push( $_SESSION['donnees']['emis'],$myData['emis']);
    array_push( $_SESSION['donnees']['recu'],$myData['recu']);
   
}



?>

