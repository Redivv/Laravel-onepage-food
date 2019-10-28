<header class="text-center">
    <h2>{{__('contact.title')}}</h2>
</header>

<div class="row">

    <div class="contactOutputBox container col-sm-12 col-md-6">

        <header class="text-center">
            <h3>Wybrane Elementy Oferty</h3>
        </header>

        <output class="contactSelectedItems row text-center">

        </output>
    </div>

    <div class="contactFormBox container col-sm-12 col-md-6">

        <header class="text-center">
            <h3>Napisz do Nas</h3>
        </header>

        <form id="contactForm" action="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="name">Imię</label>
                <input name="name" id="name" type="text" class="form-control">
            </div>
            <div class="form-group">
                <label for="email">E-Mail</label>
                <input id="email" name="email" type="email" class="form-control">
            </div>
            <div class="form-group">
                <label for="telephone">Numer Telefonu</label>
                <input id="telephone" name="telephone" type="text" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="message">Wiadomość</label>
                <input id="message" name="message" type="text" class="form-control">
            </div>
            <div class="form-group">
                <label for="projectFile">Masz Gotowy Projekt? Wyślij go od razu</label>
                <input id="projectFile" name="projectFile" type="file" class="form-control-file">
            </div>

            <div class="mt-2 form-group text-center">
                <button type="submit" class="btn contactBtn">
                    Wyślij
                </button>
            </div>
        </form>

    </div>

</div>