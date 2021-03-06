<!DOCTYPE html>
<html>
    <head>
        <title>SocietyCoin.com</title>
        <style>

            @media print {

                table, th, td {
                    border: 1px solid black;
                }

                body{  background: #fff;
                       font-family:Arial, Helvetica, sans-serif;
                       font-size: 12px;
                       line-height: 1.4;
                       margin: 0 auto;
                       padding: 0;
                       text-transform: capitalize;
                }


                .reference {color: #333 !important; margin-left:20px;   font-size: 12px; }
                table.reference, table.tecspec {border-collapse:collapse}
                th{ background-color: #575757 !important;    border: 1px solid #373737;    color: #ffffff;    padding: 3px;    text-align: center;	height:33px;   }

                table.reference td  { border: 1px solid #d4d4d4;    padding: 7px 5px; }
                table.reference tr:nth-child(2n+1){background-color:#e9eef2}

                table.reference th span {margin:0 !important; padding:0 !important;}

            }

            @media screen {
                table, th, td {
                    border: 1px solid black;
                }

                body{  background: #fff;
                       font-family:Arial, Helvetica, sans-serif;
                       font-size: 12px;
                       line-height: 1.4;
                       margin: 0 auto;
                       padding: 0;
                       text-transform: capitalize;
                }


                .reference {color: #333 !important; margin-left:20px;   font-size: 12px; }
                table.reference, table.tecspec {border-collapse:collapse}
                th{ background-color: #575757 !important;    border: 1px solid #373737;    color: #ffffff;    padding: 3px;    text-align: center;	height:33px;   }

                table.reference td  { border: 1px solid #d4d4d4;    padding: 7px 5px; }
                table.reference tr:nth-child(2n+1){background-color:#e9eef2}

                table.reference th span {margin:0 !important; padding:0 !important;}


            }
        </style>
        <script>
        // Popup window code
            function newPopup(url) {
                popupWindow = window.open(
                        url, 'popUpWindow', 'height=700,width=600,left=100,top=10,resizable=yes,scrollbars=yes,toolbar=yes,menubar=no,location=no,directories=no,status=yes')
            }
        </script>
    </head>
    <body  onLoad="window.print();">
        <div id="logo" style="margin-left:25px;"><img src="<?php echo base_url(); ?>front/images/society-coin-logo-white.png" alt="society coin logo"></div>

        <table border="1" class="reference">

            <tr>
                <th>Society Name</th>    <th>Address</th>	 <th>Name</th>	  <th>Mobile</th> <th>Amount</th>    <th>Date</th>
                <th>Status</th>  <th>Txnid</th> <th>Mode</th><th>Description</th>
            </tr>

            <?php
            if (count($records) > 0) {

                foreach ($records AS $r) {
                    ?>
                    <tr> 
                        <td><?php echo (isset($r->societyname)) ? $r->societyname : ""; ?></td>
                        <td><?php echo (isset($r->proaddress)) ? $r->proaddress : ""; ?></td>
                        <td><?php echo (isset($r->firstname)) ? $r->firstname : ""; ?></td>
                        <td><?php echo (isset($r->phone)) ? $r->phone : ""; ?></td>
                        <td><?php echo (isset($r->amount)) ? $r->amount : ""; ?></td>
                        <td><?php echo (isset($r->addedon)) ? $r->addedon : ""; ?></td>
                        <td><?php echo (isset($r->status)) ? $r->status : ""; ?></td>
                        <td><?php echo (isset($r->txnid)) ? $r->txnid : ""; ?></td>
                        <td><?php echo (isset($r->mode)) ? $r->mode : ""; ?></td>
                        <td><?php echo (isset($r->custom_note)) ? $r->custom_note : ""; ?></td>

                    </tr>
    <?php }
} ?>
        </table>
    </body>
</html>