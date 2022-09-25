<?php
use App\Services\Page;
$category = new \App\Controllers\Category();
$product = new \App\Controllers\Product();
$product = $product->getProduct($_POST['id']);
?>
<html lang="en">
<?php
Page::part('head');
?>
<body>
<?php Page::part('navbar'); ?>
<div class="wrapper d-flex flex-column min-vh-100 bg-light">
    <div class="body flex-grow-1 px-3">
        <div class="container-lg">
            <div class="row">
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                        <tr>
                            <th>Название</th>
                            <th>Цена</th>
                            <th>Описание</th>
                            <th>Категория</th>
                            <th class="tr-header-buttom" style="width: 100px"></th>
                        </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><?php echo $product['name']?></td>
                                <td><?php echo $product['price']?></td>
                                <td><?php echo $product['text']?></td>
                                <td><?php echo $category->getCategory($product['category_id'])['name']?></td>
                                <td>  <img src="" alt=""></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
Page::part('footer');
?>
</body>



</html>