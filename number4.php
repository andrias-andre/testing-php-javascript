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
        <div class="row" id="number4a"></div>
        <div class="row mt-4" id="number4b"></div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>
    <script>

        const kalimat = "AKU SUKA MAKAN NASI PADANG";

        const arrayKalimat1 = kalimat.split(" ");
        const arrayKalimat2 = kalimat.split(" ");

        var arrayData = []
        var number    = 0;
        var length    = arrayKalimat1.length;
        var word1     = "";
        var word2     = "";
        var text1     = "";
        var text2     = "";

        for(let i=0; i < arrayKalimat1.length; i++){
              
                word1 += arrayKalimat1[i].toLowerCase()+" ";
                arrayData[i]  = word1;
                text1 += '"'+word1+'", ';
                text2 += "["+i+"] => "+word1+"<br>";
                number++;
        }

        for(let i=arrayKalimat2.length-1; i >=0; i--){
            
                word2 += arrayKalimat2[i].toLowerCase()+" ";
                arrayData[number] = word2;
                text1 += '"'+word2+'", ';
                text2 += "["+number+"] => "+word2+"<br>";
                number++;

        }

        document.getElementById("number4a").innerHTML = "Jawaban No 4a : <br>["+text1.replace(/,\s*$/, "")+"]";
        document.getElementById("number4b").innerHTML = "Jawaban No 4b : <br>Array <br> ( <br> "+text2+")";

        console.log(arrayData);

    </script>
  </body>
</html>