<!DOCTYPE html>
<html>
    <head>
        <title>JAVA Script 101 </title>   
    </head>
    <body >
        <h1 id ="myh1">multiplication table By JavaScript Jquery</h1>
        <input type="text" id="my_num">
        <button onclick="myfunction()">submit</button>
        <button onclick="deletefunction()">delete</button>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script>     
            function myfunction(){
                let my_num = parseInt($('#my_num').val())
                for (let index = 1; index <= 12; index++) {         
                    $('#myh1')
                    .append(`<h1 class="my_gen_num">${index} x ${my_num} = ${index * my_num}</h1>`)
                }
                console.log(document.getElementById('my_num').value);
                console.log('click submit number') 
            }
            function deletefunction(){
                $('.my_gen_num').each(function(index,val){
                    console.log(val)
                    val.remove()
                })
            }
        </script>
    </body>
</html>
