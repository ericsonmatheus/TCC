<?php 

function formatPrice($preco) {
    return number_format($preco, 2, ',','.');
}