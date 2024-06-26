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

              <div class="form-container">
                <form action="/PHP/add.php" method="POST" onsubmit="return validateForm()">
                  <label for="regisplate">Registration Plate:</label>
                  <input type="text" id="regisplate" name="regisplate" required>

                  <label for="brand">Brand:</label>
                  <input type="text" id="brand" name="brand" required>

                  <label for="model">model:</label>
                  <input type="text" id="model" name="model">

                  <label for="price">price:</label>
                  <input type="text" id="price" name="price">

                  <label for="note">Note:</label>
                  <input type="text-box" id="note" name="note">

                  <input type="submit" value="Add">
                </form>
              </div>
            </td>
            <td class="body3">

            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </body>
</html>
