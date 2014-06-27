<?php
//
//$predis = 'predis';
//
//$stopStone = 500;
//
//$k=0;
//do{
//    $k++;
//    print_r($k);
//    print_r("\n");
//}
//while ($stopStone > $k);







//$memcached = new Memcache;
//$memcached->connect('localhost', 11211) or die ("Can not connect to mem-server");
////$memcached = new Memcached('statex'); 
////$keys = $memcached->set('lastMinute', '2014_04_14_13_31_');
//
////$keys = $memcached->set('block', '0');
//var_dump($memcached->get('2014_04_14_15_45_b505e98d'));
////var_dump($memcached->get('block'));
//
////$memcached->flush();

phpinfo();die;
class A {
    public $foo = 1;
}  

$a = new A;
$b = $a;     // $a и $b копии одного идентификатора
             // ($a) = ($b) = <id>
$b->foo = 6;
echo $a->foo."\n";


$c = new A;
$d = &$c;    // $c и $d ссылки
             // ($c,$d) = <id>

$d->foo = 1;

echo $c->foo."\n";
echo $a->foo."\n";


$e = new A;

function foo($obj) {
    // ($obj) = $e) = <id>
    $obj->foo = 4;
}

foo($e);
echo $e->foo."\n";
