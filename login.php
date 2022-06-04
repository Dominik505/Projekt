<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
    
<?php

    $username = $_REQUEST['ime'];
    $password = $_REQUEST['lozinka'];

   

    if (empty($username)) {
        echo "Korisnički račun nije unesen.";
    }
    elseif (empty($password)) {
        echo "Lozinka nije unesena.";
    }
    else {

        provjera($username, $password);
    }
    

    function provjera($username, $password) {

        $xml = simplexml_load_file("korisnici.xml");

        foreach ($xml -> korisnik as $prijava) {
            $korisnicko_ime = $prijava -> korisnicko_ime;
            $korisnik_lozinka = $prijava -> lozinka;
            $korisnik_ime = $prijava -> ime;
            $korisnik_prezime = $prijava -> prezime;

            if ($korisnicko_ime == $username){
                if ($korisnik_lozinka == $password){
                    echo "Prijavljeni ste kao $korisnik_ime $korisnik_prezime";
                    return;
                }
            else{
                echo "Netočna lozinka";
                return;
                }
            }
        }

        echo "Korisnik nije registriran";
        return;
    }

?>
</body>
</html>