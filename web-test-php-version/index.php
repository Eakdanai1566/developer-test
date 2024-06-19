<?php
    require("PHP/conn.php");
    require("PHP/delete.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Neo Echo Funeral</title>
    <link rel="stylesheet" href="CSS/index.css">
    <style>
      .form-container {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100%;
      }
      .form-container form {
        display: flex;
        flex-direction: column;
        align-items: center;
        width: 300px;
      }
      .form-container label,
      .form-container input {
        width: 100%;
        margin-bottom: 10px;
      }
      .form-container input[type="submit"] {
        width: auto;
      }
    </style>
  </head>
  <body>
    <div>
      <table style="border-collapse: collapse; width: 75%;" border="1" align="center">
        <tbody>
          <tr>
            <td class="banner">
              Banner
            </td>
          </tr>
          <tr style="height: 50px;">
            <td>
              <nav class="NavContainer">
                <ul class="NavLeft">
                  <li><a href="index.php">Home</a></li>
                  <li><a href="addCar.php">AddCar</a></li>
                </ul>
              </nav>
            </td>
          </tr>
        </tbody>
      </table>
      <table style="border-collapse: collapse; width: 75%;" border="1" align="center">
        <tbody>
          <tr>
            <td class="body1">
              <table style="border-collapse: collapse" border="1" align="center" class="profpic">
                <tbody>
                  <tr>
                    <td class="Banner">
                     
                    </td>
                  </tr>
                </tbody>
              </table>
            </td>
            <td class="body2">
                <?php
                    $sql = "SELECT * FROM carlist";
                    $res = $conn->query($sql);

                    echo '<table border="1" style="width: 70%; margin-left: auto; margin-right: auto;">';
                    echo '<thead>';
                    echo '<tr>';
                    echo '<th>CarID</th>';
                    echo '<th>Registration Plate</th>';
                    echo '<th>Brand</th>';
                    echo '<th>Model</th>';
                    echo '<th>Price</th>';
                    echo '<th>Note</th>';
                    echo '<th>Edit</th>';
                    echo '<th>Delete</th>';
                    echo '</tr>';
                    echo '</thead>';
                    echo '<tbody>';
                    foreach ($res as $request) {
                        echo '<tr>';
                        echo '<td>' . $request["carid"] . '</td>';
                        echo '<td>' . $request["regisplate"] . '</td>';
                        echo '<td>' . $request["brand"] . '</td>';
                        echo '<td>' . $request["model"] . '</td>';
                        echo '<td>' . $request["price"] . '</td>';
                        echo '<td>' . $request["note"] . '</td>';
                        echo '<td><a href="edit.php?carid=' . $request["carid"] . '">Edit This Car</a></td>';
                        echo '<td><a href="/PHP/delete.php?carid=' . $request["carid"] . '">Delete This Car</a></td>';

                        echo '</tr>';
                    }
                    echo '</tbody>';
                    echo '</table>';
                ?>
            </td>
            <td class="body3">
              
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </body>
</html>
