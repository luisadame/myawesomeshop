<div class="product">
    <div class="card">
        <div class="card-image">
            <figure class="image is-4by3">
                <a href="/product?id=<?=$product->id?>">
                    <img src="<?=$product->image?>" alt="Product image">                 
                </a>
            </figure>
        </div>
      <div class="card-content">
        <div class="level">
            <p class="title is-4">
                <a href="/product?id=<?=$product->id?>">
                    <?=$product->name?>
                </a>
            </p>
            <p class="title is-4 has-text-weight-light"><?=$product->price?>€</p>
        </div>
        <div class="content">
            <?=$product->description?>      
        </div>
      </div>
    </div>
</div>
