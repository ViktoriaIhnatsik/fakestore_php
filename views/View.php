<?php

class View
{
    public function viewHeader($title)
    {
        include_once("views/include/header.php");
    }

    public function viewFooter()
    {
        include_once("views/include/footer.php");
    }

    public function viewAboutPage()
    {
        include_once("views/include/about.php");
    }

    public function viewAllProducts($products)
    {
        foreach ($products as $product) {
            $this->viewOneProduct($product);
            //echo "<pre>"; print_r($products); - test
        }
    }

    public function viewOneProduct($product)
    {
        $html = <<<HTML
            <div class="col-lg-4 col-md-6 mb-4">
                <a id="link" href="shoppingcart?id=$product[product_id]">
                    <div class="card h-100">
                        <img class="card-img-top" src="images/$product[image]" alt="$product[title]" />
                        <div class="card-body">
                            <h4 class="card-title">$product[title]</h4>
                            <h5>$product[price] kr</h5>
                            <!-- <p class="card-text">$product[description]</p> -->
                        </div>
                        <div class="card-footer"><small class="text-muted">★ ★ ★ ★ ☆</small></div>
                    </div>
                </a>
            </div>

        HTML;

        echo $html;
    }

    /* public function viewConfirmMessage($customer, $lastInsertId)
    {
        $this->printMessage(
            "<h4>Tack $customer[name]</h4>
            <p>Vi kommer att skicka producten.</p>
            <p>Ditt ordernummer är $lastInsertId </p>
            </div> <!-- col  avslutar Beställningsformulär -->
            ",
            "success"
        );
    }
    public function viewErrorMessage($customer_id)
    {
        $this->printMessage(
            "<h4>Kundnummer $customer_id finns ej i vårt kundregister!</h4>
            <h5>Kontakta kundtjänst</h5>
            </div> <!-- col  avslutar Beställningsformulär -->
            ",
            "warning"
        );
    }
 */
    /**
     * En funktion som skriver ut ett felmeddelande
     * $messageType enligt Bootstrap Alerts
     * https://getbootstrap.com/docs/5.0/components/alerts/
     */
   /*  public function printMessage($message, $messageType = "danger")
    {
        $html = <<< HTML

            <div class="my-2 alert alert-$messageType">
                $message
            </div>

        HTML;

        echo $html;
    } */
}
