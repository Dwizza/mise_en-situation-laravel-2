<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>dashboard</h1>
    <h2 id="count"></h2>
</body>
</html>
<script>
    let h2 = document.getElementById('count');
    function count(){
        let url = 'http://127.0.0.1:8000/'
        fetch(url,{
            method: 'get',
            header
        })
        .then(response=>response->data)
        .then((data) => {
            h2.innerHTML = `
            number of user is ${data[0]}
            `
            
        })
        .catch((error)=>console.error())
    }
</script>