<div class="container">
    <div class="form_contact">

        <div class="form_title">Contact</div>

        <form class="form_inner" action="" method="post">

            <div class="form_line">

                <div class="form_block">
                    <h4 class="form_label">Nom</h4>
                    <input class="form_input"
                           type="text"
                           name="pseudo"
                           id="pseudo"
                           placeholder= "ex: Nemo"
                           required>
                </div>

                <div class="form_block">
                    <h4 class="form_label">Email</h4>
                    <input class="form_input"
                           type="email"
                           name="email"
                           id="email"
                           placeholder="ex: passerelle@gmail.com"
                           required>
                </div>
            </div>

            <div class="form_line">
                <div class="form_block">
                    <h4 class="form_label">Mot de passe</h4>
                    <input class="form_input"
                           type="password"
                           name="password"
                           id="password"
                           placeholder="Votre mot de passe"
                           required>
                </div>


            </div>
            <button class="btn" type="submit" name="formsend" id="formsend"  >Envoyer</button>
        </form>