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
                <i class="productIcon fas fa-search" data-toggle="modal" data-target="#productModal"></i>
            </div>
            <div class="productsDesc">
                {{__('products.item1')}}
            </div>
        </div>

        <div class="product col form-group">
            <div class="productsIco">
                <i class="productPlusIcon fas fa-plus"></i>
                <i class="productIcon fas fa-sticky-note" data-toggle="modal" data-target="#productModal"></i>
            </div>
            <div class="productsDesc">
                {{__('products.item2')}}
            </div>
        </div>

        <div class="product col form-group">
            <div class="productsIco">
                <i class="productPlusIcon fas fa-plus"></i>
                <i class="productIcon fas fa-ad" data-toggle="modal" data-target="#productModal"></i>
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
                <i class="productIcon fas fa-utensils" data-toggle="modal" data-target="#productModal"></i>
            </div>
            <div class="productsDesc">
                {{__('products.item4')}}
            </div>
        </div>

        <div class="col productsMainItem form-group">
            <div class="productsMainItemImage productsIco">
                <i class="productPlusIcon fas fa-plus"></i>
                <i class="productIcon fas fa-book" data-toggle="modal" data-target="#productModal"></i>
                <div class="productsDesc">
                    {{__('products.itemMain')}}
                </div>
            </div>
        </div>

        <div class="product col form-group">
            <div class="productsIco">
                <i class="productPlusIcon fas fa-plus"></i>
                <i class="productIcon fas fa-graduation-cap" data-toggle="modal" data-target="#productModal"></i>
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
                <i class="productIcon fas fa-university" data-toggle="modal" data-target="#productModal"></i>
            </div>
            <div class="productsDesc">
                {{__('products.item7')}}
            </div>
        </div>

        <div class="product col form-group">
            <div class="productsIco">
                <i class="productPlusIcon fas fa-plus"></i>
                <i class="productIcon fas fa-certificate" data-toggle="modal" data-target="#productModal"></i>
            </div>
            <div class="productsDesc">
                {{__('products.item8')}}
            </div>
        </div>

        <div class="product col form-group">
            <div class="productsIco">
                <i class="productPlusIcon fas fa-plus"></i>
                <i class="productIcon fas fa-clipboard-check" data-toggle="modal" data-target="#productModal"></i>
            </div>
            <div class="productsDesc">
                {{__('products.item9')}}
            </div>
        </div>

    </div>

    <div class="row text-center">
        <button class="productsAllBtn btn offset-sm-1 offset-md-4 mr-md-2 col-xs-6 col-sm-4 col-md-2" type="button">
            {{__('products.btnAll')}}
        </button>
        <button class="productsResetBtn btn ml-md-2 col-xs-6 col-sm-4 col-md-2" type="reset">
            {{__('products.btnReset')}}
        </button>
        <a href="#contact" class="productsLinkBtn btn mt-3 col-xs-12 col-sm-8 col-md-6" type="reset">
                {{__('products.btnLink')}}
        </a>
    </div>
</form>

<!-- Modal -->
<div class="modal fade" id="productModal" tabindex="-1" role="dialog" aria-labelledby="productModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
      <div class="modal-content">
            <div class="modal-close-button">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i class="fas fa-times"></i></span>
                </button>
            </div>
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Modal title</h5>
            </div>
            <div class="modal-body">
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime vel qui odit nulla quaerat tempore? Explicabo quo modi eum quia tempore temporibus dignissimos iusto provident, debitis recusandae. Recusandae, impedit fuga.
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn" data-dismiss="modal">{{__('products.closeModal')}}</button>
            </div>
      </div>
    </div>
  </div>