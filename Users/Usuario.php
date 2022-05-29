<?php
class Usuario
{
    private $password,$email, $name, $address, $phone;

    //Setters, para establecer el valor de las propiedades
    function setName($name){
        $this-> name = $name;
    }
    function setAddress($address){
        $this-> address = $address;
    }
    function setPhone($phone){
        $this-> phone = $phone;
    }
    function setEmail($email){
        $this-> email = $email;
    }

    function setPassword($password){
        $this-> password = $password;
    }

    //getters, para obtener el valor de las propiedades
    function getName(){
        return $this->name;
    }
    function getAddress(){
        return $this->address;
    }
    function getPhone(){
        return $this->phone;
    }
    function getEmail(){
        return $this->email;
    }

    function getPassword(){
        return $this->password;
    }

    private function htmlCard($name, $address, $phone, $password)
    {
        return '
        <div class="card m-5" style="width: 18rem;">
            <img class="card-img-top" src="https://www.w3schools.com/howto/img_avatar.png" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">'.$this->getName().'</h5>
                <p class="card-text">'.$this->getAddress().'</p>
                <p class="card-text">'.$this->getPhone().'</p>
                <p class="card-text">'.$this->getEmail().'</p>
            </div>
        </div>
        ';
    }

    function muestraCard()
    {
        return $this->htmlCard($this->name, $this->address, $this->phone, $this->password);
    }
}