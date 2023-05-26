<!DOCTYPE html>
<html>
<head>
    <title>Kullanıcı Giriş ve Kayıt Paneli</title>
    <style>
        .container {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .container h2 {
            text-align: center;
        }

        .container input[type="text"],
        .container input[type="pass"],
        .container input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 3px;
        }

        .container input[type="submit"] {
            background-color: #4CAF50;
            color: #fff;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Kullanıcı Giriş</h2>
        <form>
            <input type="text" placeholder="Kullanıcı adı" id="user">
            <input type="pass" placeholder="Parola" id="pass">
            <input type="submit" value="Giriş Yap" id="loginButton">
        </form>
    </div>

    <script>
        // Formu gönderme olayını dinleyin
        document.getElementById("loginButton").addEventListener("click", function (event) {
            event.preventDefault(); // Sayfanın yeniden yüklenmesini engelle

            // Kullanıcı adı ve parolayı al
            var user = document.getElementById("user").value;
            var pass = document.getElementById("pass").value;

            // Kullanıcı adı ve parola doğrulaması yap
            if (user === "muhammetbzkrt16@gmail.com" && pass === "123456789") {
                alert("Giriş başarılı!");
                
            } else {
                alert("Geçersiz kullanıcı adı veya parola!");
            }
        });
    </script>
</body>
</html>
