<section>
    <div class="fabss" onclick="toggleBtn()">
        <div class="action">
            <i class="fa fa-phone-square" id="add"></i>

            <i class="fas fa-times" id="remove" style="display: none"></i>
        </div>

        <div class="btnss" style="display: none;">
            <!-- <a href="#" target="_blank" class="btnn" style="background: #3b5999"><i class="fab fa-facebook-f"></i></a> -->
            <!-- <a href="#" target="_blank" class="btnn" style="background: #e4405f"><i class="fab fa-youtube"></i></a> -->
            <!-- <a href="#" target="_blank" class="btnn" style="background: #000000"><i class="fa-brands fa-tiktok"></i></a> -->
            <a href="https://wa.me/62817779047?text=Hallo... Hallo?"  target="_blank" class="btnn" style="background: #25D366"><i class="fab fa-whatsapp"></i></a>
            <a href="https://www.instagram.com/tuliplogistikparung?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" target="_blank" class="btnn" style="background:#e4405f"><i class="fab fa-instagram"></i></a>
        </div>
    </div>
</section>

<script>
    function toggleBtn() {
        const Btnss = document.querySelector(".btnss");
        const add = document.getElementById("add");
        const remove = document.getElementById("remove");
        const btnn = document.querySelector(".btnss").querySelectorAll("a");
        Btnss.classList.toggle("open");
        if (Btnss.classList.contains("open")) {
            remove.style.display = "block";
            add.style.display = "none";
            Btnss.style.display = "flex"; // Show the .btns element
            btnn.forEach((e, i) => {
                setTimeout(() => {
                    bottom = 40 * i;
                    e.style.bottom = bottom + "px";
                    console.log(e);
                }, 100 * i);
            });
        } else {
            add.style.display = "block";
            remove.style.display = "none";
            btnn.forEach((e, i) => {
                e.style.bottom = "0px";
            });
            Btnss.style.display = "none"; // Hide the .btns element
        }
    }
</script>
<?php /**PATH /Users/donnyimmanda/Documents/laravel/tuliplparung/resources/views/layouts/popup.blade.php ENDPATH**/ ?>