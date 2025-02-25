<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.bundle.min.js"
        integrity="sha512-7Pi/otdlbbCR+LnW+F7PwFcSDJOuUJB3OxtEHbg4vSMvzvJjde4Po1v4BR9Gdc9aXNUNFVUY+SK51wWT8WF0Gg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>


    <script>
        function createPetals() {
            // 設定生成的櫻花瓣數量
            const petalCount = 30;

            for (let i = 0; i < petalCount; i++) {
                const petal = document.createElement('div');
                petal.classList.add('petal');
                petal.style.left = `${Math.random() * 100}vw`;
                petal.style.animationDuration = `${Math.random() * 5 + 5}s`;

                document.body.appendChild(petal);

                setTimeout(() => {
                    petal.remove();
                }, (Math.random() * 5 + 5) * 3000);
            }
        }
        setInterval(createPetals, 15000);

        function clickSubmit() {
            let chk = confirm('確定要提交嗎?');
        }

        function login() {
            $.get("./login_form.php", function (html) {
                $("#modal").html(html);
                let LoginModal = new bootstrap.Modal('#LoginModal');
                LoginModal.show();
            })
        }

    </script>



</body>

</html>