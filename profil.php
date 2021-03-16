<?php
session_start();
?>
<!doctype html>
<html lang="en">



    <main role="main">


        <div class="container">

            <div class="row">
                <div class="col-md-12 mt-2">
                    <h2>Vos Informations :</h2>

                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <form class="mt-5" action="#" method="post">
                       
                       
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Email :</label>
                            <div class="col-sm-10">
                                <?php 
                                echo $_SESSION['email'];
                                ?>
                            </div>
                       
                    </form>
                </div>
            </div>
        </div>



    </main>

    <footer class="text-muted">
        <div class="container">
            <a href="?disconnect" id="menu3"><p id="textmenu">Déconnexion</p></a>
        </div>
    </footer>
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script>
        window.jQuery || document.write('<script src="/docs/4.5/assets/js/vendor/jquery.slim.min.js"><\/script>')

    </script>
    <script src="/docs/4.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>
