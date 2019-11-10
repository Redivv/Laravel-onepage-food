<header class="text-center">
    <h2>{{__('contact.title')}}</h2>
</header>

<div class="row">

    <div class="container contactInfoBox col-12">
        <header class="text-center">
                <h3>{{__('contact.info')}}</h3>
        </header>

        <div class="row text-center">

            <div class="contactInfoItem col-md-3 col-xs-12">
                <h4><i class="fas fa-user-tie"></i></h4>
                <div class="content">
                    <span>{{__('contact.infoName')}}<br></span>
                    {{__('contact.infoNameDesc')}}
                </div>
            </div>

            <div class="contactInfoItem col-md-3 col-xs-12">
                <h4><a href="tel:+48{{__('products.tel')}}"><i class="fas fa-phone-alt"></i></a></h4>
                <div class="content">
                    <a href="tel:+48{{__('products.tel')}}">{{__('products.telFormat')}}</a>
                </div>
            </div>

            <div class="contactInfoItem col-md-3 col-xs-12">
                <h4><a href="mailto:{{__('contact.infoMail')}}"><i class="fas fa-envelope"></i></a></h4>
                <div class="content">
                    <a href="mailto:{{__('contact.infoMail')}}">{{__('contact.infoMail')}}</a>
                </div>
            </div>

            <div class="contactInfoItem col-md-3 col-xs-12">
                <h4><i class="fas fa-building"></i></h4>
                <div class="content">
                    <span>{{__('contact.infoAddressMain')}}<br></span>
                    {{__('contact.infoCity')}}<br>
                    {{__('contact.infoNIP')}}
                </div>
            </div>
        </div>
    </div>

    <div class="contactOutputBox container col-sm-12 col-md-6">

        <header class="text-center">
            <h3>{{__('contact.selectedItems')}}</h3>
        </header>

        <output class="contactSelectedItems row text-center">

        </output>
    </div>

    <div class="contactFormBox container col-sm-12 col-md-6">

        <header class="text-center">
            <h3>{{__('contact.writeToUs')}}</h3>
        </header>

        <form id="contactForm" action="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="name">{{__('contact.formName')}}</label>
                <input name="name" id="name" type="text" class="form-control">
            </div>
            <div class="form-group">
                <label for="email">{{__('contact.formMail')}}</label>
                <input id="email" name="email" type="email" class="form-control">
            </div>
            <div class="form-group">
                <label for="telephone">{{__('contact.formNumber')}}</label>
                <input id="telephone" name="telephone" type="text" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="message">{{__('contact.formMessage')}}</label>
                <input id="message" name="message" type="text" class="form-control">
            </div>
            <div class="form-group">
                <label for="projectFile">{{__('contact.formFile')}}</label>
                <input id="projectFile" name="projectFile" type="file" class="form-control-file">
            </div>

            <div class="mt-2 form-group text-center">
                <button type="submit" class="btn contactBtn">
                    {{__('contact.formSend')}}
                </button>
            </div>
        </form>

    </div>

</div>