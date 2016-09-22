<?php

    // Use lists of words, symbols and letters
    $wordlist = array('boo', 'ghost', 'head', 'life', 'mate', 'tired', 'sleep', 'end');
    $symbols = array('%', '$', '#');
    $numbers = array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9);

    // Initialize the use of numbers and symbols to false
    $number = '0';
    $symbol = '0';
    $display = '';
    $password = '';
    $length = 0;    



    // Shuffle the list
    shuffle($wordlist);
    shuffle($symbols);
    shuffle($numbers);


    // Add a number to the end of the first word
    if(isset($_GET["number"]))
    {
        $wordlist[0] .= $numbers[0];
    }


    // Add a symbol to the end of the fourth word
    if(isset($_GET["symbol"]))
    {
        $wordlist[3] .= $symbols[0];
    }

    // Clear initial password
    if(isset($_GET['button']))
    {
        $display='';
    }


    // Create the password with the requested number of words
    $password = array_slice($wordlist, 0, $_GET['length']);

    // Create the string to print to the page

    for($x = 0; $x < $_GET['length']; $x++)
    {
        if($x != 0)
            $display.= '--';
        $display .= $password[$x];
    }
