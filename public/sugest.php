<?php

require_once "../vendor/autoload.php";
require_once "config.php";
require_once "service.php";
require_once "header.php";


?>


    <main>
    <section>
        <div class="container">
            <div class="row">

                <form>
                    <h1>Try it yourself</h1>
                    <input type="text" name="country" id="country" class="form-control" placeholder="Enter Country Name" />
                    <div id="countryList"></div>
                </form>
            </div>
        </div>


        </div>
    </section>

</main>

<?php require_once "footer.php" ?>