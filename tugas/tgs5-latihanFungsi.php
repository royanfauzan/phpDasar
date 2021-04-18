<!DOCTYPE html>
<html>
<body>
        <?php
        function ftotalpembayaran($vQty,$vHarga){
                return $vQty*$vHarga;
        }
        function fDiskon($vTotPembayaran){
                if ($vTotPembayaran>=500000) {
                        $discount=$vTotPembayaran*0.1;
                } else {
                        $discount=0;
                }
                return $discount;
        }
        function fTotalAfterDiskon($vtbayar,$vdisc){
                return $vtbayar-$vdisc;
        }

        $NamaProduk="Pepito 200mg";
        $Harga = 250000;
        $Qty = 5;
        $vtotal=ftotalpembayaran($Qty,$Harga);
        $mydisk=fDiskon($vtotal);
        $after =fTotalAfterDiskon($vtotal,$mydisk);

        echo"Nama Produk : $NamaProduk <br>";
        echo"Harga Produk : $Harga <br>";
        echo"Kuantiti Produk : $Qty <br>";

        echo"Total Pembayaran : $vtotal <br>";
        echo"Diskon : $mydisk <br>";
        echo"Total Setelah Diskon : $after <br>";
        ?>    
</body>
</html>