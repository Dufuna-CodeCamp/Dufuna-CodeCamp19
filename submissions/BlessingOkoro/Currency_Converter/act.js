
function convertCurrency(){
    var intl = document.getElementById("intl").value;
    var local = document.getElementById("local").value;
    var xmlhttp = new XMLHttpRequest();
    var url = "https://api.exchangeratesapi.io/latest?symbols=" + intl  + "," + local;
    xmlhttp.open("GET", url, true);
    xmlhttp.send();
    xmlhttp.onreadystatechange = function(){
        if(xmlhttp.readyState == 4 && xmlhttp.status == 200)
        {
            var result = xmlhttp.responseText;
            var jsResult = JSON.parse(result);
            var oneUnit = jsResult.rates[local]/jsResult.rates[intl];
            var amt = document.getElementById("intlCurrency").value;
            document.getElementById("localCurrency").value = (oneUnit*amt).toFixed(2);
        }
    }

}