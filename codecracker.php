<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CodeCracker</title>
</head>
<body>
    

<script>
    class CodeCracker{
        
        decryption(decryptStr){
            let encryptStr = [];
            let cypher = {
                'a':'£',
                'b':'*',
                'c':'%',
                'd':'&',
                'e':'>',
                'f':'<',
                'g':'!',
                'h':')',
                'i':'"',
                'j':'(',
                'k':'@',
                'l':'a',
                'm':'b',
                'n':'c',
                'o':'d',
                'p':'e',
                'q':'f',
                'r':'g',
                's':'h',
                't':'i',
                'u':'j',
                'v':'k',
                'w':'l',
                'x':'m',
                'y':'n',
                'z':'o'
            };
            for (let index = 0; index < decryptStr.length; index++) {
                let val = decryptStr[index];
                for (const key in cypher) {
                    if(val == `${cypher[key]}`){
                        encryptStr.push(`${key}`)
                    }
                }
            }
            return encryptStr.join("");
        }


        encryption(encryptStr){
            let decryptStr = [];
            let cypher = {
                'a':'£',
                'b':'*',
                'c':'%',
                'd':'&',
                'e':'>',
                'f':'<',
                'g':'!',
                'h':')',
                'i':'"',
                'j':'(',
                'k':'@',
                'l':'a',
                'm':'b',
                'n':'c',
                'o':'d',
                'p':'e',
                'q':'f',
                'r':'g',
                's':'h',
                't':'i',
                'u':'j',
                'v':'k',
                'w':'l',
                'x':'m',
                'y':'n',
                'z':'o'
            };
            for (let index = 0; index < encryptStr.length; index++) {
                let val = encryptStr[index];
                // const keys = Object.keys(cypher);
                Object.keys(cypher).forEach((key, i) => {
                    // if(val == `${key}`){
                    //     decryptStr.push(`${cypher[key]}`)
                    // }
                    val == `${key}` ? decryptStr.push(`${cypher[key]}`) : '';
                });
            }
            return decryptStr.join("");
        }

    }

    let taskTwo = new CodeCracker;
    console.log(taskTwo.decryption(`!d&hi"b>`));
    console.log(taskTwo.encryption("godstime"));
</script>
</body>
</html>