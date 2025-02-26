<?php
$featured_sales = [
    ['price' => '290,000$', 'type' => 'Apartment for sale', 'location' => 'London, Oxford St.', 'date' => '28 November 2020', 'size' => '150 m²'],
    ['price' => '290,000$', 'type' => 'Apartment for sale', 'location' => 'London, Oxford St.', 'date' => '28 November 2020', 'size' => '150 m²'],
    ['price' => '290,000$', 'type' => 'Apartment for sale', 'location' => 'London, Oxford St.', 'date' => '28 November 2020', 'size' => '150 m²']
];

foreach ($featured_sales as $sale): ?>
    <div class="col-md-4">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title"><?php echo $sale['price']; ?></h5>
                <p class="card-text"><?php echo $sale['type']; ?></p>
                <p class="card-text"><?php echo $sale['location']; ?></p>
                <p class="card-text"><?php echo $sale['date']; ?></p>
                <p class="card-text"><?php echo $sale['size']; ?></p>
            </div>
        </div>
    </div>
<?php endforeach; ?>