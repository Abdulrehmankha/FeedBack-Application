<?php 

session_start();

 
    require_once("connection.php");
 
    if(isset($_POST['update']))
    {
        
        
        // for animal
        $anim_id = $_POST['anim_id'];
        $animal_desc = $_POST['animal_desc'];
        // for user getting name
        $name = $_POST['username'];


        $username=$_SESSION['username'];
       
                $query = " update animal set animal_desc = '".$animal_desc."', name='".$username."' where id='".$anim_id."'";
        $result = mysqli_query($con,$query);
 
        if($result)
        {
            header("location:index.php");
        }
        else
        {
            echo ' Please Check Your Query ';
        }
    }
    else
    {
        header("location:index.php");
    }

    // update for mineral
    if(isset($_POST['update']))
    {
        // for mineral 
        $mine_id = $_POST['mine_id'];
        $mine_desc = $_POST['mine_desc'];

        $name = $_POST['username'];

        $username=$_SESSION['username'];
       
            $query1 = " update mineral set mine_desc = '".$mine_desc."', name='".$username."' where id='".$mine_id."'";
            $result1 = mysqli_query($con,$query1);
 
        if($result1)
        {
            header("location:index.php");
        }
        else
        {
            echo ' Please Check Your Query ';
        }
    }
    else
    {
        header("location:index.php");
    }

        // for myvegetable
    if(isset($_POST['update']))
    {
        // for vegetable
        $veg_id = $_POST['veg_id'];
        $veg_desc = $_POST['veg_desc'];

        $name = $_POST['username'];

        $username=$_SESSION['username'];
       
            $query2 = " update myvegitable set veg_desc = '".$veg_desc."', name='".$username."' where id='".$veg_id."'";
            $result2 = mysqli_query($con,$query2);
 
        if($result2)
        {
            header("location:index.php");
        }
        else
        {
            echo ' Please Check Your Query ';
        }
    }
    else
    {
        header("location:index.php");
    }
 
?>