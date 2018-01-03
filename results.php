<!DOCTYPE html>
<html lang="en">
  <head>
    <meta chaset="utf-8">
    <style>
      body {
        background-color: skyblue;
      }
      button {
        background-color: gray;
        border: none;
        color: white;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
      }
    </style>
  </head>
  <body>
    <div style="text-align: center">
      <h1>
        IP-Logger Results
      </h1>
      <button onclick="window.location = 'delLog.php'">
        Delete logs
      </button>
      <br /><br />
      <?php
        $results = file_get_contents("log.txt");
        echo nl2br($results);
        if(filesize("log.txt") == 0) {
          echo "<br /><br /><br />No logs here...";
        }
      ?>
    </div>
  </body>
</html>