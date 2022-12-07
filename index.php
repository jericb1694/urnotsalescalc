<html>
<title>Not Your Sales Calculator</title>
<head>

</head>
<body>
    <form method="post">

    <table>
            <tr>
                <td> Name: : </td><td><input type="text" name="uname"></td>
            </tr>
            <tr>
                <td> Dealer: </td><td><input type="text" name="udeal"></td>
            </tr>
            <tr>
                <td> Branch: </td><td><input type="text" name="ubr"></td>
            </tr>
            <tr>
                <td> Category: </td><td><input type="text" name="ucat"></td>
            </tr>
            <tr>
                <td> Email add: </td><td><input type="text" name="umail"></td>
            </tr>
        </table>


        <table>
            <tr>
                <td> </td><td>Target</td><td>Sale Today</td>
            </tr>
            <tr>
                <td> REF: </td><td><input type="text" name="tarREF"></td><td><input type="text" name="sREF"></td>
            </tr>
            <tr>
                <td> WM: </td><td><input type="text" name="tarWM"></td><td><input type="text" name="sWM"></td>
            </tr>
            <tr>
                <td> RAC: </td><td><input type="text" name="tarRAC"></td><td><input type="text" name="sRAC"></td>
            </tr>
            <tr>
                <td> LTV/AV: </td><td><input type="text" name="tarLTV"></td><td><input type="text" name="sLTV"></td>
            </tr>
            <tr>
                <td> Benta mo since <br />day 1 of the month: </td><td><input type="text" name="all"></td></td>
            </tr>
        </table>


        <input type="submit" Value="Calculate" name="submit1" > 
        
    </form>
    <?php
    if (isset($_POST['submit1']))
    {
     ?>
        <input type="button" name="copy" Value="Copy">
    <br />
    <textarea name="show" rows="20" cols="50">
REGION 02 FPS DAILY MONITORING SELL-OUT UPDATE 👋👋👋

Name: <?php echo $_POST['uname']."\n"; ?>
Dealer: <?php echo $_POST['udeal']."\n"; ?>
Branch: <?php echo $_POST['ubr']."\n"; ?>
Category: <?php echo $_POST['ucat']."\n"; ?>
Email add: <?php echo $_POST['umail']."\n"; ?>

✔️REF
Target-<?php echo intval($_POST['tarREF']); ?> Sellout-<?php echo intval($_POST['sREF']);?> balance-<?php echo intval($_POST['tarREF'])-intval($_POST['sREF']); ?>

✔️WM 
Target:<?php echo intval($_POST['tarWM']);?> Sell-out:<?php echo intval($_POST['sWM']);?> Balance:<?php echo intval($_POST['tarWM'])-intval($_POST['sWM']); ?>

✔️RAC
Target:<?php echo intval($_POST['tarRAC']);?> Sellout:<?php echo intval($_POST['sRAC']);?> Balance:<?php echo intval($_POST['tarRAC'])-intval($_POST['sRAC']); ?>

✔️LTV/AV
Target:<?php echo intval($_POST['tarLTV']);?> Sell-out:<?php echo intval($_POST['sLTV'])?> Balance: <?php echo intval($_POST['tarLTV'])-intval($_POST['sLTV']); ?>

👉Date: <?php echo date("m/d/Y") ?>

Sell-out for today
REF: <?php echo intval($_POST['sREF'])."\n"; ?>
WM: <?php echo intval($_POST['sWM'])."\n";?>
RAC: <?php echo intval($_POST['sRAC'])."\n";?>
LTV: <?php echo intval($_POST['sLTV'])."\n";?>

Total sellout for today: <?php
echo intval($_POST['sREF']) + intval($_POST['sWM']) + intval($_POST['sRAC']) + intval($_POST['sLTV'])."\n";
?>
<?php
$date = date_create(date('Y-m-d'));
    $month= date_format($date,"F");
    $day = date_format($date,"j");
    $YEAR = date_format($date,"Y");
    ?>
👉Total Sell-out as of <?php echo $month; ?> 1-<?php echo $day; ?>, <?php echo $YEAR."\n"; ?>
Total Amount: <?php echo intval($_POST['all']); ?>

    </textarea>
     <?php
    }
    ?>
    
</body>
</html>
