<?php
    include('include/header.php');
?>

<div class="container tab_titl">
    <div class="mt-3">
        <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
            <input type="hidden" name="cmd" value="_s-xclick">
            <input type="hidden" name="hosted_button_id" value="X7Y2HQ8UCDBBQ">
            <table>
            <tr><td><input type="hidden" name="on0" value="Absence Fee with Late Fee"><h4 class="mt-3 mb-2">Absence Fee with Late Fee</h4></td></tr><tr><td><select name="os0"  class="form-control">
            <option value="Child [50 + 25 + 1.99]">Child [50 + 25 + 1.99] $76.99 USD</option>
            <option value="Adult [60 + 25 + 2.22]">Adult [60 + 25 + 2.22] $87.22 USD</option>
            </select> </td></tr>
            </table>
            <input type="hidden" name="currency_code" value="USD">
            <input type="image" src="http://pjim.org/images/Pay.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
            <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
            </form>
            
            <h4 class="mt-3 mb-2">Pay for SLCM Shibir - July</h4>
            <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
            <input type="hidden" name="cmd" value="_s-xclick">
            <input type="hidden" name="hosted_button_id" value="TRCYTLUZB82LJ">
            <table>
            <tr><td><input type="hidden" name="on0" value="Shibir packages">Shibir packages</td></tr><tr><td><select name="os0"  class="form-control">
            <option value="Registration - First student">Registration - First student $306.59 USD</option>
            <option value="Registration - Second student">Registration - Second student $153.55 USD</option>
            <option value="Registration - Third or more">Registration - Third or more $51.00 USD</option>
            </select> </td></tr>
            </table>
            <input type="hidden" name="currency_code" value="USD">
            <input type="image" src="http://pjim.org/images/ShibirPayment.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
            <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
        </form>
        <h4 class="mt-3 mb-2">Pay for Nav-Kalpa or Pratham-Kalpa Shibir</h4>
        <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
        <input type="hidden" name="cmd" value="_s-xclick">
        <input type="hidden" name="hosted_button_id" value="UD52QV4DPBENE">
        <input type="image" src="http://pjim.org/images/registernow.jpg" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
        <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
        </form>
    </div>
</div>
<?php
    include('include/footer.php');
?>