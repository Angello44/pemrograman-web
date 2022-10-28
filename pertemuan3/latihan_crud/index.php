<?php
include_once("config.php");
$query = " SELECT * FROM customers OREDER BY id DESC";
$result = mysqli_query($coon_db, $query);
?>

<html>
<head>
    <title>HomePage</title>
</head>

<body>
<a href="add.php">Add New customers</a><br/><br/>
    <table width='80%' border=1>
        <thead>
            <tr>
                <th>Name</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Join Date</th>
                <th>Last Update</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <!-- Fetch data cusrtomer dengam array associative -->
            <?php if($result->num_rows > 0): ?>
                <?php while($customer_data = mysqli_fetch_array($result)) : ?>
                    <tr>
                        <td> <?php echo $customer_data['name']?> </td>
                        <td> <?php echo $customer_data['phone']?> </td>
                        <td> <?php echo $customer_data['email']?> </td>
                        <td> <?php $customer_data['created']?> </td>
                        <td> <?php $customer_data['updated']?> </td>
                        <td>
                            <a href='edit.php?id=<?=$customer_data["id"]?>'>Edit</a> |
                            <a href='edit.php?id=<?=$customer_data["id"]?>'>Delete</a>
                        </td>
                    </tr>
                 <?php endwhile; ?>
                <?php else :?>
                    <tr>
                        <td colsplan="6" rowspan="1" headers="" align="center">Data Customer Tidak diTemukan!</td>
                    </tr>
                <?php endif; ?>

                <?php mysqli_free_result($result); ?>
        </tbody>
    </table>

    <?php if(isset($_GET["message"])){
        $message = $_GET["message"];
        echo "<script type='text/javascript'>alert('$message');";
        echo "window.location='index.php'</script>";
    }
    ?>
</body>
</html>

