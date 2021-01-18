<?php
    require 'User.php';

    $users = [
        new User('Daoud', 'Moussa', 'jsdfjf@gmail.com', 'password1', 'nickname1'),
        new User('Pippo', 'Rossi', 'qwerty@gmail.com', 'password2', 'nickname2')
    ];

    $description1 = 'klioldfin isalviflio nisflibo nd mooofmvij mkvmfkjj  ifij mmfvi.';
    $users[0] -> setDescription($description1);

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <link rel="stylesheet" href="style.css">
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <table>
            <?php
                foreach ($users as $key => $user) {
                    $dataUser = $user -> getAllData();

                    if($key == 0) {
                        $data = $user -> getAllData(); ?>

                        <tr>
                            <?php
                            foreach ($data as $key => $value) { ?>
                                <th>
                                    <strong> <?php echo $key ?> </strong>
                                </th> <?php
                            } ?>
                        </tr> <?php
                    } ?>

                    <tr> <?php
                        foreach ($dataUser as $key => $data) { ?>
                            <th> <?php echo $data ?> </th> <?php
                        } ?>
                    </tr> <?php
                }
            ?>
        </table>
    </body>
</html>
