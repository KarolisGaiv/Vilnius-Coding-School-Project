<?php include "header.php" ?>

<nav class="light-green">
    <div class="nav-wrapper">
        <div class="col s12">
            <a href="index.php" class="breadcrumb">Home</a>
            <a href="contacts.php" class="breadcrumb">Contacts</a>
        </div>
    </div>
</nav>

<div class="container">
    <div class="container contact">
        <h2>How to reach us?</h2>
        <p class="flow-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit quasi corrupti distinctio, dolor eligendi vel consequatur quas. Velit quibusdam ratione aliquam earum incidunt fuga, quo sed esse alias nulla officiis.</p>
    </div>

    <div class="row">
        <div class="col s12 l5">
            <div style="width: 100%; margin-top: 25px;"><iframe width="100%" height="400" src="https://maps.google.com/maps?width=100%&amp;height=300&amp;hl=en&amp;q=harare+(My%20Business%20Name)&amp;ie=UTF8&amp;t=&amp;z=6&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"><a href="https://www.maps.ie/draw-radius-circle-map/">Google Maps radius calculator</a></iframe></div><br />
        </div>

        <div class="col s12 l5 offset-l2 conatctForm">
            <form action="testpost.php" method="POST">

                <div class="input-field">
                    <i class="material-icons prefix">email</i>
                    <input type="email" id="email" name="email">
                    <label for="email">Your Email</label>
                </div>

                <div class="input-field">
                    <i class="material-icons prefix">account_box</i>
                    <input type="text" id="name" name="name">
                    <label for="name">Your Name</label>
                </div>

                <div class="input-field">
                    <i class="material-icons prefix">message</i>
                    <textarea id="message" class="materialize-textarea" name="message"></textarea>
                    <label for="message">Your message</label>
                </div>

                <div class="input-field">
                    <input type="text" id="date" class="datepicker" name="date">
                    <label for="date">Choose date when you need us</label>
                </div>

                <button class="btn waves-effect waves-light col s12 modal-trigger" type="submit" name="action" href="#modal1">Submit
                </button>

                <!-- <div class="modal blue lighten-4" id="modal1">
                    <div class="modal-content">
                        <h6>We will contact you soon!</h6>
                    </div>
                </div> -->

            </form>
        </div>
    </div>

</div>


<?php include "footer.php" ?>