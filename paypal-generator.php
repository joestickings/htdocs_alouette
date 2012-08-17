<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en"> 

<head> 
    <title><?php echo strpos($_SERVER['HTTP_USER_AGENT'], 'iP')?'Alouette': 'PayPal Code Generator'; ?></title>
    
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="robots" content="noindex, nofollow">
    <?php include "common/page-head.php"; ?>
    <link href="css/base.css" rel="stylesheet" media="screen" type="text/css">
    <!--[if lt IE 9]>
        <link href="css/ie.css" rel="stylesheet" media="screen" type="text/css">
    <![endif]-->

    <style type="text/css">
        #GeneratorForm { position: relative; margin: 40px 0; border-radius: 6px; -moz-border-radius: 6px; -webkit-border-radius: 6px; o-border-radius: 6px; }
        #GeneratorForm .largeCol { float: left; width: 96%; padding: 8px 2%; margin-bottom: 4%; background: #fff; border-radius: 6px; -moz-border-radius: 6px; -webkit-border-radius: 6px; o-border-radius: 6px; }
        #GeneratorForm .colOne { float: left; width: 44%; padding: 8px 2%; margin-right: 2%; background: #fff; border-radius: 6px; -moz-border-radius: 6px; -webkit-border-radius: 6px; o-border-radius: 6px; }
        #GeneratorForm .colTwo { float: left; width: 44%; padding: 8px 2%; margin-left: 2%; background: #fff; border-radius: 6px; -moz-border-radius: 6px; -webkit-border-radius: 6px; o-border-radius: 6px; }
        #GeneratorForm label { clear: both; float: left; width: 100%; color: #828282; }
        #GeneratorForm .bigInput { font-size: 18px; width: 90%; margin-top: 4px; margin-bottom: 20px; }
        #GeneratorForm .wideInput { width: 90%; margin-top: 4px; margin-bottom: 20px;  }
        #GeneratorForm table { width: 98%; margin-top: 4px; float: left; }
        #GeneratorForm table input { width: 90%; display: inline !important;}
        #GeneratorForm table, #GeneratorForm th, #GeneratorForm td { border: none; padding: 8px 4px; }
        #GeneratorForm th { font-size: 12px; background: #e9e7e7; }
        #GeneratorForm tbody td { border-bottom: 1px dotted #e9e7e7; }
        #GeneratorForm td button { font-weight: bold; font-size: 12px; cursor: pointer; border: none; background: #e9e7e7; color: #272651; padding: 4px; border-radius: 6px; -moz-border-radius: 6px; -webkit-border-radius: 6px; o-border-radius: 6px; }
        #GeneratorForm #Generator_GenerateCode { position: absolute; bottom: 20px; right: 20px; }
        #CodeOutput { width: 100%; height: 300px;}
    </style>

    <script type="text/javascript" language="javascript">
        $(document).ready(function(){
            $("#Generator_AddOption").click(function(){
                $('#Generator_DropdownContent tbody tr:last').after('<tr><td><input type="text" class="generator_label" value="" /></td><td><input type="text" class="generator_price" value="" /></td><td><button class="remove">X</button></td></tr>');
                return false;
            });

            
            $("#Generator_DropdownContent .remove").live('click',function(){
                $(this).parents("tr").remove();
                return false;
            });

            $("#Generator_TextFieldLabel").keyup(function(){
                var thisVal = $(this).val();
                $('label[for="FieldTwo"]').text(thisVal);
                $('input[name="on1"]').val(thisVal);
            });

            $("#Generator_DropDownLabel").keyup(function(){
                var thisVal = $(this).val();
                $('label[for="FieldOne"]').text(thisVal);
                $('input[name="on0"]').val(thisVal);
            });

            $("#Generator_DropdownContent input").live('keyup',function(){

                var list = $("<select/>");
                var options = $("<div/>");

                $("#Generator_DropdownContent tbody").find("tr").each(function(i) {
                    var p = $(this).children().map(function() {
                        return $(this).find("input").val();
                    });

                    list.append('<option value="'+p[0]+'">'+p[0]+' - &pound;'+p[1]+'</option>');
                    options.append('<input type="hidden" name="option_select'+i+'" value="'+p[0]+'" /><input type="hidden" name="option_amount'+i+'" value="'+p[1]+'" />');
                });
                $("#FieldOne").html(list.html());
                $("#OptionSelectList").html(options.html());

                return false;
            });

            $("#Generator_ProductName").keyup(function(){
                $("#PayPalFormHTML input[name='item_name']").val($(this).val());
            });

            $("#Generator_GenerateCode").click(function(){
                $("#CodeOutput").val($("#PayPalFormHTML").html());
                return false;
            });

        });
    </script>
    
