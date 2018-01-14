<?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Saves the given body to a .php file in the specified folder structure and adds a rule to .htaccess
    // expects route in without a trailing .php
    // expects args to be comma separated arguemnts
    $route = $_GET["Route"];
    echo("\nroute: ".$route);
    $routeArray = explode('/', $route);
    echo("\nargs: ".$_GET["args"]);
    $args = explode(',', $_GET["args"]);
    $regexPattern = $routeArray;

    $newRoute = $routeArray;
    $orderedArgs = array();
    foreach($args as $arg){
      for($i = 0; $i < count($newRoute); ++$i){
        $routeElt = $newRoute[$i];
        if($routeElt == $arg){
          $regexPattern[$i] = "(.*)";
          array_push($orderedArgs, $routeElt);
          unset($newRoute[$i]);
        }
      }
    }

    echo("\nnewRoute: ".implode(",",$routeArray));
    echo("\norderedArgs: ".implode(",",$orderedArgs));


    $fileName = end($newRoute);
    array_pop($newRoute);
    echo("\nfilename: ".$fileName);
    echo("\nnewRoute: ".implode(" ", $newRoute));
    // echo("\npoppedRoute: ".$poppedRoute);
    if(count($newRoute)>0){
      $folderStructure = implode("/", $newRoute);
    } else{
      $folderStructure = "/";
    }
    echo("\nfolderStructre: ".$folderStructure);
    

    $body = file_get_contents('php://input');

    if (!is_dir($_SERVER['DOCUMENT_ROOT']."/techChal/api/".$folderStructure)){
      mkdir($_SERVER['DOCUMENT_ROOT']."/techChal/api/".$folderStructure, 0777, true); // true for recursive create
    }

    $myFile = fopen("../api/".$folderStructure."/".$fileName.".php", "w");
    fwrite($myFile, $body);


    // Add to .htaccess

    $htFile = $_SERVER['DOCUMENT_ROOT']."/.htaccess";
    $htContent = file_get_contents($htFile);
    // echo("htContent: ".$htContent);
    // "RewriteRule techChal/api/questions/(.*) techChal/api/questions.php?answers=$1"
    echo("\nregPat: ".implode("/", $regexPattern)."\n");
    if(count($orderedArgs)==0){
      $argsString="";
    } elseif(count($orderedArgs)==1){
      $argsString ="?".$orderedArgs[0]."=$1";
    } else {
      $argsString ="?".$orderedArgs[0]."=$1";
      array_shift($orderedArgs);
      for($i = 0; $i < count($orderedArgs); ++$i){
        $argsString = $argsString."&".$orderedArgs[$i]."=$".$i;
      }
    }
    $rewriteRegex = 'RewriteRule techChal/api/'.implode("/", $regexPattern).' techChal/api/'.$newRoute.$fileName.'.php'.$argsString;




    http_response_code(200);
    echo("created " . $fileName);
  }
  else {
    http_response_code(503);
    echo('Use a POST request with the "fileName" as a url parameter and the php code as the post body');
  }
?>