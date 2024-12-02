<?php

class StoreController {
    private $storeController;

    public function __construct() {
        $this->storeController = new StoreModel();
    }

    public function store() {
        $products = $this->storeController->getProducts();
        $categories = $this->storeController->getCategories();
        $publishers = $this->storeController->getPublishers();

        $price = isset($_GET['price']) ? $_GET['price'] : null;
        $category = isset($_GET['category']) ? $_GET['category'] : null;
        $publisher = isset($_GET['publisher']) ? $_GET['publisher'] : null;

        $filterProducts = $products; // Mặc định là tất cả sản phẩm

        // Lọc sản phẩm nếu có điều kiện
        if ($price || $category || $publisher) {
            $filterProducts = $this->storeController->filterProducts($price, $category, $publisher);
        }

        
        
        view('store', [
            'filterProducts' => $filterProducts,   
            'products' => $products,
            'categories' => $categories,
            'publishers' => $publishers,
        ]);

    }
}
?>