<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Table Generator</title>
    </head>
    <body>
        <table border="1">
            
            <?php $file = fopen('list.txt', "r") or exit("Unable to open list file!"); // Load the list file. ?>
            <?php if (!feof($file)) { while (!feof($file)) { // While rows are present, loop through each of them. ?>
            <?php $row = explode("|", fgets($file)); if (isset($row[0]) && isset($row[1])) { // Make sure this is a valid row. If it is, display it. ?>

                <tr>
                    <td><?php echo $row[0] // Title Column ?></td>
                    <td><?php echo $row[1] // Author Column ?></td>
                </tr>

            <?php } } } else { // Display if no rows were found. ?>
                
                <tr>
                    <td>
                        <p>No rows found!</p>
                    </td>
                </tr>
                
            <?php } ?>
                
        </table>
    </body>
</html>
