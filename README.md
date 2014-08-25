WP-Post-Views
=============

Post Count without plugin for Wordpress

PT_BR

Contador de visualizações de post para Wordpress, código simples e funcional. Usei o código para mostrar
a quantidade de visualizações que os posts recebem em um site de cliente que fiz.

Ao inserir o código no functions.php, faça referência ao código do functions em seu arquivo, por exemplo no single.php
com o código a seguir:

<?php echo baseRS_getPostViews(get_the_ID()); ?>

Changelog

------- CHANGELOG VERSION 1.0 -------

Initial release
