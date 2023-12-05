<?php

/**
 * Caminhos de Diretório
 * A função define() serve ára definir uma constante do PHP (sem o cifrão
 * e sempre escritas em maiúsculo). As constantes conterão caminhos absolutos
 * de diretórios até os arquivos, para iso usamos a função dirname que retorna
 * o caminho absoluto até um determinado arquivo e usamos como base o próprio arquivo,
 * com o uso da constante do PHP chamada __FILE__ Para ver o caminho completo
 * contido dentro de cada função, dê um echo na constante.
*/
define('BASEDIR', dirname(__FILE__, 2));
define('VIEWS', BASEDIR . '/View/modules/');

#coloque essas configuracoes no servidor não aqui !
# melhor não acessar por root , mas sim um usuario com as restrincoes com o banco
$_ENV['db']['host'] = 'localhost:3306';
$_ENV['db']['user'] = 'root';
$_ENV['db']['pass'] = '123456789';
$_ENV['db']['database'] = 'crud';