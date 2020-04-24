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
    <div class="container">
        <h2>How to reach us?</h2>
        <p class="flow-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit quasi corrupti distinctio, dolor eligendi vel consequatur quas. Velit quibusdam ratione aliquam earum incidunt fuga, quo sed esse alias nulla officiis.</p>

    </div>

    <!-- <div class="container">      //Patikrint koks skirtumas su konteineriu ir be -->
    <div class="row apacia">
        <div class="col s12 l5">
            <h5>Cia bus zemelapis</h5>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Veritatis libero excepturi iusto provident laboriosam fuga natus, impedit facere corporis, tempore et eligendi incidunt veniam ullam autem, dolores neque ratione! Minima!</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque rem quidem distinctio dicta minima illum neque, dolorum, officia ipsum facere, autem quisquam voluptate eaque doloremque. Impedit excepturi at doloremque sapiente.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi vero saepe iure aut, libero recusandae odio ipsam facilis. In et ut, nihil consectetur nemo eligendi iusto rerum nostrum alias sunt?</p>
        </div>
        <div class="col s12 l5 offset-l2">
            <form>

                <div class="row">
                    <div class="input-field col s6">
                        <i class="material-icons prefix">account_box</i>
                        <input type="text" id="fName">
                        <label for="fName">First Name</label>
                    </div>

                    <div class="input-field col s6">
                        <input id="lName" type="text">
                        <label for="lName">Last Name</label>
                    </div>
                </div>

                <div class="input-field">
                    <i class="material-icons prefix">email</i>
                    <input type="email" id="email">
                    <label for="email">Your Email</label>
                </div>

                <div class="input-field">
                    <i class="material-icons prefix">message</i>
                    <textarea id="message" class="materialize-textarea"></textarea>
                    <label for="message">Your message</label>
                </div>

                <div class="input-field">
                    <i class="material-icons prefix">date_range</i>
                    <input type="text" id="date" class="datepicker">
                    <label for="date">Choose date when you need us</label>
                </div>
            </form>
        </div>
    </div>
    <!-- </div> -->


</div>

<?php include "footer.php" ?>