<?php
use App\Services\Page;
use App\Controllers\Product;
$product = new Product();
$category = new \App\Controllers\Category();
?>
<html lang="en">
<?php
Page::part('head');
?>
<body>
<?php Page::part('navbar'); ?>
<div class="wrapper d-flex flex-column min-vh-100 bg-light">
    <ul class="list-inline d-inline-flex">
        <li class="tr-remove"><a href="product_new" class="btn btn-block btn-success"><i class="fa fa-remove margin-r-5"></i> Создать продукт</a></li>
    </ul>
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
                        <?php foreach ($product->getProducts() as $product){ ?>
                        <tr>
                            <td><?php echo $product['name']?></td>
                            <td><?php echo $product['price']?></td>
                            <td><?php echo $product['text']?></td>
                            <td><?php echo $category->getCategory($product['category_id'])['name']?></td>
                            <td>  <img src="" alt=""></td>
                            <td>
                                <ul class="list-inline d-inline-flex">
                                    <form action="product" method="post" enctype="multipart/form-data">
                                        <input type="text" name="id" value="<?php echo $product['id']; ?>" hidden>
                                        <button type="submit" class="btn btn-block btn-primary"><i class="fa fa-edit margin-r-5"></i> Посмотреть</button>
                                    </form>
                                    <li class="tr-remove"><a href="#" class="btn btn-block btn-danger"><i class="fa fa-remove margin-r-5"></i> Удалить</a></li>
                                </ul>
                            </td>
                        </tr>
                        <?php }?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</body>



</html>