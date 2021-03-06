<?php
include __DIR__ . '/../header.php';
echo "<h1>Articles!</h1>";
//foreach ($model as $article) {
//  echo "<h2>$article->title</h2>";
//  echo "<p><i>$article->posted_at</i><p>";
//  echo "<p>$article->content<p>";
//}
include __DIR__ . '/../footer.php';
?>
<div id="articlecontainer"></div>
<script>
        function Fetcharticles(){
            
            fetch('/api/article')
            .then(result => result.json())
            .then(articles => {
                //console.log('test');
                articles.forEach(article => {
                    
                    const container = document.createElement('div');
                    const header = document.createElement('h2');
                    const posted_at_container = document.createElement('p');
                    const posted_at = document.createElement('i');
                    const paragraph = document.createElement('p');
                    const editbutton = document.createElement('button');
                    const deletebutton = document.createElement('button');
                   
                    header.innerHTML = article.title;
                    posted_at.innerHTML = article.posted_at;
                    paragraph.innerHTML = article.content;
                    editbutton.innerText = "edit article";
                    deletebutton.innerText = "delete article";

                    editbutton.onclick = window.location.href = "/article/addingarticle";
                    deletebutton.onclick = window.location.href = "/article/deletingarticle";
                    
                    posted_at_container.appendChild(posted_at); 
                    container.appendChild(header);
                    container.appendChild(posted_at_container);
                    container.appendChild(paragraph);
                    container.appendChild(editbutton);
                    container.appendChild(deletebutton);
                   
                    document.getElementById('articlecontainer').appendChild(container);
                });
                console.log(articles)
            })
            .catch(error => console.log(error));
        }
        Fetcharticles();
    </script>
    </body>
</html>
