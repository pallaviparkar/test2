<?php 
// include_once 'config.php';
// include_once 'class.cfb_chattrbox.php';

// $Cfb_ChattrObj = new Cfb_chattrbox();



// echo $Cfb_ChattrObj->decrypt_string("224.164.156.224.165.139.32.224.164.161.224.164.176.32.224.16")


$tweet = "RT @elearnmarkets: #Nifty moves below #Triangle with #CCI moving below -100 in hourly chart, (not a reco to buy/sell/hold) #NIFTYFUTURE htt…";


$main_tweet = '#Nifty moves below #Triangle with #CCI moving below -100 in hourly chart, (not a reco to buy/sell/hold)… https://t.co/Ar1gRrvYN8';


$str = str_replace('RT @', '', $tweet);

//echo $str;

echo strstr($str, ':');

exit;
function encrypt_string($input){       

    $inputlen = strlen($input);// Counts number characters in string $input
    $randkey = rand(1, 9); // Gets a random number between 1 and 9
    // echo "\n";

    $i = 0;
    while ($i < $inputlen)
    {
 
        // $inputchr[$i] = (ord($input[$i]) - $randkey);//encrpytion 
        $inputchr[$i] = (ord($input[$i]));//encrpytion      
        $i++; // For the loop to function
    }
   
    //Puts the $inputchr array togtheir in a string with the $randkey add to the end of the string
    // $encrypted = implode('.', $inputchr) . '.' . (ord($randkey)+50);
    $encrypted = implode('.', $inputchr);      
    return $encrypted;
}

function decrypt_string($input){
    $input_count = strlen($input);     
    $dec = explode(".", $input);// splits up the string to any array
    $x = count($dec);
    // $y = $x-1;// To get the key of the last bit in the array 
    $y = $x;// To get the key of the last bit in the array 
     
    // $calc = $dec[$y]-50;
    $calc = $dec[$y];
    $randkey = chr($calc);// works out the randkey number
     
    $i = 0;
    $real = "";
    while ($i < $y){         
        // $array[$i] = $dec[$i]+$randkey; // Works out the ascii characters actual numbers
        $real .= chr($dec[$i]); //The actual decryption         
        $i++;
    };
     
    $input = $real;
    return $input;
}


echo encrypt_string("917047111110@c.us");

echo "<br> \n";
exit;
// echo decrypt_string("57.49.57.57.50.48.56.50.53.50.53.49.64.99.46.117.115");
echo decrypt_string("57.49.57.57.50.48.56.50.53.50.53.49.64.99.46.117.115");
echo "<br> \n";
echo decrypt_string("57.49.57.56.49.56.56.56.50.51.56.53.64.99.46.117.115");
echo "<br> \n";
echo decrypt_string("57.49.57.52.50.53.54.54.54.51.49.52.64.99.46.117.115");
echo "<br> \n";

echo decrypt_string("57.49.57.52.50.53.54.54.54.51.49.52.64.99.46.117.115");

?>