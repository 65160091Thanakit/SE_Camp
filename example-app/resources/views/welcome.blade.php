<!DOCTYPE html>
<html>
    <head>
        <title>JAVA Script 101 </title>
        
    </head>
    <body >
        <h1 id ="myh1">JAVAScript</h1>
        <button onclick="alert('bug hum noye')">Click me ummmm</button>
        <input type="text" id="my_num">
        <button onclick="myfunction()">submit</button>
        <button onclick="deletefunction()">delete</button>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script>
            $(document).ready(function(){
                console.log("Hum - document.ready")
                console.log($('#myh1').text())
                console.log($('#my_num').val())
                $('#myh1').text("JavaScript101")
                $('#my_num').val(10)
            });
            function myfunction(){
                let my_num = parseInt($('#my_num').val())
                for (let index = 0; index <= my_num; index++) {
                    $('#myh1').append(`<h1 class="my_gen_num">${index}</h1>`)

                }
                console.log(document.getElementById('my_num').value);
                console.log('click submit number') 

            }

            function myfunction2(){
                $
            }
            function deletefunction(){
                $('.my_gen_num').each(function(index,val){
                    console.log(val)
                    val.remove()
                })
            }
            let maval;
            maval = '10';
            maval2 ='2';
            console.log(maval,maval2);
            maval3=parseInt(maval)+parseInt(maval2);
            console.log(maval3);
            maval3=maval-maval2;
            console.log(maval3);
            maval3=maval*maval2;
            console.log(maval3);
            maval3=maval/maval2;
            console.log(maval3);


            let maval4 = [1,2,3];
            maval4[3]=5;
            console.log(maval4);
            maval4[4]=[9,8,5];
            console.log(maval4);

            for (let index = 0; index < maval4.length; index++) {
                console.log(maval4[index]);
                
            }

            maval4.forEach(function (value,i) {
                console.log("in for each", value );
            });

            console.log(document.getElementById('myh1').innerHTML);
        </script>
    </body>
</html>
