<?php
use App\Services\Page;
$categories = new \App\Controllers\Category();
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
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Создание продукта</h3>
                    </div>
                    <form action="product/create" method="post" enctype="multipart/form-data">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Заголовок</label>
                                        <input name="name" id="title" type="text" class="form-control" value="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Цена</label>
                                        <input name="price"  id="price" type="text" class="form-control" value="0">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Категория</label>
                                <select name="category_id">
                                    <?php foreach ($categories->getCategories() as $category){ ?>
                                    <option value="<?php echo $category['id']; ?>"><?php echo $category['name']; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="form-check-label" for="text">Описаине</label>
                                <input class="form-control" type="text" value="" id="text" name="text">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">Картинка</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="image_uri" name="image_uri" placeholder="">
                                        <label class="custom-file-label" for="image_uri">Выбрать</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Создать</button>
                        </div>
                    </form>
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