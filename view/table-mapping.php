<?php
    // echo '<h1>Demo plugin</h1>';
    // $args = array(
    //     'post_type'      => 'product',
    //     'posts_per_page' => 10,
    //     'product_cat'    => 'eSIM hot'
    // );

    // $loop = new WP_Query( $args );

    // while ( $loop->have_posts() ) : $loop->the_post();
    //     global $product;
    //     echo '<br /><a href="'.get_permalink().'">' . woocommerce_get_product_thumbnail().' '.get_the_title().'</a>';
    // endwhile;

    // wp_reset_query();
?>

<?php
    // Set your args
    $args = array(
        'limit' => -1,
        'orderby' => 'date',
        'order' => 'DESC'
    );

    // Perform Query
    $query = new WC_Product_Query($args);

    // Collect Product Object
    $products = $query->get_products();

    // Loop through products
    if ( ! empty( $products ) ) {
        foreach ($products as $product) {
            //echo get_permalink( $product->get_id() ) . '<br>';
            echo '<br />
            <a href="'.get_permalink($product->get_id()).'">' . woocommerce_get_product_thumbnail().' '.get_the_title($product->get_id()).'
                <span>'.$product->get_id().'</span>
            </a>
            <input type="text" class="input-map-store" />
            ';
        }
    }

    wp_reset_query();

    function getPlanListEsim() {
        $url = 'http://b2b.esimstore.net/api/v1/planlist';
        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_HTTPHEADER, [
            'auth-token: e74e1680-f4f1-4930-af2f-5baec9cc5677'
        ]);
        $res = curl_exec($curl);
        echo $res;
    }

    getPlanListEsim();
?>