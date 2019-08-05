        <?php

    foreach ($data as $comment) {
      echo '<div class="media mb-4">
          <img class="d-flex mr-3 rounded-circle" height="50px" width="50px" src="'.$this->avatar.'" alt="">
          <div class="media-body">
            <h5 class="mt-0">'.$this->name.'</h5>'
            .$this->Comment.
            '</div>'
          .'</div>';
      }
         ?>