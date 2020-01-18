<html>
<head>
</head>
<body>
Day 1 <input type="text" id="datepicker1" name="datepicker1" /> <br/>
Day 2 <input type="text" id="datepicker2" name="datepicker2" />  <br/>
<script src='https://code.jquery.com/jquery-1.12.4.js'></script>
<script src='https://code.jquery.com/ui/1.12.1/jquery-ui.js'></script>
<script>
    var dates = $("#datepicker1, #datepicker2, #datepicker3, #datepicker4, #datepicker5, #datepicker6, #datepicker7").datepicker({
        minDate: "0",
        maxDate: "+2Y",
        defaultDate: "+1w",
        dateFormat: 'mm/dd/yy',
        numberOfMonths: 1,
        onSelect: function(date) {
            for(var i = 0; i < dates.length; ++i) {
                if(dates[i].id < this.id)
                    $(dates[i]).datepicker('option', 'maxDate', date);
                else if(dates[i].id > this.id)
                    $(dates[i]).datepicker('option', 'minDate', date);
            }
        }
    });
</script>
</body>
</html>