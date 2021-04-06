<div class="category-content">
    <div class="container">
        <h3 style="text-align: center">Категории</h3>


        <?php

        foreach ($categoryArr as $key1 => $item){
            foreach ($item as $key2 => $value){ ?>
                <ul>
                <li><?=$key2?></li>
                <ul>
        <?php
                foreach ($value as $value2){ ?>

                            <li><?=$value2?></li>

        <?php
                }
                ?>
                </ul>
                </ul>
                    <?php
            }
        }

        ?>

    </div>
</div>