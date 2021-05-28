<!-- 
    Usando il database hotel usato già negli scorsi esercizi come base dato:
Creare una pagina  con la lista delle stanze prese dal db
un click porta alla pagina di dettaglio della stanza
Ricordate di dare priorità alla parte backend e di lasciare alla fine la parte di stile dettagliata.

 -->
<?php
require_once __DIR__ . '/partials/scripts/get-room.php'
?>


<!DOCTYPE html>
<html lang="en">

<?php
require_once __DIR__ . '/partials/scripts/templates/header.php'
?>

<body>
    <main class="container">
        <h1 class="my-5">Archivio Stanze</h1>
    <!-- TABLE -->
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Room-number</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <?php
                    if (!empty($rooms)) {
                        foreach ($rooms as $room) { ?>
                            <tr>
                                <td>
                                    <?php echo $room['id']; ?>
                                </td>
                                <td>
                                    <?php echo $room['room_number']; ?>
                                </td>
                                <td>
                                    <a class="text-success" href="./details.php?id=<?php echo $room['id']; ?>">
                                    Details
                                    </a>
                                </td> 
                            </tr>
                        <?php }
                    }
                ?>
                
            </tbody>
        </table>
    </main>
</body>
</html>