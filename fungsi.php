<?php
    //fungsi yang tidak mengembalikan nilaii
        function menampilkan(){
            echo "hello world";
        }

    //fungsi yang  mengembalikan nilaii
        function angka ($no){
            $hasil = $no + $no;
            return $hasil;
        }
            echo angka (8);

        ?>