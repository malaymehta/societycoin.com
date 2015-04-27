<?php
//echo '<pre>'; print_r($data); exit();

$this->load->view('header');
?>
<style>
    #bill_details_form{
        background: none repeat scroll 0 0 #fff;
        padding: 22px;
        text-align: center;
        width: 45%;
        padding-top: 4px;
    }

    #bill_details_form table{
        align-self: center;

        padding: 7px 5px;
        width: 68%;
    }
    #bill_details_form th{
        text-align: center
    }
    #bill_details_form td{
        border: 1px solid #d4d4d4;
    }
    .bill_year{
        display: block;
        float: right;
        margin-right: 5px;
        margin-top: -104px;
    }
    #billing_form{width: 382px;}
    #billing_form input[type="text"]{width: 100px; margin-left:10px;}
 
</style>
<!--mid-portion-->

<div class="row-fluid mid-outer">

    <div class=" container mid-inner">

        <!--left-->

        <?php $this->load->view('left'); ?>

        <!--left//-->

        <!-- mob navigation-->

        <?php $this->load->view('mob_nav'); ?>

        <!--right-->

        <div class="right">



            <?php $this->load->view('menu'); ?>
            <div class="main-form" id="bill_details_form" style="">
                <p>Bill Details</p>
                <table width="90%" cellspacing="0" cellpadding="0" border="0" id="product-table" class="reference">
                    <tbody>
                        <tr>
                            <th class="table-header-repeat line-left minwidth-1"><span>Bill Name</span></th>
                            <th class="table-header-repeat line-left"><span>Amount</span></th>
                        </tr>
                        <?php
                        if (!empty($bill->bill_name)) {
                            $bill_name = explode(",", $bill->bill_name);
                            $bill_amount = explode(",", $bill->amount);
                            foreach ($bill_name as $key => $val) {
                                ?>
                                <tr>
                                    <td><?php echo $val; ?></td>
                                    <td><?php echo $bill_amount[$key]; ?></td>
                                </tr>
                            <?php }
                            ?>
                            <tr>
                                <td>Tax</td>
                                <td><?php echo $bill->tax; ?></td>
                            </tr>
                            <tr>
                                <td><b>Total</b></td>
                                <td><b><?php echo $bill->total; ?></b></td>
                            </tr>
                            <?php
                        } else {
                            ?>
                            <tr>
                                <td colspan="6"><b>There is no bills found</b>
                                </td>
                            </tr>
                        <?php }
                        ?>


                    </tbody>
                </table>
                <span class="bill_year">Year
                    <br><?php echo DateTime::createFromFormat('d/m/Y', $bill->sdate)->format('Y'); ?>
                    <br><?php echo DateTime::createFromFormat('d/m/Y', $bill->edate)->format('Y'); ?>
                </span>
            </div>
            <div class="main-form" id="billing_form" style=" height:auto; margin-top:15px;">
                <form id="contact" name="contact"  method="post" action="<?php echo base_url(); ?>home/plogin" >
                    <table align="center">
                        <tr><td></td></tr>
                        <tr>
                            <td width="149">BILL GENERATED ON :</td>
                            <td width="209"><b> <?php echo DateTime::createFromFormat('d/m/Y', $bill->sdate)->format('l, jS \of F, Y'); ?> </b></td>
                        </tr>
                        <tr>
                            <td width="144">PAYMENT DUE :</td>
                            <td width="209"><b> <?php echo DateTime::createFromFormat('d/m/Y', $bill->edate)->format('l, jS \of F, Y'); ?> </b></td>
                        </tr>
                        <tr>
                            <td>Default Amount [INR]:</td>
                            <td align="left"><input id="payable_amount" name="amount" type="text" value="<?php echo $bill->total; ?>"/></td>
                        </tr>
                        
                        
                        
                        <tr>
                            <td colspan="2" align="center">
                                <input name="pay_now" class="msgsend" type="submit"  style="margin-top:0px;" value="Pay Now">
                            </td>
                        </tr>
                        
                    </table>
                    

                    <label> <?php //echo $math_captcha_question; ?> </label>
                    <?php //  echo form_input('math_captcha'); ?>
                    <input type="hidden" name="societyid" value="<?php echo $bill->society_id?>">
                    <input type="hidden" name="addressid" value="<?php echo $bill->address_id?>">
                    <input type="hidden" name="society_name" value="<?php echo $bill->society_title?>">
                    <input type="hidden" name="name" value="<?php echo $bill->fname." ".$bill->lname?>">
                    <input type="hidden" name="sdate" value="<?php echo $bill->sdate?>">
                    <input type="hidden" name="edate" value="<?php echo $bill->edate?>">
                    <input type="hidden" name="email" value="<?php echo $bill->email?>">
                </form>                 



            </div>

            <div class="clearfix"></div>

        </div>

    </div>

</div>

<?php $this->load->view('footer'); ?>