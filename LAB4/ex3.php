<?php

    class Cipher
    {
        protected $tst;
        protected $sh;

        function __construct($tst, $sh)
        {
            $this->tst = $tst;
            $this->sh = $sh;
        }
    }

    class Icipher extends Cipher
    {
        function __construct($tst, $sh)
        {
            parent::__construct($tst, $sh);
        }


        function encrypt()
        {
            $tst = $this->tst;
            echo "entered plain text: $tst" . "<br>";
            $csr = strtolower($tst);
            $cc = "";
            for ($i = 0; $i < strlen($tst); $i++) {
                if (ord($csr[$i]) > (122 - $this->sh % 26)) {
                    $cc .= chr(ord($csr[$i]) - 26 + $this->sh % 26);
                } elseif (preg_match('[\d]', $csr[$i])) {
                    if (ord($csr[$i]) > 57 - ($this->sh % 10))
                        $cc .= chr(ord($csr[$i]) - 10 + $this->sh % 10);
                    else
                        $cc .= chr(ord($csr[$i]) + (int)($this->sh % 10));
                } else
                    $cc .= chr(ord($csr[$i]) + $this->sh % 26);
            }
            echo "cipher text is: $cc" . "<br>";
        }
    }

    $tst = 'middle-Outz';
    $tst = strtolower($tst);
    $sh = 2;
    $k = new Icipher($tst, $sh);
    $k->encrypt();