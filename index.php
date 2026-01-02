<?php
mb_internal_encoding("UTF-8");

function autoloadFunction(string $class): void
{
    // Končí název třídy řetězcem "Kontroler" ?
    if (preg_match('/Controler$/', $class))
        require("controlers/" . $class . ".php");
    else
        require("models/" . $class . ".php");
}


spl_autoload_register("autoloadFunction");

//Db::connect("localhost","us011225","Skorpik444","db011225");

$router = new RouterControler();
$router->process(array($_SERVER['REQUEST_URI']));
$router->viewListing();

?>
<script>
  if ('serviceWorker' in navigator) {
    navigator.serviceWorker.register('/service-worker.js')
      .then((registration) => {
        console.log('Service Worker registered with scope:', registration.scope);
      })
      .catch((error) => {
        console.error('Service Worker registration failed:', error);
      });
  }
</script>