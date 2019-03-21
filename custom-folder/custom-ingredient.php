   <div class="list-group">
    <a class="list-group-head list-group-item list-group-item-action flex-column align-items-start ">
     <div class="d-flex w-100 justify-content-between  align-items-center"><h5 class="mb-0">ИНГРЕДИЕНТЫ</h5>
       <div class="hamburger hamburger--collapse is-active">
        <div class="hamburger-box">
          <div class="hamburger-inner"></div>
        </div>
      </div>
    </div>
  </a>
  <div class="d-flex-ing fixed-ing-collapse">
    <?php 
    $groupFilds = CFS()->get('_list_group_recipe');
    if(!empty($groupFilds)){
      foreach ($groupFilds as $k => $value) {
        echo "<h4 class='title-sm'><span>".$value['_list_group_name']."</span></h4>";
        foreach ($value['_list'] as $field) { ?>
         <a href="#" class="fixed-ing-list through list-group-item list-group-item-action flex-column align-items-start">
           <div class="d-flex w-100 justify-content-between"><h5 class="mb-1"><i class="fas fa-circle"></i><span class="_ingredients"><?php  echo $field['_ingredients'];?></span></h5> <p><em class="count_num"><?php  echo $field['_count_ingridien'];?></em><em>   <?php  echo $field['_count_ingridien_name'];?></em></p></div>
         </a>
         <?php
       }
     }
   }else{

     $fields = CFS()->get( '_list' );
     foreach ( $fields as $field ) {?>
      <a href="#" class="fixed-ing-list through list-group-item list-group-item-action flex-column align-items-start">
       <div class="d-flex w-100 justify-content-between"><h5 class="mb-1"><i class="fas fa-circle"></i><span class="_ingredients"><?php  echo $field['_ingredients'];?></span></h5> <p><em class="count_num"><?php  echo $field['_count_ingridien'];?></em><em>   <?php  echo $field['_count_ingridien_name'];?></em></p></div>
     </a>
   <?php }
 }
 ?>
</div> 
</div>