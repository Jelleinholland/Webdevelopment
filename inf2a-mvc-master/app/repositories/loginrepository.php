<?php
require __DIR__ . '/repository.php';

class LoginRepository extends Repository{

//echo "<h1>Loginpage!</h1>";
function AttemptToLogin($Username, $Password){
    if (!empty($Username) && !empty($Password)){

        //$sql_query = "select count(*) as cntUser from User where Username='".$Username."' and Password='".$Password."'";
        //$result = mysqli_query($con,$sql_query);
        //$row = mysqli_fetch_array($result);
        
        $sqlquery = "SELECT COUNT(UserID) FROM User WHERE Username=:Username AND Password=:Password";
        $stament = $this->connection->prepare($sqlquery);

        $stament->bindParam(':Username', $Username);
        $stament->bindParam(':Password', $Password);

        $stament->execute();
        $rowCount = $stament->fetchColumn();
    
        return $rowCount;
    }
}

}