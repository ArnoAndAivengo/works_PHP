<?php 

//Стартуйте сессию

 $goods = [
  1 => ["name" => "Товар1","price" => 200],
  2 => ["name" => "Товар2","price" => 300],
  4 => ["name" => "Товар3","price" => 400],
 ];
 

//Убедитесь, что GET-параметр n не пустой и существует ключ в массиве $goods соответствующий полученному параметру

//Если условие выполняется, добавьте новый товар в сессионную переменную массив basket, увеличие её на единицу значение ключа соответствующего GET

?>
<h2>Корзина</h2>
<pre>
<?
//Выведите содержимое сессионной корзины удобным способом 

?>
</pre>


<?php 
//Создайте переменную $summa с начальным значением 0

//В цикле найдите общую стоимость товаров в корзине

//Выведите строку вида "На сумму $summa руб.<hr>"

/*Выведите все товары в $goods в формате

  <div><strong>Товар1</strong><br>
  Цена: 200<br>
  <a href="cart.php?n=1">В корзину</a><hr>
  </div>

*/
?>
