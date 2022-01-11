<?php

if (isset($_Post['submit'])) {
  $name = $_Post['name'];
  $subject = $_Post['subject'];
  $mailFrom = $_Post['email'];

  $mailTo ="juliabewer@ymail.com"
  $headers = "From: ".$mailFrom
  $txt ="Du hast eine Email bekommen von" .$name.".\n\n".$subject;

  mail($mailTo, $txt, $headers);
  header("Location: Kontakt.html?mailsend");
}
