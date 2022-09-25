<?php use App\Services\Page;
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
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                        <tr>
                            <th>Название</th>
                            <th>Картинка</th>
                            <th class="tr-header-buttom" style="width: 100px"></th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($categories->getCategories() as $category){ ?>
                        <tr>
                            <td><?php echo $category['name']; ?></td>
                            <td>  <img src="" alt=""></td>
                            <td>
                                <ul class="list-inline d-inline-flex">
                                    <li class="tr-remove"><a href="" class="btn btn-block btn-danger"><i class="fa fa-remove margin-r-5"></i> Удалить</a></li>
                                </ul>
                            </td>
                        </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>