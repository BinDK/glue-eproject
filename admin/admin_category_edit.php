<?php 
require_once 'connect.php';
$id = $_GET['id'];
$result = mysqli_query($con, 'select * from db_category where id = '.$id);
$msg = null;
$success = null;
$category = mysqli_fetch_array($result);
if (isset($_POST['btnChangeCategory'])) {
    $species = $_POST['species'];
    $description = $_POST['description'];
    mysqli_query($con,'update db_category set species_name = "'.$species.'", description = "'.$description.'" where id = '.$id);        
    }
 ?>
<link href="css/styles.css" rel="stylesheet">

<body class="bg-primary">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-6">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header">
                                    <h3 class="text-center font-weight-light my-4">Change category row no
                                        <?= $_GET['id'] ?>
                                    </h3>
                                </div>
                                <div class="card-body">
                                    <form method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label class="small mb-1" for="species">Title</label>
                                            <input class="form-control py-4" name="species" type="text" placeholder="Enter new title" value="<?= $category['species_name'] ?>">
                                        </div>
                                        <div class="form-group">
                                            <label class="small mb-1" for="description">Description</label>
                                            <input class="form-control py-4" name="description" type="text" placeholder="Enter new description" value="<?= $category['description'] ?>">
                                            <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <div>
                                                    <?= $success; ?>
                                                    <?=  $msg; ?>
                                                </div>
                                                <input type="submit" class="btn btn-primary" name="btnChangeCategory" value="  Change Category  ">
                                                <input type="hidden" name="id" value="<?= $_GET['id']; ?>">
                                            </div>
                                    </form>
                                </div>
                                <div class="card-footer text-center">
                                    <div class="small"><a href="index.php?page=admin_category">Back to category</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
        <div id="layoutAuthentication_footer">
        </div>
    </div>
    
<style type="text/css">
    .nav-cate{
        color: white !important;
        background-color: #2FB36A !important;
    }
</style>
</body>
</html>