<?php 
    foreach ($_SESSION['carrinho'] as $key => $value) {
        echo '<div class="carrinho-item">';
        echo '<p>Nome: '.$value['nome'].' | Quantidade: '.$value['quantidade'].' | Preço: R$'.($value['quantidade']*$value['preco']).',00 </p>';
        echo '</div>';
    }        
?>