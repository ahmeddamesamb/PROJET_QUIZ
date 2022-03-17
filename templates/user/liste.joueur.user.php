<?php
define("LIST_ROOT",PATH_POST."?controlleurs=user&action=listeJ&page=");
    $taille_t=count($data);
    $nom_aff=10;
    $nombre_de_page=ceil($taille_t/$nom_aff);  
    if (isset($_GET['page'])) {
        # code...
      $page_courant=(int)$_GET['page'];
        
       if ($page_courant>$nombre_de_page) {
           # code...
           $page_courant=$nombre_de_page;
           header("location:".PATH_POST."?controlleurs=user&action=listeJ&page=".$nombre_de_page);
           exit();
       }
       if ( $page_courant<1 ) {
           # code...
           $page_courant=1;
           header("location:".PATH_POST."?controlleurs=user&action=listeJ&page=1");
           exit();
       }
    }
    else {
        header("location:".PATH_POST."?controlleurs=user&action=listeJ&page=1");
        exit();
    }

 $indice_debut=($page_courant - 1) * $nom_aff;
 $indice_fin=($indice_debut + $nom_aff) - 1;


?>

<table>
    <tr>
         <th>Nom</th>
         <th>Prenom</th>
         <th>Score</th>
     </tr>
     <?php
 
       for ($i=$indice_debut; $i<=$indice_fin; $i++)
      {
?>
     <tr>
         <td><?=$data[$i]['nom']?></td>
         <td><?=$data[$i]['prenom']?></td>
         <td><?=$data[$i]['score']?></td>
     </tr>          
<?php
}  
?>

</table>

 
<div class="pagination">
 <ul>
    <?php if ($page_courant>1): ?>
        <li class="btn suivant"><span><a href="<?=LIST_ROOT.$page_courant - 1?>">precedant</a></span></li>

        <?php endif; ?>
   <?php
       for ($i=1; $i <=$nombre_de_page ; $i++):?>
           
           <!-- <li class="numb active"><span>1</span></li> -->
           <li class="numb"><span><a href="<?=LIST_ROOT.$i?>"><?=$i?></a></span></li>
           <li class="dots"><span>...</span></li>
    
   <?php endfor; ?>


     <?php if ($page_courant<$nombre_de_page): ?> 
        <li class="btn suivant"><span><a href="<?=LIST_ROOT.$page_courant + 1?>">suivant</a></span></li>
        <?php endif; ?>
 </ul> 
  </div>
</div>
 
 
