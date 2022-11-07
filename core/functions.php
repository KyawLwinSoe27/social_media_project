<?php
// common start 

function alert($text,$color="danger"){
    return "<p class='alert alert-$color'>$text</p>";
}
function runQuery($sql){
    if(!mysqli_query(conn(), $sql)){
        die("Query Failed " . mysqli_error());
    } 
}
function redirect($l){
    header("location:$l");
}

function fetch($sql){
    $query = mysqli_query(conn(),$sql);
    $row = mysqli_fetch_assoc($query);

    return $row;
}

function fetchAll($sql){
    $query = mysqli_query(conn(),$sql);
    $rows = [];
    while ($row = mysqli_fetch_assoc($query)){
        array_push($rows,$row);
    }
    return $rows;
}
// common end

//auth start

function register(){
    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $c_password = $_POST['c_password'];

    
    if($password == $c_password){
        $securePassword = password_hash($password,PASSWORD_DEFAULT);
        $sql = "INSERT INTO `users` (`full_name`, `email`, `password`) VALUES ('$full_name','$email','$securePassword')" ;
        if(runQuery($sql)){
            redirect("login.php");
        }
    }else{
        return alert("Password don't match");
    }
}

function login(){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE email='$email'";
    $qurey = mysqli_query(conn(),$sql);
    $row = mysqli_fetch_assoc($qurey);

    if(!$row){
        return alert("Password Don't Match");
    }else{
        if(!password_verify($password, $row['password'])){
            return alert("Password don't match");
        }else{
            session_start();
            $_SESSION['user'] = $row;
            redirect('dashboard.php');
        }
    }
}

//auth end

//users start

function user($id){
    $sql = "SELECT * FROM users WHERE id='$id'";
    return fetch($sql);
}

function users(){
    $sql = "SELECT * FROM users";
    return fetchAll($sql);
}



//users end

//post start

function post(){
    $post_content = $_POST['post_content'];
    $user_id = $_SESSION['user']['id'];

    $sql = "INSERT INTO posts (`post_content`,`user_id`) VALUES ('$post_content','$user_id')";
    return runQuery($sql);
}

function postLists(){
    $sql = "SELECT * FROM posts";
    return fetchAll($sql);
}
//post end