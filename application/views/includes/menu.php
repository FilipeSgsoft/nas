<?php
    $menu = $this->session->userdata('menu');
?>
<nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <?php
        
           foreach($menu as $key){ ;
            if($key->modulo == "NULL"){
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
                  foreach($menu as $key_filha){
                    if($key_filha->id_pai == $key->id){ 
                  ?>
                    <li class="nav-item">
                      <a class="nav-link" href="<?= base_url($key_filha->modulo."/".$key_filha->view) ?>"><?= $key_filha->nome ?></a>
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
               if($key->id_pai == 0){
            ?>
            <li class="nav-item">
            <a class="nav-link" href="<?= base_url($key->modulo."/".$key->view) ?>">
                <i class="menu-icon mdi mdi-television"></i>
                <span class="menu-title"><?= $key->nome ?></span>
              </a>
            </li>
            <?php
               }
            }
          }
          ?>
         
        </ul>
      </nav>