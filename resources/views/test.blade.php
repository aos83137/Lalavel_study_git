<?php
class User{
    public $id, $email, $name, $birthday;

    function __construct($id, $email, $name, $birthday){
        $this->id = $id;
        $this->email = $email;
        $this->name = $name;
        $this->birthday = $birthday;

    }
    function printUser(){
        print_r($this);
    }
}
//'yumeno0328', 'yumeno.@namever.com','kojima yumeno', '1995/3/28'
$yumeno = new User('yumeno0328', 'yumeno.@namever.com','kojima yumeno', '1995/3/28');
$yumeno->printUser();
$yumeno->id = "yuuu";
$yumeno->name='sfsdf';
print('<br>');
$yumeno->printUser();