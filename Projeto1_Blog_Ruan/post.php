<?php
include_once "templates/header.php";

if(isset($_GET['id'])){
    $postId = $_GET['id'];
    $current;
}

foreach($posts as $post){
    if($post['id'] == $postId){
        $current = $post;
    }
}
?>

    <main id="post-container">
        <div class="contact-container">
            <h1 id="main-title"><?= $current['title']?></h1>
            <p id="post-description"><?= $post['description']?></p>
            <div class="img-container">
                <img src="<?= $BASE_URL ?>/img/<?= $current['img'] ?>" alt="<?= $current['title']?>">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum, perspiciatis tenetur aut consectetur nam aliquid nisi eum ipsum sunt, impedit error, itaque accusantium alias id adipisci molestiae aperiam odio corrupti!</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus blanditiis aliquid eos, accusantium perspiciatis omnis asperiores illo eum! Nemo vel odio cum repellat dicta error molestiae veniam architecto dignissimos repellendus.</p>

            </div>

        </div>
   
    <aside id="nav-container">
      <h3 id="tags-title">Tags</h3>
      <ul id="tag-list">
        <?php foreach($current['tags'] as $tag): ?>
          <li><a href="#"><?= $tag ?></a></li>
        <?php endforeach; ?>
      </ul>
      <h3 id="categories-title">Categorias</h3>
      <ul id="categories-list">
        <?php foreach($categories as $category): ?>
          <li><a href="#"><?= $category ?></a></li>
        <?php endforeach; ?>
      </ul>
    </aside>
    </main>


<?php
include_once "templates/footer.php"
?>