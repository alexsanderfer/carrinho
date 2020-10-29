<?php
    if(isset($_GET['adicionar'])){
    // Adcionar ao Carrinho
        $idProduto = (int) $_GET['adicionar'];
            if (isset($items[$idProduto])) {
                if(isset($_SESSION['carrinho'][$idProduto])) {
                    $_SESSION['carrinho'][$idProduto]['quantidade']++;
            } else {
                $_SESSION['carrinho'][$idProduto] = array('quantidade' => 1,'nome'=> $items[$idProduto]['nome'],'preco' => $items[$idProduto]['preco']);
            }
            } else {
                die('Você não pode adicionar um item que não existe.');
            }
    }
?>