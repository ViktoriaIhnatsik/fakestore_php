<?php
class ShoppingCartView
{
  public function viewHeader($title)
  {
    include_once("views/include/header.php");
  }

  public function viewFooter()
  {
    include_once("views/include/footer.php");
  }


  public function viewDetailPage($product)
  {
    $this->viewDetailProduct($product);
  }

  public function viewDetailProduct($product)
  {
    $html = <<<HTML

    <div class="col-lg-9">
        <div class="card mt-4">
            <img class="card-img-top img-fluid" src="images/$product[image]" alt="$product[title]" />
            <div class="card-body">
                <h3 class="card-title">$product[title]</h3>
                <h4>$product[price] kr</h4>
                <p class="card-text">$product[description]</p>
                <form action="#" method="post">
                    <input type="number" name="quantity" value="1" min="1" max="10" placeholder="Quantity" required>
                    <input type="hidden" name="product_id" value="$product[product_id]">
                    <a id="cart_link" href="#" class="btn btn-secondary mt-3"><i class="fas fa-shopping-cart"></i> Lägg i varukorgen</a>
                </form>
            </div>
        </div>
    </div>

    HTML;

    echo $html;
  }
}


