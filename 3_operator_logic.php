<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div style="padding: 20px;">

        <h2> Operator Pembagian </h2>
        <table>
            <tr>
                <td>
                    <label for="number1">Angka Pertama</label>
                </td>
                <td>
                    <input type="number" name="number1" id="number1">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="number2">Angka Kedua</label>
                </td>
                <td>
                    <input type="number" name="number2" id="number2">
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <button onclick="submitted()">Submit</button>
                </td>
            </tr>
            <tr>
                <td>
                    <span id="hasil">
                        Hasil :
                    </span>
                </td>
            </tr>
        </table>
        <script>
            function pembagi( doc1, doc2)
            {
                if (doc1 == 0){return 0;}
                if (doc2 == 0){return Number.MAX_VALUE;}
                
                let resultNegative = false;
                if (doc1 < 0){
                    doc1 = -doc1;
                    if (doc2 < 0){doc2 = -doc2}
                    else{resultNegative = true};
                }
                else if (doc2 < 0){
                    doc2 = -doc2;
                    resultNegative = true;
                }

                let result = 0;
                while (doc1 >= doc2)
                {
                    doc1 = doc1 - doc2;
                    result++;
                }
                if (resultNegative){result = -result};
                return result;
            }
            function submitted() {
                doc1 = document.querySelector('#number1').value;
                doc2 = document.querySelector('#number2').value;
                if (doc2>doc1) {
                    alert('Nilai Angka Kedua Terlalu besar, Pastikan Nilai Angka Kedua Lebih kecil dari Angka Pertama')
                }else{
                    hasil = pembagi(doc1,doc2);
                    console.log("hasil2:",hasil);
                    document.getElementById('hasil').innerHTML = "Hasil : " + hasil;
                }
            }
        </script>
    </div>
</body>

</html>