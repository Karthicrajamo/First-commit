<?php
class test
{
    public $add=null;
    private $p=20;
    public function __construct()
    {
        printf('open'); ?>
<br><?php
    }
    public function sample($new)
    {
        // print($add);
        // echo 'test::$add';
        return $this->add=$new;
    }
    public function pub()
    {
        return $this->p;
    }
}
