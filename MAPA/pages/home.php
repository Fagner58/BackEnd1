<?php 
 include 'dados/produtos.php';
 include 'function/real.php';?>

  <h1 class="h1s">Confira nossas marmitas!</h1>
   <div class="produtos">
  <?php
    foreach($produto as $pdt):    
  ?>   
   <div class="bolos">       
        <a id="product" href="index.php?p=produto.php&id=<?=$pdt['id']?>">     
        <img src="<?=$pdt['imagem']?>" style="width:300px; border-radius: 10%;">    
        <p><?=$pdt['nome']?></p>
        <p id="valor"><?=BRL($pdt['valor'])?></p></a>    
    </div>  
  <?php 
  endforeach;?> 
  </div>
</div>