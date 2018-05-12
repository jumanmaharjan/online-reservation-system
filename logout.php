<?php
   session_start();
   
   if(session_destroy()) {
   include 'home.html';
   }
?>