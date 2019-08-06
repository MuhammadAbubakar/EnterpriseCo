 <?php  
include '../functions/cat.php';
$cat = new Categories;
$getCat = $cat->getCats();
 ?>
 <div class="card my-4">
          <h5 class="card-header">Categories</h5>
          <div class="card-body">
            <div class="row">
              <div class="col">
                <ul class="list-unstyled mb-0">

                  <?php
                  foreach ($getCat as $Categorie) {
                    echo '<li>
                            <a class="text-decoration-none" href="category.php?id='.$Categorie->slug.'">'.$Categorie->name.'</a>
                          </li>';
                  }
                  ?>
                </ul>
              </div>
            </div>
          </div>
        </div>