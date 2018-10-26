<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title> Najib Jamil A </title>
  </head>
  <body>
    <h3>Tambah Data</h3>
    <form method="post" action="ok.php">
      <table>
        <tr>
          <td>ID</td>
          <td><input type="text" name="id"></td>
        </tr>
        <tr>
          <td>Username</td>
          <td><input type="text" name="username"></td>
        </tr>
        <tr>
          <td>Password</td>
          <td><input type="password" name="password"></td>
        </tr>
        <tr>
          <td style="vertical-align: top">level</td>
          <td>
            <input type="radio" name="level" value="admin">Admin<br>
            <input type="radio" name="level" value="user">User<br>
            <input type="radio" name="level" value="guest">Guest<br>
          </td>
        </tr>
        <tr>
          <td>Fullname</td>
          <td><input type="text" name="fullname"></td>
        </tr>
        <tr>
          <td><button type="submit" value="simpan">SIMPAN</button></td>
        </tr>
      </table>
    </form>
  </body>
</html>
