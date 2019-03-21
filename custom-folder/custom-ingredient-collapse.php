<div class="container p-0">
    <div class="row">
        <div class="col-md-7">
            <div id="list" class="list-group">
                <a data-toggle="collapse" id="elem-collapse" href="#collapse_ingredient" role="button"
                aria-expanded="true"
                aria-controls="collapse_ingredient" class="collapse-title list-group-item list-title d-flex
                justify-content-between  align-items-center">
                <span>Ингредиент</span><i class="fa fa-angle-down"></i>
            </a>
            <hr>
            <div class=" collapse list-collapse show" id="collapse_ingredient">
                <div class="list-title-count">Количество: <a
                    class="minus btn btn-secondary-dev btn-secondary-dev-c1"><i
                    class="fas fa-minus"></i></a><input type="text" class="num-list-count"
                    value="<?php echo CFS()->get('_count'); ?>"></span>
                    <a class="plus btn btn-secondary-dev "><i class="fas fa-plus"></i></a></div>
                    <hr>
                    <div class="wrap-collapse list-group">
                        <?php
                        $groupFilds = CFS()->get('_list_group_recipe');
                        if(!empty($groupFilds)){
                            foreach ($groupFilds as $k => $value) {
                                echo "<h4 class='title-sm'><span>".$value['_list_group_name']."</span></h4>";
                              foreach ($value['_list'] as $field) { ?>
                                <div class="form-check d-flex flex-column align-items-end justify-content-between">
                                    <a href="#"
                                    class="fixed-ing-list through list-group-item list-group-item-action d-flex justify-content-between align-items-start">
                                    <h5 class="mb-1"><i class="fas fa-circle"></i><span
                                        class="_ingredients"><?php echo $field['_ingredients']; ?></h5></span>
                                        <span><em class="count_num"><?php echo $field['_count_ingridien']; ?></em><em>   <?php echo $field['_count_ingridien_name']; ?></em></span>
                                    </a>
                                    <ul class='_ingredients-info list-unstyled  m-0 d-flex flex-wrap align-items-center'>
                                        <li class='_ingredients-image'></li>
                                        <li class='_ingredients-calories'><span>Калорийность:</span></li>
                                        <li class='_ingredients-proteins'><span>Белки:</span></li>
                                        <li class='_ingredients-carbohydrates'><span>Углеводы:</span></li>
                                        <li class='_ingredients-fats'><span>Жиры:</span></li>
                                    </ul>
                                </div>
                                <?php
                            }
                        }
                    }else{
                        $fields = CFS()->get('_list');
                        foreach ($fields as $field) { ?>
                            <div class="form-check d-flex flex-column align-items-end justify-content-between">
                                <a href="#"
                                class="fixed-ing-list through list-group-item list-group-item-action d-flex justify-content-between align-items-start">
                                <h5 class="mb-1"><i class="fas fa-circle"></i><span
                                    class="_ingredients"><?php echo $field['_ingredients']; ?></h5></span>
                                    <span><em class="count_num"><?php echo $field['_count_ingridien']; ?></em><em>   <?php echo $field['_count_ingridien_name']; ?></em></span>
                                </a>
                                <ul class='_ingredients-info list-unstyled  m-0 d-flex flex-wrap align-items-center'>
                                    <li class='_ingredients-image'></li>
                                    <li class='_ingredients-calories'><span>Калорийность:</span></li>
                                    <li class='_ingredients-proteins'><span>Белки:</span></li>
                                    <li class='_ingredients-carbohydrates'><span>Углеводы:</span></li>
                                    <li class='_ingredients-fats'><span>Жиры:</span></li>
                                </ul>
                            </div>

                        <?php }
                    }
                    ?>

                </div>

            </div>
        </div>
    </div>
    <div class="col-md-5">
        <div class='wrap-calories wrap-calories-s effect4'>
            <ul>
                <li class="result-calories"><span>Калорийность, ккал:</span><span class='result-count'></span></li>
                <li class="result-proteins"><span>Белки, г:</span><span class='result-count'></span></li>
                <li class="result-carbohydrates"><span>Углеводы, г:</span><span class='result-count'></span></li>
                <li class="result-fats"><span>Жиры, г:</span><span class='result-count'></span></li>
            </ul>
        </div>

    </div>
</div>
</div>