<?php
    $koneksi = mysqli_connect("localhost","root","","justchecklist");

    if(isset($_POST["submit_admin"])){
        $name = $_POST["nama"];
        $email = $_POST["email"];
        $alamat = $_POST["alamat"];
        $harbor = $_POST["harbor"];
        $no_hp = $_POST["no_hp"];
        $password = $_POST["password"];
        $password2 = $_POST["password2"];
        $id_pelabuhan = $_POST["id_pelabuhan"];

        if($password==$password2){
            $query="
            INSERT INTO 
                users(nama,email,alamat,pelabuhan,no_hp,password,id_pelabuhan,role) 
            VALUES 
                ('$name','$email','$alamat','$harbor','$no_hp','$password','$id_pelabuhan','admin')
        ";
        
        mysqli_query($koneksi,$query);
       
        header("Location: landing.php");
        exit;
        }else{
            header("Location: signup-admin.php");
            exit;
        }
        
    }else if(isset($_POST["submit_member"])){
        $name = $_POST["nama"];
        $email = $_POST["email"];
        $alamat = $_POST["alamat"];
        $no_hp = $_POST["no_hp"];
        $password = $_POST["password"];
        $password2 = $_POST["password2"];
        $id_kapal = $_POST["id_kapal"];

        if($password==$password2){

            $query="
                INSERT INTO 
                    users(name,email,alamat,no_hp,password,id_kapal,role) 
                VALUES 
                    ('$name','$email','$alamat','$no_hp','$password','$id_kapal','member')
            ";

            mysqli_query($koneksi,$query);
            header("Location: landing.php");
            exit;
        }else{
            header("Location: signup-member.php");
            exit;
        }

        exit;

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
            
            header("Location: login.php");
            exit;
        }else{
            $data=mysqli_fetcalamatssoc($login);
            if($data['role']=='admin'){
                header("Location: adminDashboard.php");
                exit;
            }else{
                header("Location: dashboard.php");
                exit;
            }
        }
    }
?>