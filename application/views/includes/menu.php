<?php
    $menu = $this->session->userdata('menu');
?>
<nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <?php
           foreach($menu as $key){ 
            
            if($key->tipo == "pai"){
            ?>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="menu-icon mdi mdi-content-copy"></i>
              <span class="menu-title"><?= $key->nome ?></span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                 <?php 
                  foreach($menu as $key2){
                    if($key2->id_pai == $key->id){ 
                  ?>
                    <li class="nav-item">
                      <a class="nav-link" href="<?= $key2->url ?>"><?= $key2->nome; ?></a>
                    </li>
                  <?php
                    }
                   }
                  ?>
              </ul>
            </div>
          </li>
            <?php
            }else{
               if($key->tipo == ""){
            ?>
            <li class="nav-item">
              <a class="nav-link" href="<?= $key->url; ?>">
                <i class="menu-icon mdi mdi-television"></i>
                <span class="menu-title"><?= $key->nome; ?></span>
              </a>
            </li>
            <?php
              }
            }
          }
          ?>
         
        </ul>
      </nav>