<?php
    $koneksi = mysqli_connect("localhost","root","","justcheckit");

    if(isset($_POST["submit_admin"])){
        $name = $_POST["name"];
        $email = $_POST["email"];
        $h_a = $_POST["h_a"];
        $harbor = $_POST["harbor"];
        $c_p = $_POST["c_p"];
        $password = $_POST["password"];
        $password2 = $_POST["password2"];
        $h_i = $_POST["h_i"];

        if($password==$password2){
            $query="
            INSERT INTO 
                users(name,email,home_address,harbor,cell_phone,password,harbor_id,role) 
            VALUES 
                ('$name','$email','$h_a','$harbor','$c_p','$password','$h_i','admin')
        ";
        
        mysqli_query($koneksi,$query);
        }
        else {
           header("Location: signup-admin.html");
        exit;
        }
        
    }else if(isset($_POST["submit_member"])){
        $name = $_POST["custom_U3224"];
        $email = $_POST["Email"];
        $h_a = $_POST["custom_U3241"];
        $c_p = $_POST["custom_U3228"];
        $password = $_POST["custom_U3236"];
        $s_i = $_POST["custom_U3251"];

        
        $query="
            INSERT INTO 
                users(name,email,home_address,cell_phone,password,ship_id,role) 
            VALUES 
                ('$name','$email','$h_a','$c_p','$password','$s_i','member')
        ";

        mysqli_query($koneksi,$query);
    }else if(isset($_POST["login"])){
        $email = $_POST["email"];
        $password = $_POST["password"];

        $query="
            SELECT * 
            FROM users
            WHERE email='$email' 
            AND password='$password'
        ";

        $login = mysqli_query($koneksi,$query);

        if(!mysqli_num_rows($login)==1){
            header("Location: login.html");
            exit;
        }
    }

    header("Location: index.html");
    exit;
?>