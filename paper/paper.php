<?php
  require_once 'login.php';
  $db_server = mysql_connect($db_hostname, $db_username, $db_password);
  if (! $db_server) die("Unable to connect to MySQL:" . mysql_error());
  mysql_select_db($db_database)
    or die("Unable to select database:" . mysql_error());
  if (isset($_POST['sauthor']) && 
      isset($_POST['stitle']) &&
      isset($_POST['syear']) &&
      isset($_POST['sjournal']) &&
      isset($_POST['skey_word']))
  {
    $sauthor = get_post('sauthor');
    $stitle = get_post('stitle');
    $syear = get_post('syear');
    $sjournal = get_post('sjournal');
    $skey_word = get_post('skey_word');
    if (get_post('sauthor') !='')
    {
      $ssauthor = get_post('sauthor');
    }
    else 
    {
      $ssauthor = "sauthor";
    }
    if (get_post('stitle') !='')
    {
      $sstitle = get_post('stitle');
    }
    else 
    {
      $sstitle = "stitle";
    }
    if (get_post('syear') !='')
    {
      $ssyear = get_post('syear');
    }
    else 
    {
      $ssyear = "syear";
    }
    if (get_post('sjournal') !='')
    {
      $ssjournal = get_post('sjournal');
    }
    else 
    {
      $ssjournal = "sjournal";
    }
    if (get_post('skey_word') !='')
    {
      $sskey_word = get_post('skey_word');
    }
    else 
    {
      $sskey_word = "skey_word";
    }
    $query = "SELECT * FROM paper WHERE (author LIKE '%$ssauthor%' or title LIKE '%$sstitle%' or year LIKE '%$ssyear%' or journal LIKE '%$ssjournal%' or key_word LIKE '%$sskey_word%' )"; 
    if (!mysql_query($query, $db_server))
      echo "Search failed: $query <br>" . mysql_error() . "<br><br>";
   

    $result = mysql_query($query);
    if (!result) die ("Database access failed" . mysql_error());
    $rows = mysql_num_rows($result);
    for ($j = 0; $j <$rows; ++$j)
    {
      $row = mysql_fetch_row($result);
      echo <<<_END
      <pre>
        Author: $row[0]
        Title: $row[1]
        Year: $row[2]
        Journal: $row[3]
        Key words: $row[4]
        Description: $row[5]
        Link: $row[6]
        Saved location: $row[7]
      </pre>
_END;
    }
  }  
  
  if (isset($_POST['author']) && 
      isset($_POST['title']) &&
      isset($_POST['year']) &&
      isset($_POST['journal']) &&
      isset($_POST['key_word']) &&
      isset($_POST['description']) &&
      isset($_POST['link']) &&
      isset($_POST['location']))
  {
    $author = get_post('author');
    $title = get_post('title');
    $year = get_post('year');
    $journal = get_post('journal');
    $key_word = get_post('key_word');
    $description = get_post('description');
    $link = get_post('link');
    $location = get_post('location');
      
    $query = "INSERT INTO paper (author, title, year, journal, key_word, description, link, location) VALUES" . " ('$author','$title','$year','$journal','$key_word','$description', '$link', '$location') ";
    if (!mysql_query($query, $db_server))
      echo "INSERT failed: $query <br>" . mysql_error() . "<br><br>";
  } 

  echo <<< _END
  <style>
  ul {list-style:none;
  }
  ul input {background-color: #eee;
            border: 1px solid black;
            height: 100%;
            width:40%;
            font-size: 16px;
  }
  ul li {margin: 10px;
  height: 30px;
  }
  #submit {
  height:40px;
  text-align: center;
  font-size:18px;
  position: relative;
  left:20%;
  border-radius:8px;
  border:1px solid black;
  }
  #submit:hover {
  background-color:black;
  color:white;
  }
  #describe {
  width: 80%;
  }
  </style>
  <form onkeypress="return event.keyCode != 13;" action="paper.php" method="post">
    <ul>
    <li>Author <input type="text" name="sauthor" value="$sauthor"></li>
    <li>Title <input type="text" name="stitle" value="$stitle"></li>
    <li>Year <input type="text" name="syear" value="$syear"></li>
    <li>Journal <input type="text" name="sjournal" value="$sjournal"></li>
    <li>Key words <input type="text" name="skey_word" value="$skey_word"></li>
    </ul>
    <input type="submit" value="Search" id="submit">
  </form>


  <form onkeypress="return event.keyCode != 13;" action="paper.php" method="post">
    <ul>
    <li>Author <input type="text" name="author" value="$author"></li>
    <li>Title <input type="text" name="title" value="$title"></li>
    <li>Year <input type="text" name="year" value="$year"></li>
    <li>Journal <input type="text" name="journal" value="$journal"></li>
    <li>Key words <input type="text" name="key_word" value="$key_word"></li>
    <li>Description <input type="text" name="description" value="$description" id="describe"></li>
    <li>Download link <input type="text" name="link" value="$link"></li>
    <li>Saved location <input type="text" name="location" value="$location"></li>
    </ul>
    <input type="submit" value="Add a paper to the database" id="submit">
  </form>
  
_END;
  
  
  
  mysql_close($db_server);
  function get_post($var)
  {
    return mysql_real_escape_string($_POST[$var]);
  }
  
?>
