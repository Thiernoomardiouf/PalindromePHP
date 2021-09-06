<form method="post">        
Enter un mot: <input type="text" name="num"/><br>  
<button type="submit">Verifier</button>  
</form>  
<?php   
    if($_POST)  
    {  
     
        $num = $_POST['num'];  
        
        $reverse = strrev($num);  
           
        if($num == $reverse){  
            echo "Le mot $num est Palindrome";     
        }else{  
            echo "Le mot $num n'est pas Palindrome"."<br>";
            echo "l'inverse est $reverse";  
        }  
}     
      ?>  