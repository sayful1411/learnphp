<?php 

/**
 * date_default_timezone_set()
 * date()
 * new DateTime()
 * diff()
 * format()
 * date_create() 
 * date_modify() 
 * date_format()
 * 
 */

date_default_timezone_set("Asia/Dhaka");

// echo date('d-m-y'); // 10-03-23
// echo date('d-m-Y'); // 10-03-2023
// echo date('d-M-Y'); // 10-Mar-2023
// echo date('d-F-Y'); // 10-March-2023
// echo date('dS F, Y'); // 10th March, 2023
// echo date('d-M-Y | h:i:s A'); // 10-Mar-2023 | 10:15:20 AM
//echo date('d-M-Y | h:i:s A',time()+12*60*60); // 11-Mar-2023 | 03:20:58 AM // 12 hours added

// Birth date calculate
$d1 = new DateTime("12 Aug 1998");
$d2 = new DateTime("now");
$diff = $d1->diff($d2);
//echo $diff->format("%y years %m month %d days %h hours %i minitues %s seconds");

// =================== Date Functions ========================
// checkdate()
//var_dump(checkdate(11,31,2023));

// date_create() date_modify() date_format()
$date = date_create('now');
date_modify($date, '+1 day');
//echo date_format($date, 'Y-m-d');

$name = '';
    $email = '';
    $date = '';
if(isset($_POST['submit'])){
    
    if(isset($_POST['name']) && $_POST['name']!=''){
        $name = $_POST['name'];
    }else{
        echo "name required.";
    }
    if(isset($_POST['email']) && $_POST['email']!=''){
        $email = $_POST['email'];
    }else{
        echo "email required.";
    }
    if(isset($_POST['date']) && $_POST['date']!=''){
        $date = $_POST['date'];
    }else{
        echo "date required.";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Date Time Functions</title>
</head>
<body>
    <form action="date.php" method="post">
        <input type="text" name="name" placeholder="Name">
        <input type="email" name="email" placeholder="Email">
        <input type="date" name="date">
        <input type="submit" name="submit" value="submit">
    </form>
    <div>
        Name: <?php echo $name; ?> <br/>
        Email: <?php echo $email; ?> <br/>
        Date: <?php echo date("d-M-Y",strtotime($date)); ?> <br/>
    </div>
    <script>
if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
</script>
</body>
</html>