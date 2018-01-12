<?php
/**
 * @todo give the possibility to store more of one address.
 */


require_once($baseController->website_path . "/template/_header.php");
?>

    <main class="page-edit">
        <section class="flex-container-center fit-height-section">
            <div class="container flex-item-center">
                <div class="col-12 cont-edit-form">
                    <h1 class="display-4">Edit Address</h1>
                    <p>Write the address that permit to our delivery man to arrive to your class.</p>
                    <form class="form-edit-login" method="post" action="page.php?name=edit-login"
                          enctype="multipart/form-data"
                          name="edit-login-form">
                        <!-- fake fields are a workaround for chrome autofill getting the wrong fields -->
                        <input style="display: none;" class="form-control" name="firstName">
                        <input style="display: none;" class="form-control" name="secondName">
                        <input style="display: none;" type="password" class="form-control" placeholder="Password">

                        <div class="form-group row">
                            <label for="department" class="col-sm-3 col-form-label">Department</label>
                            <div class="col-sm-9">
                                <input name="department" class="form-control" id="firstName" placeholder="Ing. Informatica / Civile / Chimica ... "
                                       value="<?php  ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="class" class="col-sm-3 col-form-label">Class</label>
                            <div class="col-sm-9">
                                <input name="class" class="form-control" id="secondName" placeholder="Aula Magna / A1 / C ..."
                                       value="<?php  ?>">
                            </div>
                        </div>

                        <button class="btn btn-primary" name="edit-address" type="submit">Update</button>
                    </form>
                </div>
            </div>
        </section>
    </main>



<?php

require_once($baseController->website_path . "/template/_footer.php");
