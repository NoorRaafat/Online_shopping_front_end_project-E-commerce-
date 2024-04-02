<style>
    .subscribe input[type=text]{
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    padding: 20px 20px;
    border-radius: 5px;
    border: 1px solid #888;
    width: 300px;
    /*background-color: gray;*/
}
#submit{
    width: 300px;
    background-color: pink;
    padding: 20px 20px;
    border-radius: 5px;
    border: 1px solid #888;
}
@media(max-width:576){
 input{
     display: block;
 }
}
#submit:hover{
    background-color: gray;
    color:white;
    cursor: pointer;
}
/*end of subscribe*/
</style>
<section class="footer-head bg-dark mt-5">
    <footer class=" container row h-20 pt-5 pb-5 text-align-center mx-auto">
        <div class=" col-xl-4 col-md-6 col-sm-12">
            <center>
                <h1 class="mb-5">Decoline</h1>
                <p class=" text-secondary">443 Flanigan Oaks Drive Alexandria, MD 22304</p>
                <p class=" text-secondary">Phone : <span>+1 234 567890</span></p>
                <p class=" text-secondary">Mail: <a style="color: rgb(241, 120, 181);" href="#">info@example.com</a></p>
            </center>
        </div> <!-- 1 -->

        <div class=" col-xl-5 col-md-6 col-sm-12">
            <center>
                <h1 class=" mb-4 pb-2">Newsletter</h1>
                <label class="sr-only" for="inlineFormInputGroupUsername2">Email</label>
                <div class="input-group mb-2 mr-sm-2">
                    <form action="/subscribe" method="POST">
                        <input type="email" name="email" placeholder="Your email" style="width: 300px; display:inline;padding: 20px 20px;border-radius: 5px;border: 1px solid #888;">
                        <input type="submit" value="Subscribe" id="submit">
                    </form>
                </div>
                <p class=" text-secondary text-justify">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, suntin culpa qui officia deserunt</p>
            </center>
        </div> <!-- 2 -->

        <div class=" col-xl-3 col-md-12 col-sm-12 pl-5 last">
            <center>
                <h1 class=" mb-5">Follow us :</h1>
                <div class=" row">
                    <div class="icon">
                        <ul>
                            <li><a href="https://www.facebook.com/manarashraf.esyed"><i class="fab fa-facebook-f text-dark"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter text-dark"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram text-dark"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin-in text-dark"></i></a></li>
                        </ul>
                    </div>
            </center>
        </div><!-- 3 -->
        </div>

        <div class="mx-auto mt-5">
            <h5 class="text-secondary">© 2020 Instyle. All rights reserved | Design by <a style="color: rgb(241, 120, 181); letter-spacing: 5px; word-spacing: 10px;" href="https://www.facebook.com/manarashraf.esyed">team for best sale </a></h5>
        </div><!-- 4 -->
    </footer>
</section>