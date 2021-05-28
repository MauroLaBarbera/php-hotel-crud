<?php
require_once __DIR__ . '/partials/scripts/get-single-room.php'
?>
<!DOCTYPE html>
<html lang="en">

<?php
require_once __DIR__ . '/partials/scripts/templates/header.php'
?>

<body>
    <main class="container">
        <?php if(!empty($room)) { ?>

        
        <h1 class="my-5">Room number: <?php echo $room['room_number']; ?></h1>
    <!-- TABLE -->
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Room-number</th>
                    <th scope="col">Floor</th>
                    <th scope="col">Beds</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <?php echo $room['id']; ?>
                    </td>
                    <td>
                        <?php echo $room['room_number']; ?>
                    </td>
                    <td>
                        <?php echo $room['floor']; ?>
                    </td>
                    <td>
                        <?php echo $room['beds']; ?>
                    </td>
                    <td>
                        <a class="text-success" href="./">
                        Home
                        </a>
                    </td> 
                </tr>
            </tbody>
        </table>
        <?php } else { ?>
            <h2>No Room Found.</h2>
        <?php } ?>
    </main>
</body>
</html>