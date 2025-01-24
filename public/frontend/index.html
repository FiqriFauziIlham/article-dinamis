<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Article List</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        .article {
            border: 1px solid #ccc;
            padding: 15px;
            margin-bottom: 10px;
        }
        .article h2 {
            margin: 0 0 10px;
        }
        .article p {
            margin: 0;
        }
    </style>
</head>
<body>
    <h1>Articles</h1>
    <div id="articles"></div>

    <script>
        // Fetch articles from the API
        fetch('http://127.0.0.1:8000/api/articles')
            .then(response => response.json())
            .then(data => {
                const articlesContainer = document.getElementById('articles');
                data.forEach(article => {
                    const articleDiv = document.createElement('div');
                    articleDiv.className = 'article';
                    articleDiv.innerHTML = `
                        <h2>${article.title}</h2>
                        <p>${article.content}</p>
                        <small>Created at: ${new Date(article.created_at).toLocaleString()}</small>
                    `;
                    articlesContainer.appendChild(articleDiv);
                });
            })
            .catch(error => console.error('Error fetching articles:', error));
    </script>
</body>
</html>
