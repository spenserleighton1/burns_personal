<?php // Google Maps
wp_enqueue_script('google-maps', 'https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyBNZ6_x_Z1kaWvjt6pWV6Wx-L8rsGQE8go', array('jquery'), true);
?>

<script type='text/javascript'>
    // console.log('locations:', <?php echo json_encode($DATA); ?>);
</script>

<div id="map-locations" style="display: none">
    <?php 
        echo json_encode($DATA->locations)
    ?>
</div>

<div id="the-map" class="the-map">
    <div id="map"></div>
</div>