<?php 
/**
 * Função faz a inclusão de paginas no index
 */
function loadPages() 
{
    $page = filter_input(INPUT_GET, 'page', FILTER_SANITIZE_STRING);
    
    $page = (!$page)? 'pages/home.php' : "pages/{$page}.php";
    
    if (!file_exists($page)) {
        throw new \Exception("Página não encontrada...");
        
    }
    return $page;
}
