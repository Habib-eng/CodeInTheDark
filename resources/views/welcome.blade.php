@include('header')
    <body>
    <div class="container" style = "padding:10%;text-align:center;background-color:#161925">
        <form methode = "post" action = "/submitted">
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Write your code</label>
                <textarea class="form-control" name='code' id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>  
            <div class="col-12">
                <button class="btn btn-primary" type="submit">Submit form</button>
            </div>
        </form>
        <div style ="height = 50px" id="tsparticles"></div>
    </div>
    </body>
    <script>
        // XXXX designe la cookie qui contient le code du poste
        // Round_Duration en millisecondes
        const round_duration = 3000;
        function getCookie (name) {
            // array of all cookies with this format name = value 
            var cookies_array  = document.cookie.split(";");
            for (var i=0; i < cookies_array.length;i++){
                if ((cookies_array[i].split("=")[0]).trim() == name ) {
                    return (cookies_array[i].split("=")[1]).trim();
                    break;
                }; 
            };
        };
        // set the value of cookie
        function setCookie(name,new_value){
            document.cookie = name + "=" + new_value;
        }
        // get all cookies
        function getCookiesName() {
            var cookies_array = [];
            var array01 = document.cookie.split(";");
            for (var i=0; i<array01.length ;i++){
                cookies_array.push(array01[i].split("=")[0].trim());
            }
            return cookies_array;
        }
        $(document).ready(function () {
            if (!getCookiesName().includes("XXXX")) {
                var msg = prompt("Put The Code");
                setCookie("XXXX",msg);
            };
            $("#exampleFormControlTextarea1").keypress(function(){
                setTimeout(function() {window.location.href='over'},round_duration);
            })
        });
    </script>
</html>
