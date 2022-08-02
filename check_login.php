<?php
    @$login_lirbra = $_POST["login_lirbra"];
    @$login_facebook = $_POST["login_facebook"];
    @$login_line = $_POST["login_line"];
    @$login_apple = $_POST["login_apple"];
    @$not_login = $_POST["not_login"];

    if($login_lirbra == TRUE){
        echo "<title>"."Login From LirBra Account"."</title>"."เข้าผ่าน LirBra";
    }elseif($login_facebook == TRUE){
        echo "<title>"."Login From Facebook Account"."</title>"."เข้าผ่าน Facebook";
    }elseif($login_line == TRUE) {
        echo "<title>"."Login From Line Account"."</title>"."เข้าผ่าน Line";
    }elseif($login_apple == TRUE){
        echo "<title>"."Login From Apple Account"."</title>"."เข้าผ่าน Apple";
    }elseif($not_login == TRUE){
        echo "<title>"."โหมดไม่ระบุตัวตน"."</title>"."เข้าผ่าน โหมดไม่ระบุตัวตน";
    }

?>