<!doctype html>
<html lang="en">
  <head>
  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
    <title>Test - PT OPINIA MEDIA TEKNOLOGI</title>
  </head>
  <body>
    <div class="container mt-4 mb-4">
        <div class="row mt-4" id="number5a"></div>
        <div class="row mt-4" id="number5b"></div>
        <div class="row mt-4" id="number5c"></div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>
    <script>
    var buah = [
        {nama:"JERUK", harga:5000, rasa:"ASAM"},
        {nama:"MANGGA", harga:20000, rasa:"MANIS"},
        {nama:"APEL", harga:5000, rasa:"MANIS"},
        {nama:"DURIAN", harga:50000, rasa:"MANIS"},
        {nama:"DUKU", harga:10000, rasa:"ASAM"},
        {nama:"NANAS", harga:5000, rasa:"ASAM"},
    ]
    
    var tambahBuah = { }; 
    tambahBuah["nama"]  = "PISANG";
    tambahBuah["harga"] = 5000;
    tambahBuah["rasa"]  = "MANIS";

    buah.push(tambahBuah);

    buah.sort(compare);

    var text1 = "";
    var text2 = "";
    var text3 = "";


    for(i=0; i<buah.length; i++){
    
        text1 += "Nama : "+buah[i]['nama']+", Harga : "+buah[i]['harga']+", Rasa : "+buah[i]['rasa']+"<br>";

        if(buah[i]['nama'].toUpperCase().includes('K')){
            text2 += "Nama : "+buah[i]['nama']+", Harga : "+buah[i]['harga']+", Rasa : "+buah[i]['rasa']+"<br>";
        }

        if(buah[i]['harga'] < 10000 && buah[i]['rasa'].toUpperCase() == 'MANIS'){
            text3 += "Nama : "+buah[i]['nama']+", Harga : "+buah[i]['harga']+", Rasa : "+buah[i]['rasa']+"<br>";
        }

    }


    function compare(a, b) {
      const namaA = a.nama.toUpperCase();
      const namaB = b.nama.toUpperCase();
      let comparison = 0;
      if (namaA > namaB) {
      comparison = -1;
      } else if (namaA < namaB) {
      comparison = 1;
      }
      return comparison;
    }

    document.getElementById("number5a").innerHTML = "Jawaban No 5.a : <br>"+text1;
    document.getElementById("number5b").innerHTML = "Jawaban No 5.b : <br>"+text2;
    document.getElementById("number5c").innerHTML = "Jawaban No 5.c : <br>"+text3;

    console.log(buah);

    </script>
  </body>
</html>