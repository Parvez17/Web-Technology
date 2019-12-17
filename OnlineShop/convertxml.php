<?php
    require 'database.php';
    
    $filename=time().".xml";

    $sql = "select * from post order by post_id desc";
    $res = mysqli_query($conn, $sql);
   
    $xml = new XMLWriter();
    $xml->openMemory();
    //$xml->openURI("php://output");  //print on screen no file output
    $xml->setIndent(true);
    $xml->startDocument('1.0', 'UTF-8');
    $xml->startElement('all_news');
    while ($row = mysqli_fetch_assoc($res)) {
      $xml->startElement("username");
      $xml->writeElement("postId", $row['post_id']);
      $xml->writeElement("headline", $row['title']);
      $xml->writeElement("post", $row['post']);
	  $xml->writeElement("creationTime", $row['created']);
      $xml->writeElement("deletionTime", $row['post_deleted']);
      $xml->endElement();
    }
    $xml->endElement();
    $xml->endDocument();

    //header('Content-type: text/xml'); //print on screen no file output with output memory
    //echo $xml->outputMemory(); //print on screen no file output with output memory
    
    $file = $xml->outputMemory();
    file_put_contents($filename,$file);
    
    //$xml->flush(); //print on screen no file output

    // Free result set
    mysqli_free_result($res); 
    // Close connections
    mysqli_close($conn);
    header("location:adm.php");
?>