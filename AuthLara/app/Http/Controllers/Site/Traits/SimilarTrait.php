<?php
namespace App\Http\Controllers\Site\Traits;
trait SimilarTrait
{
 public function similar($collection, $product,array $keys)
 {
     
     $sim = [];
     $data = $collection->toArray();
     shuffle($data);
     foreach ($keys as $col => $percentge) {
         foreach ($data as $row) {
             $str2 = $row[$col];
             if ($row['id'] == $product['id']) {
                  continue;
              }
             similar_text($product[$col], $str2,$pr);
             round($pr) >= $percentge ? array_push($sim, $row) : '';
             
             if(count($sim) == 6 ) {
                break;
             }
         }
     }
     return $sim;
 }
}

?>