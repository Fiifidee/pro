<?php

// Reads the variables sent via POST
$sessionId   = $_POST["sessionId"];
$serviceCode = $_POST["serviceCode"];
$phonenumber = $_POST["phonenumber"];
$text        = $_POST["text"];
//This is the first menu screen
    if ( $text == "" ) {
        $response  = "Hi, welcome to UGvotes \n";
        $response .= "Input ID";
        $response .= "Input Pin";
    }
// Menu for a user who selects '1' from the first menu
// Will be brought to this second menu screen
    else if ($text == "1") {
        $response  = "CON  A unique 6-digit token has been sent to your phone dail *172*5662*232# to confirm Token";

    }
//Menu for a user who selects '1' from the second menu above
// Will be brought to this third menu screen
    else if ($text == "2") {
        $response = "CON send token to Vote \n";
        $response .= "Input Token \n";
        $response .= "Resend Token \n";
    }

    else if ($text == "3"){
        $response = "CONTINUE Your token is correct";
        $response .= "Enter 1 to continue";
    }

    else if ($text == "3*0"){
        $response = "END Your token is invalid";
    }


    else if ($text == "4") {
        $response = "CON PRESIDENT \n";
        $response .= "1. Ernest \n";
        $response .= "2. Micheal";
        $response .= "3. Skip";
    }

    else if ($text == "4*1") {
        $response = "CON VICE PRESIDENT \n";
        $response .= "1. Bernard \n";
        $response .= "2. Saddique";
        $response .= "3. Skip";
    }

    else if ($text == "4*2") {
        $response = "CON SECRETARY \n";
        $response .= "1. Millicent \n";
        $response .= "2. Martha";
        $response .= "3. Skip";
    }

    else if ($text == "4*3") {
        $response = "CON TREASURE \n";
        $response .= "1. Judith \n";
        $response .= "2. Joshua";
        $response .= "3. Skip";
    }

    else if ($text == "4*4") {
        $response = "CON ORGANIZER \n";
        $response .= "1. Rutherford \n";
        $response .= "2. Salifu";
        $response .= "3. Skip";
    }

// Menu to display your votes
//voter would be taken to the next screen
    
    else if ($text == "4*1*2*3*4*0") {
        $response = "Preview \n";
        $response .= "Confirm";
        $response .= "Restart";
    }




//echo response
header('Content-type: text/plain');
echo $response
?>
