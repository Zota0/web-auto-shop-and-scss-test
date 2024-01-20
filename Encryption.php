
<?php
    $CharacterMap = [
        'a' => 'Z',
        'ą' => 'ź',
        'ę' => 'ż',
        'ł' => 'ł',
        'ń' => 'ń',
        'ó' => 'u',
        'ś' => 'ś',
        'ż' => 'ż',
        'ź' => 'ź',
        'ć' => 'ć',
        'b' => '#',
        'c' => '$',
        'd' => '^',
        'e' => '*',
        'f' => '&',
        'g' => '(',
        'h' => ')',
        'i' => '+',
        'j' => 'l',
        'k' => '{',
        'l' => '}',
        'm' => '|',
        'n' => ':',
        'o' => '"',
        'p' => 'q',
        'q' => '<',
        'r' => '>',
        's' => '?',
        't' => ',',
        'u' => '.',
        'v' => '`',
        'w' => '+',
        'x' => ';',
        'y' => '>',
        'z' => '<',
        '%' => 'A',
        '/' => 'B',
        '.' => 'C',
        ',' => 'D',
        '+' => '2',
        '=' => '4',
        '{' => '3',
        '}' => '1',
        '|' => '*',
        '~' => '0',
        ':' => '5',
        '<' => '6',
        '>' => '7',
        '?' => '8',
        1 => '9',
        2 => ' ',
        3 => "`",
        4 => '-',
        5 => ")",
        6 => "(",
        7 => "&",
        8 => "'",
        9 => "/",
        0 => "_"
    ];

    function Encrypt($EncryptKey, $Input) {

        $InputArray = str_split($Input);
        $DecryptedKey = str_split($EncryptKey);

        switch($DecryptedKey[0]) {
            case "x":
                asort($InputArray);
                break;
            case "y":
                arsort($InputArray);
                break;
        }
        
        $EncryptedString = " ";

        foreach ($InputArray as $index => $InputChar) {
            
            if(is_numeric($DecryptedKey[1])) {

                if(is_numeric($InputChar)) {

                    $ICC = $CharacterMap[$InputChar];
                    $EncryptedString .= $ICC;

                } else {

                    $IC = $InputChar.CASE_LOWER;
                    $ICC = $CharacterMap[$IC];
                    $EncryptedString .= $ICC;

                }

            } else {

                $EncryptedString.= $InputChar;

            }
        }
        echo $EncryptedString;
        return $EncryptedString;
    }

    function Decrypt($EnryptKey, $Input) {

    }

?>