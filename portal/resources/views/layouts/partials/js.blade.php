<script>
    var _portal = {
        currencySymbol: '{{Config::get("customer_portal.currency_symbol")}}',
        thousandsSeparator: '{{Config::get("customer_portal.thousands_separator")}}',
        decimalSeparator: '{{Config::get("customer_portal.decimal_separator")}}'
    };
</script>
<script src="https://code.jquery.com/jquery-1.12.3.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<script type="text/javascript" src="/vendor/jsvalidation/js/jsvalidation.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.1.6/Chart.bundle.min.js"></script>
<script type="text/javascript" src="/assets/js/vendor/moment/moment.min.js"></script>
<script type="text/javascript" src="/assets/js/global.js"></script>
<script>
    moment.locale('{{Config::get("app.locale")}}');
</script>
@yield('additionalJS')