<?php 

include "./db/users.php";
include "./db/comments.php";


function paginateArray($datiGrezzi) {
    $itemsPerPage = 15;
    $currentPage = 1;

    $totalPages = ceil(count($datiGrezzi) / $itemsPerPage);

    $offset = $itemsPerPage *($currentPage - 1);
    $paginatedData = array_slice($datiGrezzi, $offset, $itemsPerPage);


    
}

echo paginateArray($commentsList);

header("Content-Type: application/json");

echo json_encode($commentsList);

?>
