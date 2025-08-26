<?php
namespace App\Models\PostModel;
use \PDO;
function findAll(PDO $conn, int $limit = 10): array
{
    $sql = 'SELECT * FROM posts 
                     ORDER BY created_at 
                     DESC 
                     LIMIT :limit';
    $rs = $conn->prepare($sql);
    $rs->bindValue(':limit', $limit, PDO::PARAM_INT);
    $rs->execute();
    return $rs->fetchAll(PDO::FETCH_ASSOC);
}