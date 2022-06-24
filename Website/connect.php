<?<php 
    $user_name=$post['user_name'];
    $user_age=$post['user_age'];
    $user_department=$post['user_department'];
    $user_phone=$post['user_phone'];
    $user_email=$post['user_email'];

    $conn=new mysqli('localhost','root','','test');
    if($conn->connect_error){
        die('Connection Failed:'.$conn->connect_error);
    }
    else{
        $stmt=$conn->prepare("insert into form(user_name,user_age,user_department,user_phone,user_email)");
        $stmt->bind_param("sisis",$user_name,$user_age,$user_department,$user_phone,$user_email);
        $stmt->execute();
        echo"submit Successfully...";
        $stmt->close();
        $conn->close();
    }
?>