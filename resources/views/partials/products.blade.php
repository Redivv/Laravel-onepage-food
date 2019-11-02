<header class="text-center">
    <h2>{{__('products.title')}}</h2>
</header>

<div class="productsSubTitle mb-4">
    <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis accusamus fugit laboriosam ad incidunt dolorum dolorem soluta perferendis.</h3>
</div>

<form class="container" id="productsForm">

    <div class="form-row text-center">

        <div class="product col form-group">
            <div class="productsIco">
                <i class="productPlusIcon fas fa-plus"></i>
                <i class="productIcon fas fa-search"></i>
            </div>
            <div class="productsDesc">
                {{__('products.item1')}}
            </div>
        </div>

        <div class="product col form-group">
            <div class="productsIco">
                <i class="productPlusIcon fas fa-plus"></i>
                <i class="productIcon fas fa-sticky-note"></i>
            </div>
            <div class="productsDesc">
                {{__('products.item2')}}
            </div>
        </div>

        <div class="product col form-group">
            <div class="productsIco">
                <i class="productPlusIcon fas fa-plus"></i>
                <i class="productIcon fas fa-ad"></i>
            </div>
            <div class="productsDesc">
                {{__('products.item3')}}
            </div>
        </div>

    </div>

    <div class="form-row text-center">

        <div class="product col form-group">
            <div class="productsIco">
                <i class="productPlusIcon fas fa-plus"></i>
                <i class="productIcon fas fa-utensils"></i>
            </div>
            <div class="productsDesc">
                {{__('products.item4')}}
            </div>
        </div>

        <div class="col productsMainItem form-group">
            <div class="productsMainItemImage productsIco">
                <i class="productPlusIcon fas fa-plus"></i>
                <i class="productIcon fas fa-book"></i>
                <div class="productsDesc">
                    {{__('products.itemMain')}}
                </div>
            </div>
        </div>

        <div class="product col form-group">
            <div class="productsIco">
                <i class="productPlusIcon fas fa-plus"></i>
                <i class="productIcon fas fa-graduation-cap"></i>
            </div>
            <div class="productsDesc">
                {{__('products.item6')}}
            </div>
        </div>
        
    </div>

    <div class="form-row text-center">

        <div class="product col form-group">
            <div class="productsIco">
                <i class="productPlusIcon fas fa-plus"></i>
                <i class="productIcon fas fa-university"></i>
            </div>
            <div class="productsDesc">
                {{__('products.item7')}}
            </div>
        </div>

        <div class="product col form-group">
            <div class="productsIco">
                <i class="productPlusIcon fas fa-plus"></i>
                <i class="productIcon fas fa-certificate"></i>
            </div>
            <div class="productsDesc">
                {{__('products.item8')}}
            </div>
        </div>

        <div class="product col form-group">
            <div class="productsIco">
                <i class="productPlusIcon fas fa-plus"></i>
                <i class="productIcon fas fa-clipboard-check"></i>
            </div>
            <div class="productsDesc">
                {{__('products.item9')}}
            </div>
        </div>

    </div>

    <div class="row text-center">
        <button class="productsAllBtn btn offset-sm-1 offset-md-4 mr-md-2 col-xs-6 col-sm-5 col-md-2" type="button">
            {{__('products.btnAll')}}
        </button>
        <button class="productsResetBtn btn ml-md-2 col-xs-6 col-sm-5 col-md-2" type="reset">
            {{__('products.btnReset')}}
        </button>
    </div>
</form>