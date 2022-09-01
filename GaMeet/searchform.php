

    <form id="search-box" role="search" method="get" action="<?php bloginfo('url'); ?>">
        <h2>検索</h2>
        <div id="checkbox">
            <h4 class="yellow">絞り込み条件</h4>
            <div id="checkbox-list">
                <?php
                $num = 0;
                $terms = get_terms('post_tag', array(
                    'orderby' => 'name'  //色々指定できます
                    ) );
                    if(!is_wp_error($terms)):
                        foreach($terms as $term):

                //チェックリスト値の受け渡し
                $t_check=filter_input(INPUT_GET,'check01[]',FILTER_DEFAULT,["options" => ["default" => []],"flags" => FILTER_REQUIRE_ARRAY]);
                $checked["check01[]"] = [ $term->term_id => ""];
                foreach((array)$t_check as $val){
                $checked["check01[]"][$val]="checked";
                }
                ?>
                <div class="checkbox-one">
                    <label>
                        <input type="checkbox" id="<?php echo 'checkbox'.$num ?>" name="check01[]" value="<?php echo $term->term_id; ?>" <?php echo $checked["check01[]"][$term->term_id]; ?>>
                        <div class="checkbox-before" id="<?php echo 'checkbox-before'.$num ?>"></div><?php echo $term->name . '(' . $term->count . ')'; ?>
                    </label>
                </div>
                <?php 
                        $num += 1;
                        endforeach; 
                    endif; 
                ?>
            </div>
        </div>
        <label>
            <h4 class="yellow">フリーワード検索</h4>
            <input type="search"
                placeholder="<?php echo esc_attr_x( 'キーワードを入力', 'placeholder'); ?>"
                value="<?php echo esc_html(get_search_query() ); ?>" name="s" >
        </label>

        <input id="submit" type="submit" value="絞り込む">
    </form>

