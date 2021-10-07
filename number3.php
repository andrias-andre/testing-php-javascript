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
        <div class="row" id="number3a"></div>
        <div class="row" id="number3b"></div>
        <div class="row" id="number3c"></div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>
    <script>
        var angka = [20,10,100,30,15,5];
        
        angka.sort(function(a,b){ return a-b});
        document.getElementById("number3a").innerHTML = "Jawaban No 3.a : "+angka;
        
        angka.push(180);
        document.getElementById("number3b").innerHTML = "Jawaban No 3.b : "+angka;
        
        for(let i = 0; i < angka.length; i++){
            if(angka[i] == 30){
                angka.splice(i, 1);
            }
        }

        document.getElementById("number3c").innerHTML = "Jawaban No 3.c : "+angka;

        console.log(angka);

    </script>
  </body>
</html>