</head>


<body>


<?php include "common/header.php"; ?>

<div id="Content" class="clear">
    <div class="centerMessage" style="text-align: left;">

        <h1>PayPal Code Generator</h1>
        <p>This page allows you to create pay pal modules that can be pasted anywhere on the alouette site.</p>
        
        <form id="GeneratorForm" class="clear highlightContent">
            
            <div class="largeCol">
                <h3>Event or Product Name</h3>
                <label for="Generator_ProductName">This will appear on the PayPal Checkout</label><br />
                <input type="text" id="Generator_ProductName" value="Summer BBQ" class="bigInput" />
            </div>
            
            <div class="colOne">

                <h3>The Dropdown Box</h3>

                <label for="Generator_DropDownLabel">Drop Down Label</label><br />
                <input type="text" id="Generator_DropDownLabel" value="Number of tickets" class="wideInput" />

                <label>Dropdown Options</label>
                <table id="Generator_DropdownContent" cellpadding="0" cellspacing="0">
                    <thead>
                        <tr>
                            <th>
                                Label
                            </th>
                            <th colspan="2">
                                Price (Without £ or GBP)
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <input type="text" class="generator_label" value="One Ticket" />
                            </td>
                            <td>
                                <input type="text" class="generator_price" value="4.00" />
                            </td>
                            <td>
                                &nbsp;
                            </td>
                        </tr>
                        <tr><td><input type="text" class="generator_label" value="Two tickets" /></td><td><input type="text" class="generator_price" value="8.00" /></td><td><button class="remove">X</button></td></tr>
                        
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="3" align="right">
                                <button id="Generator_AddOption">Add another option</button>
                            </td>
                        </tr>
                    </tfoot>
                </table>

            </div>

            <div class="colTwo">

                    <h3>The Text Field</h3>

                    <label for="Generator_TextFieldLabel">Text Field Label</label><br />
                    <input type="text" id="Generator_TextFieldLabel" value="Main ticket holder's name" class="wideInput" />

            </div>

            <button id="Generator_GenerateCode" class="button">Generate PayPal Code</button>
        
        </form>


        <h2>Live Preview</h2>
        <div id="PayPalFormHTML">
            <form action="https://www.paypal.com/cgi-bin/webscr" method="post" class="twoColForm contentFeature clear"> 
     
                 <input type="hidden" name="business" value="accounts@alouette.org.uk" /> 
                 <input type="hidden" name="return" value="http://alouette.org.uk" />
                 <input type="hidden" name="undefined_quantity" value="1" />
                 <input type="hidden" name="currency_code" value="GBP" />
                 <input type="hidden" name="cmd" value="_xclick" /> 
                 
                 <!-- Specify details about the item that buyers will purchase. --> 
                 <input type="hidden" name="item_name" value="Summer BBQ" /> 
                 
                 <div class="formColsContainer clear">
                    <div class="twoCol">
                        <input type="hidden" value="Number of tickets" name="on0" />
                        <label for="FieldOne">Number of tickets</label>
                        <select id="FieldOne" name="os0">
                            <option value="One Ticket" selected="selected">One Ticket - £4.00</option>
                            <option value="Two Tickets">Two Tickets - £8.00</option>
                        </select>
                    </div>

                    <div class="twoCol">
                        <input type="hidden" value="Main ticket holder's name" name="on1" />
                        <label for="FieldTwo">Main ticket holder's name</label>
                        <input type="text" name="os1" id="FieldTwo" />
                    </div>
                </div> 
                 
                 <!-- Specify the price that PayPal uses for each option. --> 
                 <input type="hidden" name="option_index" value="0" /> 
                 
                 <div id="OptionSelectList">
                     <input type="hidden" name="option_select0" value="One Ticket" /> 
                     <input type="hidden" name="option_amount0" value="4.00" /> 
                     <input type="hidden" name="option_select1" value="Two Tickets" /> 
                     <input type="hidden" name="option_amount1" value="8.00" />
                 </div> 
                 
                 <!-- Display the payment button. --> 
                 <input type="submit" class="button" name="submit" value="Checkout" />
                 <img src="images/misc/payment_options.gif" width="233" height="17" alt="Payment options" class="paymentOptions" />
            </form>
        </div>



        <h2>Code</h2>
        <textarea id="CodeOutput"></textarea>

    </div>

    
</div>


<?php include "common/footer.php"; ?>


</body> 


</html>

